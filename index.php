<?php
include "assets/php/protocol.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/aos/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="assets/img/profile2.jpg">
    <title>Portfolio | MRZ</title>
</head>

<body>
    <div id="navbar" class="navbar_invisible z-1 position-absolute w-100 h-25"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow z-1 position-fixed top-0 w-100">
        <div class="container">
            <a class="navbar-brand" href="#" data-aos="zoom-in-down" data-aos-anchor-placement="top-bottom">M.Raihan.Z</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-aos="zoom-in-down" data-aos-anchor-placement="top-bottom">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" data-aos="zoom-in-down" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-aos="zoom-in-down" data-aos-delay="50">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education" data-aos="zoom-in-down" data-aos-delay="100">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project" data-aos="zoom-in-down" data-aos-delay="150">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-aos="zoom-in-down" data-aos-delay="200">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="main rounded-2" tabindex="0">
        <div id="home" class="home" data-aos="fade-up">
            <div class="jumbotron text-center">
                <img class="profile img-thumbnail" src="assets/img/profile2.jpg" alt="Photo Profile" width="200">
                <h1 class="display-4" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500" data-aos-duration="900" data-aos-anchor-placement="top-bottom">
                    Muhammad Raihan Zhafran</h1>
                <p class="lead" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500" data-aos-duration="900" data-aos-anchor-placement="top-bottom">
                    Full-Stack Developer</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,320L1344,320L1344,320L1248,320L1248,320L1152,320L1152,320L1056,320L1056,320L960,320L960,320L864,320L864,320L768,320L768,320L672,320L672,320L576,320L576,320L480,320L480,320L384,320L384,320L288,320L288,320L192,320L192,320L96,320L96,320L0,320L0,320Z">
                    </path>
                </svg>
            </div>
        </div>
        <div id="about" class="about">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-about">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,0L1344,0L1344,0L1248,0L1248,0L1152,0L1152,0L1056,0L1056,0L960,0L960,0L864,0L864,0L768,0L768,0L672,0L672,0L576,0L576,0L480,0L480,0L384,0L384,0L288,0L288,0L192,0L192,0L96,0L96,0L0,0L0,0Z">
                </path>
            </svg>
            <div class="container pb-5">
                <div class="row text-center">
                    <div class="col" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="fw-bold">About Me</h2>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus beatae, enim quaerat laborum,
                            exercitationem officiis expedita perspiciatis aperiam tenetur qui quibusdam quas voluptatem.
                            Exercitationem consequuntur eaque molestias eveniet labore nisi?</p>
                    </div>
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, et, pariatur corporis enim velit est
                        officiis voluptas eligendi ullam suscipit quam hic distinctio provident cumque consequuntur magnam
                        reiciendis fugit veritatis dignissimos minima! Quas vel est suscipit atque maxime porro provident!
                    </div>
                </div>
                <p class="fs-3 text-center fw-bold mt-5">My Skill</p>
                <div class="row mt-4">
                    <div class="col">
                        <div class="html">
                            <p>HTML</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 99%" data-aos="slide-right" data-aos-duration="1000">99%</div>
                            </div>
                        </div>
                        <div class="css mt-4">
                            <p>CSS</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 95%" data-aos="slide-right" data-aos-duration="1000">95%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="javascript">
                            <p>Javascript</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 80%" data-aos="slide-right" data-aos-duration="1000">80%</div>
                            </div>
                        </div>
                        <div class="php mt-4">
                            <p>PHP</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 90%" data-aos="slide-right" data-aos-duration="1000">90%</div>
                            </div>
                        </div>
                    </div>
                    <div class="mysql mt-4 text-center">
                        <p>Mysql</p>
                        <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 90%" data-aos="slide-right" data-aos-duration="1000">90%</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="fs-3 text-center fw-bold mt-5">Library & Framework</p>
                    <div class="col">
                        <div class="bootstrap mt-3">
                            <p>Bootstrap</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 95%" data-aos="slide-right" data-aos-duration="1000">95%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gsap mt-3">
                            <p>GSAP</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%" data-aos="slide-right" data-aos-duration="1000">100%</div>
                            </div>
                        </div>
                    </div>
                    <div class="aos mt-4 text-center">
                        <p>AOS</p>
                        <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%" data-aos="slide-right" data-aos-duration="1000">100%</div>
                        </div>
                    </div>
                </div>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,320L1344,320L1344,320L1248,320L1248,320L1152,320L1152,320L1056,320L1056,320L960,320L960,320L864,320L864,320L768,320L768,320L672,320L672,320L576,320L576,320L480,320L480,320L384,320L384,320L288,320L288,320L192,320L192,320L96,320L96,320L0,320L0,320Z">
                </path>
            </svg>
        </div>

        <div id="education" class="education">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-about">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,0L1344,0L1344,0L1248,0L1248,0L1152,0L1152,0L1056,0L1056,0L960,0L960,0L864,0L864,0L768,0L768,0L672,0L672,0L576,0L576,0L480,0L480,0L384,0L384,0L288,0L288,0L192,0L192,0L96,0L96,0L0,0L0,0Z">
                </path>
            </svg>
            <div class="container">
                <p class="fs-3 text-center fw-bold mb-5">Education</p>
                <div class="progress-stacked bg-white mx-auto mb-5">
                    <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="25 Animated striped example" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" data-aos="fade-right" data-aos-duration="200">ES 100%</div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" data-aos="fade-right" data-aos-delay="150" data-aos-duration="200">JHS 100%</div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" data-aos="fade-right" data-aos-delay="250" data-aos-duration="200">VS 100%</div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                        <div class="progress-bar bg_purple progress-bar-striped progress-bar-animated" data-aos="fade-right" data-aos-delay="350" data-aos-duration="200">university 10%</div>
                    </div>
                </div>
                <div class="card mx-auto" data-aos="fade-up" style="width: 10rem;">
                    <img class="card-img-top img-thumbnail" src="assets/img/sdn-jatiasih-vi.jpg" alt="SDN Jatiasih VI">
                    <div class="card-body">
                        <b>
                            <p class="card-text fs-5 text-center border-bottom">Elementary School</p>
                        </b>
                        <br>
                        <h5 class="text-center">2008-2014</h5>
                    </div>
                </div>
                <div class="line_connector bg-black mx-auto my-3" data-aos="fade-up"></div>
                <div class="card mx-auto" data-aos="fade-up" style="width: 10rem;">
                    <img class="card-img-top img-thumbnail" src="assets/img/smp-genr.jpg" alt="SMP Generasi Rabbani">
                    <div class="card-body">
                        <b>
                            <p class="card-text fs-5 text-center border-bottom">Junior High School</p>
                        </b>
                        <br>
                        <h5 class="text-center">2008-2014</h5>
                    </div>
                </div>
                <div class="line_connector bg-black mx-auto my-3" data-aos="fade-up"></div>
                <div class="card mx-auto" data-aos="fade-up" style="width: 10rem;">
                    <img class="card-img-top img-thumbnail" src="assets/img/sekolah65.jpg" alt="SMKN 65 Jakarta">
                    <div class="card-body">
                        <b>
                            <p class="card-text fs-5 text-center border-bottom">Vocational School</p>
                        </b>
                        <br>
                        <h5 class="text-center">2008-2014</h5>
                    </div>
                </div>
                <div class="line_connector bg-black mx-auto my-3" data-aos="fade-up"></div>
                <div class="card mx-auto mb-5" data-aos="fade-up" style="width: 10rem;">
                    <img class="card-img-top img-thumbnail" src="assets/img/universitas-gunadarma.jpg" alt="Universitas Gunadarma">
                    <div class="card-body">
                        <b>
                            <p class="card-text fs-5 text-center border-bottom">university</p>
                        </b>
                        <br>
                        <h5 class="text-center">2008-2014</h5>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,320L1344,320L1344,320L1248,320L1248,320L1152,320L1152,320L1056,320L1056,320L960,320L960,320L864,320L864,320L768,320L768,320L672,320L672,320L576,320L576,320L480,320L480,320L384,320L384,320L288,320L288,320L192,320L192,320L96,320L96,320L0,320L0,320Z">
                </path>
            </svg>
        </div>
        <div id="project" class="project">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-about">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,0L1344,0L1344,0L1248,0L1248,0L1152,0L1152,0L1056,0L1056,0L960,0L960,0L864,0L864,0L768,0L768,0L672,0L672,0L576,0L576,0L480,0L480,0L384,0L384,0L288,0L288,0L192,0L192,0L96,0L96,0L0,0L0,0Z">
                </path>
            </svg>
            <div class="container">
                <p class="fs-3 text-center fw-bold">Project</p>
                <div class="row">
                    <div class="col-sm-6 mt-5">
                        <div class="row">
                            <p class="fs-5 text-center border-bottom">SMK</p>
                            <div class="card mx-auto my-3" data-aos="fade-up" style="width: 12rem;">
                                <img class="card-img-top img-thumbnail mt-2" src="assets/img/project_65.jpg" alt="E-Learning">
                                <div class="card-body">
                                    <b>
                                        <p class="card-text fs-5 text-center">E-Learning</p>
                                    </b>
                                </div>
                            </div>
                            <div class="card mx-auto my-3" data-aos="fade-up" data-aos-delay="100" style="width: 12rem;">
                                <img class="card-img-top img-thumbnail mt-2" src="assets/img/i_komerse.jpg" alt="E-Commerce">
                                <div class="card-body">
                                    <b>
                                        <p class="card-text fs-5 text-center">E-Commerce</p>
                                    </b>
                                </div>
                            </div>
                            <div class="card mx-auto my-3" data-aos="fade-up" data-aos-delay="150" style="width: 12rem;">
                                <img class="card-img-top img-thumbnail mt-2" src="assets/img/perpustakaan.jpg" alt="Perpustakaan">
                                <div class="card-body">
                                    <b>
                                        <p class="card-text fs-5 text-center">Perpustakaan</p>
                                    </b>
                                </div>
                            </div>
                            <div class="card mx-auto my-3" data-aos="fade-up" data-aos-delay="200" style="width: 12rem;">
                                <img class="card-img-top img-thumbnail mt-2" src="assets/img/kawalruusisdiknas.jpg" alt="Portal Berita">
                                <div class="card-body">
                                    <b>
                                        <p class="card-text fs-5 text-center">Portal Berita</p>
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-5">
                        <div class="row">
                            <p class="fs-5 text-center border-bottom">Kuliah</p>
                            <div class="card mx-auto my-3" data-aos="fade-up" style="width: 12rem;">
                                <img class="card-img-top img-thumbnail mt-2" src="assets/img/portfolio.jpg" alt="Portfolio">
                                <div class="card-body">
                                    <b>
                                        <p class="card-text fs-5 text-center">Portfolio</p>
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,320L1344,320L1344,320L1248,320L1248,320L1152,320L1152,320L1056,320L1056,320L960,320L960,320L864,320L864,320L768,320L768,320L672,320L672,320L576,320L576,320L480,320L480,320L384,320L384,320L288,320L288,320L192,320L192,320L96,320L96,320L0,320L0,320Z">
                </path>
            </svg>
        </div>
        <div id="contact" class="contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="svg-about">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,0L1344,0L1344,0L1248,0L1248,0L1152,0L1152,0L1056,0L1056,0L960,0L960,0L864,0L864,0L768,0L768,0L672,0L672,0L576,0L576,0L480,0L480,0L384,0L384,0L288,0L288,0L192,0L192,0L96,0L96,0L0,0L0,0Z">
                </path>
            </svg>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        .col-sm-
                    </div>
                </div>
            </div>
        </div>
        <a href="#navbar">
            <div class="go-up z-1 position-fixed bottom-0 end-0 bg-primary">
                <i class="bi bi-arrow-up-circle"></i>
            </div>
        </a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/gsap/gsap.min.js"></script>
    <script>
        gsap.to(".profile", {
            delay: 0.5,
            duration: 1,
            borderRadius: 100,
        });
    </script>
</body>

</html>