<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="../assets/img/coffee-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Dulce Palladar</title>

</head>

<body>

    <section class="section-header" id="header">

        <div class="bg-section">

            <video class="vid-banner" src="../assets/vid/vidbanner.mp4" autoplay loop muted></video>

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
                            <a class="active" href="#header">Home</a>
                        </li>

                        <li>
                            <a href="#cardapio">Cardápio</a>
                        </li>

                        <li>
                            <a href="#especiais">Especiais</a>
                        </li>

                        <li>
                            <a href="#footer">Contato</a>
                        </li>
                        
                        <div class="contato-mobile">

                            <li>
                                <img src="../assets/img/email.png" alt="">
                                <a href="#">email@company.com</a>
                            </li>

                            <li>
                                <img src="../assets/img/telephone.png" alt="">
                                <a href="#">+55 (12) 22424-2424</a>
                            </li>

                        </div>

                        <div class="social-mobile">

                            <a href="#">
                                <img src="../assets/img/twitter.png" alt="">
                            </a>

                            <a href="#">
                                <img src="../assets/img/facebook.png" alt="">
                            </a>

                            <a href="#">
                                <img src="../assets/img/instagram.png" alt="">
                            </a>

                            <a href="#">
                                <img src="../assets/img/whatsapp.png" alt="">
                            </a>

                        </div>

                    </ul>

                    <div class="box-btn-reservar-mobile">

                        <a class="btn-reservar-mobile" href="#">Reservar</a>

                    </div>

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

            <div class="text-banner">

                <h1>Dulce Palladar</h1>

                <p>Bem-vindo ao Dulce Palladar, onde tradição e sabor se encontram. 
                    Desfrute de cafés especiais e momentos únicos em um ambiente
                    acolhedor e cheio de personalidade.
                </p>

                <a  class="btn-reservar-mobile-principal btn" href="#">Reservar</a>

            </div>

        </div>

    </section>

    <div class="services">

        <div class="box-services">

            <img src="../assets/img/moto-icon.png" alt="">

            <h4>Entrega grátis</h4>

            <p>Receba seu pedido no conforto da sua casa, com rapidez e qualidade garantida.</p>

        </div>

        <div class="box-services">

            <img src="../assets/img/presente-icon.png" alt="">

            <h4>Recompensas</h4>

            <p>Acumule pontos a cada compra e troque por benefícios exclusivos no nosso café.</p>

        </div>

        <div class="box-services">

            <img src="../assets/img/desconto-icon.png" alt="">

            <h4>Ofertas e Descontos</h4>

            <p>Aproveite nossas promoções especiais pensadas para você economizar com sabor.</p>

        </div>

        <div class="box-services">

            <img src="../assets/img/atendimento-icon.png" alt="">

            <h4>Serviços Online</h4>

            <p>Faça seu pedido online de forma prática, rápida e segura, direto do nosso site.</p>

        </div>

    </div>

    <section class="section-sobre">

        <div class="box-text">

            <p class="title">Sobre nós</p>

            <h2 class="sub-title">Descubra O Sabor Do <br> Real <span>Café com amigos.</span></h2>

            <p>Nossa missão é oferecer mais do que café. 
                Somos apaixonados por criar experiências que unem aroma, 
                sabor e boas conversas. No Dulce Palladar, cada detalhe é pensado
                 para você se sentir em casa.
            </p>

            <p>Trabalhamos com grãos selecionados,
                 receitas artesanais e um ambiente acolhedor.
                  Aqui, cada xícara conta uma história de dedicação,
                   qualidade e amor pelo que fazemos.
            </p>

            <div class="box-btn-leiamais">
                <a class="btn-leia-mais btn" href="#">Leia Mais</a>
            </div>

        </div>

        <div class="box-img">
            <img src="../assets/img/cafe-amigos.jpg" alt="">
        </div>

    </section>

    <section class="menu-especial" id="cardapio">

        <div class="menu-especial-title">

            <h5>Conheça Nosso Cardápio</h5>

            <h2>Saboreie Nossas Especialidades</h2>

            <p>Explore nosso cardápio repleto de sabores incríveis.
                 Temos desde cafés especiais até doces artesanais e lanches preparados
                  com muito carinho.

            </p>

        </div>

        <div class="box-especialidades">

            <div class="esp-text">

                <h2>Culinária <br> <span>Exclusiva</span></h2>

                <p>Explore nossa ampla seleção de pratos em um cardápio inclusivo e diversificado. Na nossa cozinha,
                    para acompanhar o nosso café, priorizamos qualidade e autenticidade, oferecendo uma experiência
                    gastronômica única em cada visita. Descubra sabores especiais em um ambiente acolhedor.
                </p>

                <a class="btn" href="#">Cardápio</a>

            </div>

            <div class="esp-img">

                <img class="img1" src="../assets/img/cafe.jpg" alt="">
                <img class="img2" src="../assets/img/doce.jpg" alt="">
                <img class="img3" src="../assets/img/pao.jpg" alt="">
                <img class="img4" src="../assets/img/suco.jpg" alt="">

            </div>

        </div>

    </section>

    <section class="section-especial-itens">

        <div class="especial-itens-title">

            <h5>Itens especiais</h5>

            <h2>Encha seu carrinho de variedades</h2>

            <p>Perfeito para qualquer momento do seu dia.
                 Uma combinação equilibrada de sabor e qualidade
                  que encanta desde o primeiro gole.
            </p>

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

    </section>

    <section class="section-brands">

        <div class="title-brands">

            <h5>Marcas</h5>

            <h2>Nossas Marcas</h2>

        </div>

        <div class="box-brands">

            <div class="slider">

                <div class="flex-brand">

                    <div class="brands">
                        <img src="../assets/img/brand-1.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-2.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-3.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-4.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-5.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-6.png" alt="">
                    </div>
    
                </div>
    
                <div class="flex-brand">
    
                    <div class="brands">
                        <img src="../assets/img/brand-1.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-2.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-3.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-4.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-5.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-6.png" alt="">
                    </div>
    
                </div>

                <div class="flex-brand">
    
                    <div class="brands">
                        <img src="../assets/img/brand-1.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-2.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-3.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-4.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-5.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-6.png" alt="">
                    </div>
    
                </div>

            </div>

            <div class="slider">

                <div class="flex-brand reverse">

                    <div class="brands">
                        <img src="../assets/img/brand-7.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-8.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-9.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-10.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-11.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-12.png" alt="">
                    </div>
    
                </div>

                <div class="flex-brand reverse">

                    <div class="brands">
                        <img src="../assets/img/brand-7.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-8.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-9.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-10.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-11.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-12.png" alt="">
                    </div>
    
                </div>

                <div class="flex-brand reverse">

                    <div class="brands">
                        <img src="../assets/img/brand-7.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-8.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-9.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-10.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-11.png" alt="">
                    </div>
    
                    <div class="brands">
                        <img src="../assets/img/brand-12.png" alt="">
                    </div>
    
                </div>
    
            </div>

        </div>

    </section>

    <section class="section-desconto">

        <div class="desconto-img">
            <img src="../assets/img/img-desconto.png" alt="">
        </div>

        <div class="desconto-subscribe">

            <h2>Ganhe <span>25%</span> de desconto!</h2>

            <p>Inscreva-se para ganhar 25% de desconto em sua compras.</p>

            <div class="desconto-email">

                <form action="index.html" method="post" class="form-desconto">

                    <input type="email" name="email" placeholder="Digite seu Email">

                    <button class="btn" type="submit">Inscrever-se</button>

                </form>

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
<script src="../scripts.js"></script>
</html>