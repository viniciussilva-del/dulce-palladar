/* Dulce Palladar - comportamento do front-end (sem dependencias) */
(function () {
  'use strict';

  const IMG = '../assets/img/';
  const CATEGORIES = { cafes: 'Cafés', salgados: 'Pães e salgados', doces: 'Bolos e doces', sucos: 'Sucos' };

  // Precos de demonstracao.
  const MENU = [
    { id: 'latte', cat: 'cafes', name: 'Caffe latte', img: '9.png', price: 8.5, desc: 'Leite cremoso combinado com um espresso encorpado.' },
    { id: 'caramel', cat: 'cafes', name: 'Iced caramel latte', img: '10.png', price: 12, desc: 'Refrescante, doce na medida e com toque de caramelo.' },
    { id: 'mocha', cat: 'cafes', name: 'Caffe mocha', img: '11.png', price: 10.5, desc: 'Café, leite e chocolate em equilíbrio.' },
    { id: 'macchiato', cat: 'cafes', name: 'Espresso macchiato', img: '12.png', price: 7.5, desc: 'Intensidade e sabor marcante em poucos goles.' },
    { id: 'frances', cat: 'salgados', name: 'Pão francês', img: 'pao-frances.png', price: 6.5, desc: 'Crocante por fora e macio por dentro.' },
    { id: 'integral', cat: 'salgados', name: 'Pão integral', img: 'pao-integral.png', price: 9, desc: 'Leve e nutritivo, para quem busca equilíbrio.' },
    { id: 'queijo', cat: 'salgados', name: 'Pão de queijo', img: 'pao-queijo.png', price: 14.5, desc: 'Quentinho, com sabor de queijo que conquista.' },
    { id: 'croissant', cat: 'salgados', name: 'Croissant', img: 'pao-croissant.png', price: 11, desc: 'Folhado e amanteigado, ideal com um bom café.' },
    { id: 'chocolate', cat: 'doces', name: 'Bolo de chocolate', img: 'bolo-choco.png', price: 16, desc: 'Fofinho e intenso, com chocolate de verdade.' },
    { id: 'baunilha', cat: 'doces', name: 'Bolo de baunilha', img: 'bolo-baunilha.png', price: 13.5, desc: 'Suave, delicado e perfumado.' },
    { id: 'coco', cat: 'doces', name: 'Bolo de coco', img: 'bolo-coco.png', price: 8, desc: 'Molhadinho, com coco ralado e toque tropical.' },
    { id: 'redvelvet', cat: 'doces', name: 'Red velvet', img: 'bolo-red.png', price: 10, desc: 'Macio, elegante e cremoso.' },
    { id: 'laranja', cat: 'sucos', name: 'Suco de laranja', img: 'suco-laranja.png', price: 18, desc: 'Laranjas frescas, naturalmente doce.' },
    { id: 'manga', cat: 'sucos', name: 'Suco de manga', img: 'suco-manga.png', price: 15, desc: 'Cremoso e tropical, de manga madura.' },
    { id: 'hortela', cat: 'sucos', name: 'Suco de hortelã', img: 'suco-menta.png', price: 12.5, desc: 'Aromático, com folhas de hortelã.' },
    { id: 'limao', cat: 'sucos', name: 'Suco de limão', img: 'suco-limao.png', price: 9.5, desc: 'Leve e cítrico para revigorar.' }
  ];

  // Horario de funcionamento: segunda a sexta, 9h as 22h.
  const OPEN_HOUR = 9;
  const CLOSE_HOUR = 22;
  const WEEKDAYS = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
  const HOURS = [
    ['Segunda', '09h às 22h'], ['Terça', '09h às 22h'], ['Quarta', '09h às 22h'],
    ['Quinta', '09h às 22h'], ['Sexta', '09h às 22h'], ['Sábado', 'Fechado'], ['Domingo', 'Fechado']
  ];

  const brl = (value) => value.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
  const $ = (selector, root = document) => root.querySelector(selector);
  const $$ = (selector, root = document) => [...root.querySelectorAll(selector)];

  function el(tag, props = {}, children = []) {
    const node = Object.assign(document.createElement(tag), props);
    node.append(...children);
    return node;
  }

  function readStorage(key, fallback) {
    try {
      const value = JSON.parse(localStorage.getItem(key));
      return value ?? fallback;
    } catch {
      return fallback;
    }
  }

  function writeStorage(key, value) {
    try { localStorage.setItem(key, JSON.stringify(value)); } catch { /* armazenamento indisponivel */ }
  }

  /* ---------- Horario e turno ---------- */
  function openStatus(now = new Date()) {
    const day = now.getDay();
    const isWeekday = day >= 1 && day <= 5;
    const isOpen = isWeekday && now.getHours() >= OPEN_HOUR && now.getHours() < CLOSE_HOUR;
    return { isOpen, day };
  }

  function renderStatus() {
    const node = $('[data-status]');
    if (!node) return;
    const { isOpen, day } = openStatus();
    node.dataset.open = String(isOpen);
    node.textContent = isOpen
      ? `Aberto agora · fecha às ${CLOSE_HOUR}h`
      : (day === 5 && new Date().getHours() >= CLOSE_HOUR) || day === 6 || day === 0
        ? 'Fechado · abre segunda, 9h'
        : `Fechado · abre às ${OPEN_HOUR}h`;
  }

  function renderHours() {
    const list = $('[data-hours]');
    if (!list) return;
    const today = WEEKDAYS[new Date().getDay()];
    list.replaceChildren(...HOURS.map(([day, time]) =>
      el('li', { className: day === today ? 'is-today' : '' }, [el('span', { textContent: day }), el('span', { textContent: time })])));
  }

  function shiftPicks(hour) {
    if (hour < 12) return { label: 'Manhã', text: 'Cafés e pães para começar o dia.', cats: ['cafes', 'salgados'] };
    if (hour < 18) return { label: 'Tarde', text: 'Hora do bolo com café.', cats: ['doces', 'cafes'] };
    return { label: 'Noite', text: 'Sucos gelados e algo salgado para fechar.', cats: ['sucos', 'salgados'] };
  }

  function renderCounter() {
    const host = $('[data-counter]');
    if (!host) return;
    const shift = shiftPicks(new Date().getHours());
    const picks = shift.cats.flatMap((cat) => MENU.filter((item) => item.cat === cat).slice(0, 2));
    const label = $('[data-shift]');
    if (label) label.textContent = `${shift.label}: ${shift.text}`;
    host.replaceChildren(...picks.map(itemCard));
  }

  /* ---------- Produtos ---------- */
  function itemCard(item) {
    const add = el('button', { className: 'add', type: 'button', ariaLabel: `Adicionar ${item.name} ao carrinho` });
    add.innerHTML = '<i class="fas fa-plus" aria-hidden="true"></i>';
    add.addEventListener('click', () => addToCart(item.id));
    return el('article', { className: 'item', id: `item-${item.id}` }, [
      el('div', { className: 'item__media' }, [el('img', { src: IMG + item.img, alt: item.name, loading: 'lazy', width: 320, height: 240 })]),
      el('div', { className: 'item__body' }, [
        el('span', { className: 'item__tag', textContent: CATEGORIES[item.cat] }),
        el('h3', { textContent: item.name }),
        el('p', { textContent: item.desc }),
        el('div', { className: 'item__buy' }, [el('span', { className: 'price', textContent: brl(item.price) }), el('span', { className: 'dots' }), add])
      ])
    ]);
  }

  function setupMenuPage() {
    const grid = $('[data-menu]');
    if (!grid) return;
    const chips = $$('[data-chip]');
    const search = $('#search');
    const params = new URLSearchParams(location.search);
    let category = CATEGORIES[params.get('cat')] ? params.get('cat') : 'todos';

    const cards = MENU.map((item) => ({ item, node: itemCard(item) }));
    const empty = el('p', { className: 'empty', textContent: 'Nenhum item encontrado. Tente outro nome ou categoria.', hidden: true });
    grid.replaceChildren(...cards.map((c) => c.node), empty);

    const update = () => {
      const query = (search?.value || '').toLowerCase().trim();
      let visible = 0;
      cards.forEach(({ item, node }) => {
        const match = (category === 'todos' || item.cat === category) && `${item.name} ${item.desc}`.toLowerCase().includes(query);
        node.hidden = !match;
        if (match) visible += 1;
      });
      empty.hidden = visible > 0;
      chips.forEach((chip) => chip.setAttribute('aria-pressed', String(chip.dataset.chip === category)));
    };

    chips.forEach((chip) => chip.addEventListener('click', () => { category = chip.dataset.chip; update(); }));
    search?.addEventListener('input', update);
    update();
  }

  /* ---------- Carrinho ---------- */
  let cart = readStorage('dulceCart', []).filter((line) => MENU.some((m) => m.id === line.id) && line.quantity > 0);
  let drawer;
  let backdrop;

  function buildDrawer() {
    backdrop = el('div', { className: 'drawer-backdrop' });
    const close = el('button', { className: 'icon-btn', type: 'button', ariaLabel: 'Fechar carrinho' });
    close.innerHTML = '<i class="fas fa-xmark" aria-hidden="true"></i>';
    drawer = el('aside', { className: 'drawer', ariaLabel: 'Carrinho', role: 'dialog' }, [
      el('div', { className: 'drawer__head' }, [el('h2', { textContent: 'Seu pedido' }), close]),
      el('ul', { className: 'drawer__list' }),
      el('div', { className: 'drawer__foot' }, [
        el('div', { className: 'total' }, [el('span', { textContent: 'Total' }), el('strong', { id: 'cartTotal', textContent: brl(0) })]),
        el('p', { className: 'demo-note', textContent: 'Site de demonstração: o pedido não é enviado.' })
      ])
    ]);
    close.addEventListener('click', closeCart);
    backdrop.addEventListener('click', closeCart);
    document.addEventListener('keydown', (event) => { if (event.key === 'Escape') closeCart(); });
    document.body.append(backdrop, drawer);
  }

  function openCart() { drawer.classList.add('is-open'); backdrop.classList.add('is-open'); }
  function closeCart() { drawer?.classList.remove('is-open'); backdrop?.classList.remove('is-open'); }

  function changeQuantity(id, delta) {
    cart = cart.map((line) => (line.id === id ? { ...line, quantity: line.quantity + delta } : line)).filter((line) => line.quantity > 0);
    persistCart();
  }

  function addToCart(id) {
    const existing = cart.find((line) => line.id === id);
    cart = existing ? cart.map((line) => (line.id === id ? { ...line, quantity: line.quantity + 1 } : line)) : [...cart, { id, quantity: 1 }];
    persistCart();
    openCart();
  }

  function persistCart() {
    writeStorage('dulceCart', cart);
    renderCart();
  }

  function renderCart() {
    if (!drawer) return;
    const list = $('.drawer__list', drawer);
    const count = cart.reduce((sum, line) => sum + line.quantity, 0);
    const total = cart.reduce((sum, line) => sum + line.quantity * MENU.find((m) => m.id === line.id).price, 0);
    $('#cartTotal', drawer).textContent = brl(total);
    $$('[data-cart-count]').forEach((badge) => { badge.textContent = String(count); badge.hidden = count === 0; });
    if (!cart.length) {
      list.replaceChildren(el('li', { className: 'drawer__empty', textContent: 'Seu carrinho está vazio. Adicione um item do cardápio.' }));
      return;
    }
    list.replaceChildren(...cart.map((line) => {
      const item = MENU.find((m) => m.id === line.id);
      const minus = el('button', { type: 'button', textContent: '−', ariaLabel: `Remover um ${item.name}` });
      const plus = el('button', { type: 'button', textContent: '+', ariaLabel: `Adicionar um ${item.name}` });
      minus.addEventListener('click', () => changeQuantity(line.id, -1));
      plus.addEventListener('click', () => changeQuantity(line.id, 1));
      return el('li', { className: 'line' }, [
        el('strong', { textContent: item.name }),
        el('span', { className: 'price', textContent: brl(item.price * line.quantity) }),
        el('span', { className: 'qty' }, [minus, el('span', { textContent: String(line.quantity) }), plus])
      ]);
    }));
  }

  /* ---------- Navegacao, revelar ao rolar, formularios ---------- */
  function setupNav() {
    const nav = $('.nav');
    const toggle = $('.nav__toggle');
    const links = $('.nav__links');
    if (nav) {
      const sync = () => nav.classList.toggle('is-solid', window.scrollY > 40);
      window.addEventListener('scroll', sync, { passive: true });
      sync();
    }
    toggle?.addEventListener('click', () => {
      const open = links.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', String(open));
    });
    $$('a', links || document.createElement('div')).forEach((a) => a.addEventListener('click', () => {
      links.classList.remove('is-open');
      toggle?.setAttribute('aria-expanded', 'false');
    }));
    $$('[data-open-cart]').forEach((btn) => btn.addEventListener('click', openCart));
  }

  function setupReveal() {
    const targets = $$('.reveal');
    if (!('IntersectionObserver' in window)) { targets.forEach((t) => t.classList.add('is-in')); return; }
    const io = new IntersectionObserver((entries) => entries.forEach((entry) => {
      if (entry.isIntersecting) { entry.target.classList.add('is-in'); io.unobserve(entry.target); }
    }), { threshold: 0.12 });
    targets.forEach((t) => io.observe(t));
  }

  function setupSubscribe() {
    $$('[data-subscribe]').forEach((form) => form.addEventListener('submit', (event) => {
      event.preventDefault();
      const input = $('input[type="email"]', form);
      const note = $('.form-note', form.parentElement);
      if (!input?.checkValidity() || !input.value.trim()) { if (note) note.textContent = 'Digite um e-mail válido, como nome@exemplo.com.'; return; }
      input.value = '';
      if (note) note.textContent = 'Pronto! Este é um site de demonstração, nenhum e-mail foi guardado.';
    }));
  }

  /* Login e cadastro de demonstracao: guarda apenas nome e e-mail, nunca senha. */
  function setupAuth() {
    const form = $('form.form');
    if (!form) return;
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      const email = $('#email', form).value.trim().toLowerCase();
      const name = $('#name', form)?.value.trim() || email.split('@')[0];
      if (!email) return;
      writeStorage('dulceSession', { name, email });
      alert(form.dataset.mode === 'register' ? 'Cadastro de demonstração realizado.' : 'Login de demonstração realizado.');
      window.location.href = '../html/index.html';
    });
    $('[data-forgot]', form)?.addEventListener('click', (event) => {
      event.preventDefault();
      alert('Esta é uma versão de demonstração: não há recuperação de senha.');
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    setupNav();
    buildDrawer();
    renderCart();
    renderStatus();
    renderHours();
    renderCounter();
    setupMenuPage();
    renderCart();
    setupReveal();
    setupSubscribe();
    setupAuth();
  });
})();
