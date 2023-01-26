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
    <div class="loading"></div>
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
                        <a class="nav-link active" aria-current="page" data-aos="zoom-in-down" href="#home">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-aos="zoom-in-down" data-aos-delay="50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                            </svg> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education" data-aos="zoom-in-down" data-aos-delay="100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                            </svg> Education
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project" data-aos="zoom-in-down" data-aos-delay="150">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                                <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                            </svg> Project
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-aos="zoom-in-down" data-aos-delay="200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg> contact
                        </a>
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
                        <div class="bootstrap mt-3 text-center">
                            <p>Bootstrap</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 95%" data-aos="slide-right" data-aos-duration="1000">95%</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="gsap mt-3">
                            <p>GSAP</p>
                            <div class="progress bg-white" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%" data-aos="slide-right" data-aos-duration="1000">100%</div>
                            </div>
                        </div>
                    </div> -->
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
                    <div class="col-sm-5 mt-5">
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
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5 mt-5">
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
                <div class="container bg-primary p-2">
                    <div class="row my-3">
                        <div class="col-sm">
                            <a class="text-light text-decoration-none" href="https://www.linkedin.com/in/muhammad-raihan-zhafran-b1165825a/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>
                                <h7 data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-delay="50">@Muhammad Raihan Zhafran</h7>
                            </a>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm">
                            <a class="text-light text-decoration-none" href="https://github.com/MRZ14">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg>
                                <h7 data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-delay="100">@m.Rei</h7>
                            </a>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm">
                            <a class="text-light text-decoration-none" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                                <h7 data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-delay="150">@m.Rei</h7>
                            </a>
                        </div>
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