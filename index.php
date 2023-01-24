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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#" data-aos="zoom-in-down" data-aos-anchor-placement="top-bottom">M.Raihan.Z</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-aos="zoom-in-down" data-aos-anchor-placement="top-bottom">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" data-aos="zoom-in-down">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact</a>
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
                        <h2>About Me</h2>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col" data-aos="fade-up" data-aos-duration="1000">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus beatae, enim quaerat laborum,
                            exercitationem officiis expedita perspiciatis aperiam tenetur qui quibusdam quas voluptatem.
                            Exercitationem consequuntur eaque molestias eveniet labore nisi?</p>
                    </div>
                    <div class="col-sm" data-aos="fade-up" data-aos-duration="1000">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, et, pariatur corporis enim velit est
                        officiis voluptas eligendi ullam suscipit quam hic distinctio provident cumque consequuntur magnam
                        reiciendis fugit veritatis dignissimos minima! Quas vel est suscipit atque maxime porro provident!
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="html">
                            <p>HTML</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 97%" data-aos="slide-right" data-aos-duration="1000">97%</div>
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
                </div>
                <div class="row">
                    <div class="col">
                        <div class="bootstrap mt-4">
                            <p>Bootstrap</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 95%" data-aos="slide-right" data-aos-duration="1000">95%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gsap mt-4">
                            <p>GSAP</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%" data-aos="slide-right" data-aos-duration="1000">100%</div>
                            </div>
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
                <div class="sd bg-white">
                    <div class="row">
                        <div class="col-5">
                            <img class="img-thumbnail" src="assets/img/sdn-jatiasih-vi.jpg" alt="SDN Jatiasih VI" width="200">
                        </div>
                        <div class="col">
                            <h2>Elementary School</h2>
                            <h5>2008-2014</h5>
                        </div>
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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L0,64L96,64L96,64L192,64L192,96L288,96L288,128L384,128L384,192L480,192L480,160L576,160L576,96L672,96L672,32L768,32L768,64L864,64L864,128L960,128L960,192L1056,192L1056,224L1152,224L1152,96L1248,96L1248,128L1344,128L1344,32L1440,32L1440,320L1344,320L1344,320L1248,320L1248,320L1152,320L1152,320L1056,320L1056,320L960,320L960,320L864,320L864,320L768,320L768,320L672,320L672,320L576,320L576,320L480,320L480,320L384,320L384,320L288,320L288,320L192,320L192,320L96,320L96,320L0,320L0,320Z">
                </path>
            </svg>
        </div>
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