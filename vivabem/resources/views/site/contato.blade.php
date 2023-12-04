@extends('layout.layout')

@section('title', 'Contato')

@section('conteudo')



<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>


<!--==============================
    Trilha de Navegação
    ============================== -->
    <div class="breadcumb-wrapper background-image" style=" background-image: url(assets/img/bg/breadcrumb-bg.png);
}" data-bg-src="assets/img/bg/breadcrumb-bg.png">
       
    </div>

    <!--==============================
        Área de Contato
    ==============================-->
    <div class="contact-area space bg-smoke2">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon1.svg" alt="ícone">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Ligue para Nós 24/7</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">+584 (25) 21453</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon2.svg" alt="ícone">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Solicite um Orçamento</span>
                            <h6 class="contact-info_text"><a href="mailto:info@Fitmas.com">info@vivabem.com</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="assets/img/icon/contact-icon3.svg" alt="ícone">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Estação de Serviço</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">São Miguel</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-sec2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900777!2d-46.434437023741005!3d-23.49559225918105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1687806620972!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

    <div class="container">
        <div class="contact-form-area space-bottom">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="contact-form-thumb">
                        <img src="assets/img/normal/contact1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 bg-smoke2">
                    <div class="contact-form-wrap">
                        <div class="title-area">
                            <span class="sub-title">Entre em Contato</span>
                            <h2 class="sec-title">Envie-nos uma Mensagem</h2>
                        </div>
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" id="name" placeholder="Seu Nome">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="email" id="email" placeholder="Endereço de E-mail">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="subject" id="subject" class="form-select style-white">
                                    <option value="" disabled="" selected="" hidden="">Selecione o Assunto</option>
                                    <option value="one">Musculação</option>
                                    <option value="two">Levantamento de Peso</option>
                                    <option value="three">Aula de Meditação</option>
                                    <option value="four">Aula de Boxe</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea placeholder="Digite Sua Mensagem" id="contactForm" class="form-control style-white"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="btn">Enviar Mensagem</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Siga o Nosso
                </span>
                <h2 class="sec-title">Feed do Instagram</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed1.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed1.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed2.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed2.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed3.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed3.png" alt="portfolio">
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed4.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed4.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed5.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed5.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed6.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed6.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed7.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed7.png" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed8.png"><i class="far fa-eye"></i></a>
                        <img src="assets/img/instagram/insta_feed8.png" alt="portfolio">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

@endsection

