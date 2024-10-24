<?php include_once("templates/header.php") ?>
<main>
    <section class="main-container-section">
        <div class="container-fluid main-container d-flex align-items-start">
            <div class="col-6 main-container-wrapper">
                <h1>Meu Portfólio.</h1>
                <p class="me-5">Esse projeto é um teste de portfólio para testar meus aprendizados nas linguagens e tecnologias que venho aprendendo: HTML, CSS, Javascript e PHP.</p>
                <div class="d-flex justify-content-end">
                    <button class="saiba-mais-btn">Saiba mais.</button>
                </div>
                <div class="my-medias d-flex justify-content-end align-items-center">
                    <p class="mb-0">Minhas redes: </p>
                    <a href="#"><button><i class="bi bi-linkedin"></i></button></a>
                    <a href="#"><button><i class="bi bi-youtube"></i></button></a>
                    <a href="#"><button><i class="bi bi-twitter-x"></i></button></a>
                </div>
            </div>
            <div class="col-6 projects h-100 d-flex flex-column  pb-5">
                
                <div class="title-wrapper d-flex justify-content-end">
                    <div class="btns-swiper-projects">
                        <button class="proj-btn-prev"><i class="bi bi-chevron-bar-left"></i></button>
                        <button class="proj-btn-next"><i class="bi bi-chevron-bar-right"></i></button>
                    </div>
                    <h2>Meus projetos;</h2>
                </div>
                <div class="swiper-content">
                    <div class="swiper projSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="projects-card">
                                    <div class="card-img">
                                        <img src="<?= $BASE_URL ?>imgs/test-proj.png">
                                    </div>
                                    <div class="card-info">
                                        <p>Nome do Projeto</p>
                                        <p>Tecnologias utilizadas: </p>
                                        <p>Descrição: Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum non consectetur, ipsum reiciendis nulla. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, assumenda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="projects-card">
                                    <div class="card-img">
                                        <img src="<?= $BASE_URL ?>imgs/test-proj.png">
                                    </div>
                                    <div class="card-info">
                                        <p>Nome do Projeto</p>
                                        <p>Tecnologias utilizadas: </p>
                                        <p>Descrição: Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum non consectetur, ipsum reiciendis nulla. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, assumenda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="projects-card">
                                    <div class="card-img">
                                        <img src="<?= $BASE_URL ?>imgs/test-proj.png">
                                    </div>
                                    <div class="card-info">
                                        <p>Nome do Projeto</p>
                                        <p>Tecnologias utilizadas: </p>
                                        <p>Descrição: Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum non consectetur, ipsum reiciendis nulla. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, assumenda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="projects-card">
                                    <div class="card-img">
                                        <img src="<?= $BASE_URL ?>imgs/test-proj.png">
                                    </div>
                                    <div class="card-info">
                                        <p>Nome do Projeto</p>
                                        <p>Tecnologias utilizadas: </p>
                                        <p>Descrição: Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum non consectetur, ipsum reiciendis nulla. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, assumenda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include_once("templates/footer.php") ?>