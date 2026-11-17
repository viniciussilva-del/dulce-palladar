function abrirMenu() {
    const menu = document.querySelector('.box-menu-mobile');
    if (menu) menu.classList.add('open');
}

function fecharMenu() {
    const menu = document.querySelector('.box-menu-mobile');
    if (menu) menu.classList.remove('open');
}

window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (navbar) navbar.classList.toggle('scrolling', window.scrollY > 50);
});

function abrirCarrinho() {
    const cart = document.getElementById('sidebarCart');
    if (cart) cart.classList.add('open');
}

function fecharCarrinho() {
    const cart = document.getElementById('sidebarCart');
    if (cart) cart.classList.remove('open');
}

const currency = value => value.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
let cart;
try {
    cart = JSON.parse(localStorage.getItem('dulceCart') || '[]');
    if (!Array.isArray(cart)) cart = [];
} catch {
    cart = [];
}

function renderCart() {
    const content = document.querySelector('.cart-content');
    if (!content) return;
    if (!cart.length) {
        content.innerHTML = '<p>Carrinho vazio...</p>';
        return;
    }
    content.innerHTML = cart.map((item, index) => `<div class="cart-item"><span>${item.name} x${item.quantity}</span><strong>${currency(item.price * item.quantity)}</strong><button data-remove="${index}" aria-label="Remover">×</button></div>`).join('') + `<div class="cart-total">Total: ${currency(cart.reduce((sum, item) => sum + item.price * item.quantity, 0))}</div>`;
    content.querySelectorAll('[data-remove]').forEach(button => button.addEventListener('click', () => {
        cart.splice(Number(button.dataset.remove), 1);
        localStorage.setItem('dulceCart', JSON.stringify(cart));
        renderCart();
    }));
}

function setupMenu() {
    document.querySelectorAll('.box-btn-cart').forEach(button => button.addEventListener('click', () => {
        const card = button.closest('.cards');
        const name = card.querySelector('h6').textContent.trim();
        const price = Number(card.dataset.price || 0);
        const existing = cart.find(item => item.name === name);
        if (existing) existing.quantity += 1;
        else cart.push({ name, price, quantity: 1 });
        localStorage.setItem('dulceCart', JSON.stringify(cart));
        renderCart();
        abrirCarrinho();
    }));
    const cards = [...document.querySelectorAll('.cards')];
    const prices = [8.5, 12, 10.5, 7.5, 6.5, 9, 14.5, 11, 16, 13.5, 8, 10, 18, 15, 12.5, 9.5, 7, 11.5, 14, 6];
    cards.forEach((card, index) => {
        card.dataset.price = prices[index % prices.length];
        card.querySelector('.valor-btn p').textContent = currency(Number(card.dataset.price));
        const name = card.querySelector('h6').textContent.toLowerCase();
        card.dataset.category = /caffe|café|latte|espresso|mocha/.test(name) ? 'cafes' : /suco|vitamina/.test(name) ? 'sucos' : /pão|salgado|quiche|empada|croissant/.test(name) ? 'salgados' : 'doces';
    });
    const search = document.getElementById('searchInput');
    let category = 'todos';
    const update = () => {
        const query = (search?.value || '').toLowerCase().trim();
        cards.forEach(card => card.hidden = (category !== 'todos' && card.dataset.category !== category) || !card.textContent.toLowerCase().includes(query));
    };
    search?.addEventListener('input', update);
    document.querySelectorAll('#filterButtons button').forEach(button => button.addEventListener('click', () => {
        category = button.dataset.category;
        document.querySelectorAll('#filterButtons button').forEach(item => item.classList.toggle('active', item === button));
        update();
    }));
    update();
}

function setupAuth() {
    const form = document.querySelector('.form');
    if (!form) return;
    const email = form.querySelector('#email');
    const password = form.querySelector('#password');
    const name = form.querySelector('#name');
    form.addEventListener('submit', event => {
        event.preventDefault();
        const users = JSON.parse(localStorage.getItem('dulceUsers') || '[]');
        const existing = users.find(user => user.email === email.value.trim().toLowerCase());
        if (form.dataset.mode === 'register') {
            if (existing) return alert('Este e-mail já está cadastrado.');
            users.push({ name: name.value.trim(), email: email.value.trim().toLowerCase(), password: password.value });
            localStorage.setItem('dulceUsers', JSON.stringify(users));
            alert('Cadastro realizado.');
            window.location.href = '../login/form.html';
        } else if (!existing || existing.password !== password.value) alert('E-mail ou senha inválidos.');
        else { localStorage.setItem('dulceSession', JSON.stringify(existing)); window.location.href = '../html/index.html'; }
    });
    document.querySelector('[data-forgot]')?.addEventListener('click', event => {
        event.preventDefault();
        const user = JSON.parse(localStorage.getItem('dulceUsers') || '[]').find(item => item.email === email.value.trim().toLowerCase());
        alert(user ? `Sua senha cadastrada é: ${user.password}` : 'Informe um e-mail cadastrado.');
    });
}

function setupSubscribe() {
    document.querySelectorAll('.form-desconto').forEach(form => form.addEventListener('submit', event => {
        event.preventDefault();
        const input = form.querySelector('input[type="email"]');
        if (!input || !input.value.trim()) return;
        input.value = '';
        alert('Inscrição realizada com sucesso!');
    }));
}

document.addEventListener('DOMContentLoaded', () => {
    setupMenu();
    renderCart();
    setupAuth();
    setupSubscribe();
});
