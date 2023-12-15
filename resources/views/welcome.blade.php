<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
    <link rel="icon" href="{{ asset('images/favicon.png') }} " />
    <title>Roi Agencia</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/roi.png') }}" alt="" width="100" />
        </a>
        <h5>Roi <b>Agencia</b></h5>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#details">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#duvida">Duvidas</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="header position-relative mt-6 overflow-hidden">
      <div class="container position-relative z-3">
        <div class="row">
          <div class="col-lg-8 text-center">
            <div class="mt-0">
              <h1 id="titulo_principal">
                  Uma agencia sem "formulas magicas". Na ROI temos uma equipe completa focada em te trazer resultados na internet
              </h1>
              <div class="subtitulo_principal">
                <p class="lead mb-4">
                  Deixe com a gente todo aquele tempo gasto para administrar redes sociais e anuncios.
                  Temos um time pronto para lhe ajudar.
                </p>
              </div>


              <div class="botao_form">
                  <a class="elementor-button-link elementor-button elementor-size-lg" href="#introduction" role="button">
                      <span class="elementor-button-content-wrapper">
                          <span class="elementor-button-text">COMEÇAR AGORA</span>
                      </span>
                  </a>
              </div>
              <div class="subtitulo_principal">
                  <h5>
                      Faça parte do nosso time de clientes! <b>+ de 100 clientes atendidos</b>
                  </h5>
              </div>
            </div>
        </div>
      </div>
    </header>

    <!-- Introduction -->
    <section id="introduction" class="intro bg-light py-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 text-center">
            <h1>Quem é a <b>ROI ?</b></h1>
            <h3 id="titulo_sobre">Estamos nesse mercado a 5 anos</h3>
            <p class="fs-5">
              Ter uma equipe selecionada a dedo para entregar o profissionalismo
              que o mercado exige e que seu negócio precisa é o que faz a
              diferença. Um serviço autêntico e comprometido em trabalhar lado a
              lado com a marca,<b> gerando resultados pelo esforço e não com
              “formulas magicas”.</b> <br><br>
                  
              <b>Esqueça agências robotizadas sem Feedback e sem a empatia</b>
              necessária para atingir o lucro tão sonhado, com a ROI você trabalha
              com profissionais dedicados em ofertar o melhor, da melhor forma para
              quem procura ser o melhor!<br><br>

              <b>Um verdadeiro time! Cada área e sua função com um membro da ROI
              focado em você.</b>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Details 1 -->
    <section
      id="details"
      class="details position-relative my-6 overflow-hidden"
    >
      <div class="container position-relative z-3">
        <div class="row">
          <div class="row justify-content-start">
                    <div class="col-4">
                        <div class="box">
                            <h1>Designer Gráfico</h1>
                            <h4 id="valor">R$ 2080,00</h4>
                            <p>Responsável por desenvolver todo material gráfico físico, digital para campanhas de tráfego ou social media.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4">
                        <div class="box">
                            <h1>Gestor de tráfego</h1>
                            <h4 id="valor">R$ 3350,00</h4>
                            <p>Ele é o responsável por garantir que as pessoas certas vejam os seus anúncios no momento certo. Ou seja, é quem garante que a sua empresa chegue até o consumidor final e vice-versa.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-4">
                        <div class="box">
                            <h1>Account Manager</h1>
                            <h4 id="valor">R$ 3760,00</h4>
                            <p>
                                O profissional à frente da estratégia e do
                                dia-a-dia da campanha. É com ele que
                                você terá o maior contato e reuniões
                                semanais com os resultados obtidos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4">
                        <div class="box">
                            <h1>Social Media</h1>
                            <h4 id="valor">R$ 2980,00</h4>
                            <p>
                                O social media desempenha um papel crucial
                                na construção de marca, engajamento do
                                público e disseminação de mensagens,
                                impulsionando a presença online e a interação
                                da empresa com sua audiência.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-4">
                        <div class="box">
                            <h1>Video Maker</h1>
                            <h4 id="valor">R$ 3120,00</h4>
                            <p>
                                Um video maker desempenha um papel
                                essencial na criação de conteúdo visual
                                atraente, contribuindo para o sucesso de
                                marketing e comunicação.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4">
                        <div class="box">
                            <h1>Web Designer</h1>
                            <h4 id="valor">R$ 3800,00</h4>
                            <p>
                                O web designer desempenha o papel de criar
                                e desenvolver o site de sua empresa/negocio.
                                É fundamental ter um site bem projetado para
                                realizar o tráfego pago via google!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h1 id="titulo_equipe_completa">
                    Tenha uma equipe completa <b>pelo preço de um especialista!</b>
                </h1>
            </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact bg-light my-6 position-relative">
      <div class="container position-relative z-3">
        <div class="row">
          <div class="aumente_seu_faturamento">
                <div class="aumente_faturamento">
                    <h1>
                        <b>Aumente</b> seu faturamento
                        com uma equipe completa
                        para te trazer <b>resultados</b>
                    </h1>
                </div>
                <div class="entre_em_contato">
                    <h4>
                        Entre em contato pelo botão WhatsApp ou
                        preenchendo o formulário abaixo
                    </h4>
                </div>
                <form action="#" method="post" id="form_cadastro">
                    @csrf
                    <div>
                        <input type="text" name="nome" class="form-control input-largo" placeholder="Digite seu nome" required>
                    </div>

                    <div>
                        <input type="text" name="telefone" class="form-control input-largo" placeholder="Digite um número para contato" required>
                    </div>

                    <div>
                        <input type="email" name="email" class="form-control input-largo" placeholder="Digite seu email" required>
                    </div>

                    <div class="botao_form">
                        <button type="submit" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                            <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text">QUERO RESULTADOS</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials py-3 pb-6">
      <div id="testimonialCarousel" class="carousel slide">
        <h1>Duvidas Frequentes</h1>
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div
              class="d-flex flex-column justify-content-center align-items-center text-center"
            >
                <div class="fw-bold fs-5 mt-4"><b>Quanto eu pago pelos serviços ?</b></div>
              <p class="w-50 my-4 fst-italic fs-4 mb-4">
                Realizamos um orçamento a partir de sua demanda, temos planos a partir de R$1500,00.
              </p>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div
              class="d-flex flex-column justify-content-center align-items-center text-center"
            >
              <div class="fw-bold fs-5 mt-4"><b>Quanto eu pago pelos serviços ?</b></div>
              <p class="w-50 my-4 fst-italic fs-4 mb-4">
                Realizamos um orçamento a partir de sua demanda, temos planos a partir de R$1500,00.
              </p>
            </div>
          </div>
          <!-- Slide 1 -->
          <div class="carousel-item">
            <div
              class="d-flex flex-column justify-content-center align-items-center text-center"
            >
              <div class="fw-bold fs-5 mt-4"><b>Quanto eu pago pelos serviços ?</b></div>
              <p class="w-50 my-4 fst-italic fs-4 mb-4">
                Realizamos um orçamento a partir de sua demanda, temos planos a partir de R$1500,00.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#testimonialCarousel"
          data-bs-slide="prev"
        >
          <i class="fas fa-arrow-circle-left fa-3x text-secondary"></i>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#testimonialCarousel"
          data-bs-slide="next"
        >
          <i class="fas fa-arrow-circle-right fa-3x text-secondary"></i>
        </button>
      </div>
    </section>

    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="grid_footer">
            <div class="img_footer d-flex align-items-center">
                <img src="{{ asset('images/roi.png') }}" alt="Logo" width="63" height="55" class="d-inline-block align-text-top">
                <b>ROI </b> AGENCIA
            </div>
            <div class="servicos_footer">
                <h2><b>Serviços</b></h2>
                <a>Gestão de Tráfego</a><br>
                <a>Social Media</a><br>
                <a>Gestão de Redes</a><br>
                <a>Criação de Sites</a><br>
                <a>Criação de Conteúdo</a><br>
            </div>

            <div class="contato_footer">
                <h2><b>Contato</b></h2>
                <a>Solicite um Atendimento</a><br>
                <a>Instagram</a><br>
                <a>Facebook</a><br>
                <a>Whatsapp</a><br>
                <a>E-mail</a><br>
            </div>

            <div class="sobre_footer">
                <h2><b>Sobre</b></h2>
                <a>Dúvidas</a><br>
                <a>Sobre</a><br>
                <a>Políticas de Privacidade</a><br>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>                </a>
                <a>
                </a>
                <a ></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <button id="to-top" class="to-top-btn">
      <img src="{{asset('images/up-arrow.png')}}" alt="" />
    </button>

    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('script.js') }}"></script>
  </body>
</html>
