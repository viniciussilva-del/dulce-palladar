<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dulce Palladar | Cardápio</title>
  <link rel="stylesheet" href="../css/cardapio.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="shortcut icon" href="../assets/img/coffee-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <section class="section-header" id="header">

        <div class="bg-section">

            <nav class="navbar">

                <a class="logo" href="#header">Dulce <br> <span>Palladar</span></a>

                <ul class="menu">

                    <li>
                        <a class="active" href="#header">Home</a>
                    </li>

                    <li>
                        <a href="cardapio.php">Cardápio</a>
                    </li>

                    <li>
                        <a href="#especiais">Especiais</a>
                    </li>

                    <li>
                        <a href="#footer">Contato</a>
                    </li>

                </ul>

                <div class="user">

                    <img src="../assets/img/user.png" alt="icone de usuário">

                    <button class="icon-menu-mobile" onclick="abrirMenu()">
                        <img src="../assets/img/menu.png" alt="">
                    </button>

                </div>

                <div class="box-menu-mobile">

                    <button class="fecharmenu" onclick="fecharMenu()">
                        <img src="../assets/img/close.png" alt="">
                    </button>

                    <ul class="menu-mobile">

                        <li>
                            <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a class="active" href="cardapio.php">Cardápio</a>
                        </li>

                        <li>
                            <a href="cadastro.html">Cadastro</a>
                        </li>

                        <li>
                            <a href="#footer">Contato</a>
                        </li>
                        
                     

                        </div>

                   

                    </ul>


                </div>

            </nav>

            <!-- Botão flutuante do carrinho -->
            <div class="floating-cart-button" onclick="abrirCarrinho()">

                <i class="fas fa-bag-shopping"></i>

            </div>

            <!-- Sidebar do carrinho -->
            <div class="sidebar-cart" id="sidebarCart">

                <button class="close-cart" onclick="fecharCarrinho()">×</button>

                <h2>Seu Carrinho</h2>

                <div class="cart-content">

                    <p>Carrinho vazio...</p>

                </div>

            </div>

  <section class="section-especial-itens">
    <div class="pesquisa-filtro">
      <input type="text" class="pesquisa" id="searchInput" placeholder="Pesquisar no cardápio...">
      <div class="filtro" id="filterButtons">
        <button data-category="todos">Todos</button>
        <button data-category="cafes">Cafés</button>
        <button data-category="doces">Doces</button>
        <button data-category="salgados">Salgados</button>
        <button data-category="sucos">Sucos</button>
      </div>
    </div>
    <div class="box-itens-especiais" id="especiais">

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/9.png" alt="">
        </div>

        <div class="text-card">

          <h6>CAFFE LATTE</h6>

          <p>Leite cremoso combinado com um espresso encorpado.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/10.png" alt="">
        </div>

        <div class="text-card">

          <h6>ICED CARAMEL LATTE</h6>

          <p>Refrescante, doce na medida e com aquele toque de caramelo irresistível.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/11.png" alt="">
        </div>

        <div class="text-card">

          <h6>CAFFE MOCHA</h6>

          <p>Uma mistura perfeita de café, leite e chocolate.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/12.png" alt="">
        </div>

        <div class="text-card">

          <h6>ESPRESSO MACCHIATO</h6>

          <p>Para quem busca intensidade e sabor marcante em poucos goles.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

    </div>
    <div class="box-itens-especiais" id="especiais">

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/pao-frances.png" alt="">
        </div>

        <div class="text-card">

          <h6>PÃO FRANCÊS</h6>

          <p>Clássico, crocante por fora e macio por dentro. Ideal para qualquer momento do dia.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/pao-integral.png" alt="">
        </div>

        <div class="text-card">

          <h6>PÃO INTEGRAL</h6>

          <p>Sabor leve e nutritivo, perfeito para quem busca equilíbrio sem abrir mão do gosto.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/pao-queijo.png" alt="">
        </div>

        <div class="text-card">

          <h6>PÃO DE QUEIJO</h6>

          <p>Tradicional, quentinho e com aquele sabor de queijo que conquista a todos.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/pao-croissant.png" alt="">
        </div>

        <div class="text-card">

          <h6>CROISSANT</h6>

          <p>Leve, folhado e amanteigado, ideal para acompanhar um bom café.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

    </div>
    <div class="box-itens-especiais" id="especiais">

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/bolo-choco.png" alt="">
        </div>

        <div class="text-card">

          <h6>BOLO DE CHOCOLATE</h6>

          <p>Fofinho e intenso, com o sabor marcante do chocolate que todo mundo ama.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/bolo-baunilha.png" alt="">
        </div>

        <div class="text-card">

          <h6>BOLO DE BAUNILHA</h6>

          <p>Suave, delicado e perfumado. Um clássico que combina com qualquer ocasião.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/bolo-coco.png" alt="">
        </div>

        <div class="text-card">

          <h6>BOLO DE COCO</h6>

          <p>Leve e molhadinho, com coco ralado que traz um toque tropical irresistível.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/bolo-red.png" alt="">
        </div>

        <div class="text-card">

          <h6>RED VELVET</h6>

          <p>Macio, elegante e com sabor único. Uma combinação perfeita de cor e cremosidade.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

    </div>
    <div class="box-itens-especiais" id="especiais">

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/suco-laranja.png" alt="">
        </div>

        <div class="text-card">

          <h6>Suco de Laranja</h6>

          <p>Refrescante e naturalmente doce, feito com laranjas frescas e suculentas.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/suco-manga.png" alt="">
        </div>

        <div class="text-card">

          <h6>Suco de Manga</h6>

          <p>Cremoso e tropical, com o sabor marcante da manga madura.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/suco-menta.png" alt="">
        </div>

        <div class="text-card">

          <h6>Suco de Hortelã</h6>

          <p>Refrescante e aromático, com o frescor das folhas de hortelã recém-colhidas.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="cards">

        <div class="box-img-card">
          <img src="../assets/img/suco-limao.png" alt="">
        </div>

        <div class="text-card">

          <h6>Suco de Limão</h6>

          <p>Leve e cítrico, perfeito para matar a sede e revigorar.</p>

          <div class="valor-btn">

            <p>$20,00</p>

            <div class="box-btn-cart">
              <i class="fas fa-bag-shopping"></i>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <footer id="footer">

    <div class="box-horarios">

      <h6>Horários de atendimento</h6>

      <div class="horarios">

        <p>Segunda</p>

        <div class="line"></div>

        <p>9:00 - 10.00pm</p>

      </div>

      <div class="horarios">

        <p>Terça</p>

        <div class="line"></div>

        <p>9:00 - 10.00pm</p>

      </div>

      <div class="horarios">

        <p>Quarta</p>

        <div class="line"></div>

        <p>9:00 - 10.00pm</p>

      </div>

      <div class="horarios">

        <p>Quinta</p>

        <div class="line"></div>

        <p>9:00 - 10.00pm</p>

      </div>

      <div class="horarios">

        <p>Sexta</p>

        <div class="line"></div>

        <p>9:00 - 10.00pm</p>

      </div>

      <div class="horarios">

        <p>Sábado</p>

        <div class="line"></div>

        <p>Fechado</p>

      </div>

      <div class="horarios">

        <p>Domingo</p>

        <div class="line"></div>

        <p>Fechado</p>

      </div>

    </div>

    <div class="informacoes">

      <h5>Informações</h5>

      <a href="#">Minha Conta</a>
      <a href="#">Carrinho</a>
      <a href="#">Checkout</a>

    </div>

    <div class="box-contato">

      <h5>Contatos</h5>

      <div class="contato">

        <img src="../assets/img/place-localizer.png" alt="">
        <p>123 Lorem ipsum, sit, amet.</p>

      </div>

      <div class="contato">

        <img src="../assets/img/clock.png" alt="">
        <p>Everyday: 9am - 10pm</p>

      </div>

      <div class="contato">

        <img src="../assets/img/telephone.png" alt="">
        <a href="#">+1 (321) 009-008</a>

      </div>

      <div class="contato">

        <img src="../assets/img/email.png" alt="">
        <a href="#">email@exemplo.com</a>

      </div>

      <div class="social">

        <p>Siga-nos:</p>

        <a href="#">
          <img src="../assets/img/facebook.png" alt="">
        </a>

        <a href="#">
          <img src="../assets/img/tik-tok.png" alt="">
        </a>

        <a href="#">
          <img src="../assets/img/instagram.png" alt="">
        </a>

        <a href="#">
          <img src="../assets/img/twitter.png" alt="">
        </a>

      </div>

    </div>

    <p>&copy; 2025 <span>Dulce Palladar</span>. Todos os direitos reservados.</p>

  </footer>
</body>

</html>