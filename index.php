<?php
include "assets/php/protocol.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="assets/css/index.css" rel="stylesheet">
    <title>Portfolio | MRZ</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#">Navbar</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#about">
                    <i class="bi bi-person-vcard"></i> about
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">Second</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="main container-md bg-body-tertiary p-3 rounded-2" tabindex="0">
        <div id="about" class="about">
            <div class="profile">
                <div class="row">
                    <img src="<?php echo $url; ?>assets/img/profile.png" alt="" class="col-md">
                    <div class="col-md-9">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, consequatur! Aperiam natus magnam incidunt itaque voluptatibus nemo id fugiat omnis iste, expedita consequuntur aliquid at temporibus provident ducimus cupiditate? Corrupti.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet neque eveniet, earum nisi iste alias, hic, labore perspiciatis nihil a officiis in aut repellendus vitae aspernatur numquam id quas. Necessitatibus?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cumque id quod iure veniam adipisci voluptatem ipsa ad nostrum dolore possimus ipsum, expedita necessitatibus doloribus laborum ut officia voluptates a?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, nobis expedita! Consequatur fugiat tempora maiores officia culpa animi ab itaque reiciendis rerum, consectetur nulla nostrum architecto ea molestias repudiandae perferendis.
                        <div class="skill">
                            <li>html</li>
                            <li>css</li>
                            <li>javascript</li>
                            <li>php</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 id="scrollspyHeading2">Second heading</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, illo aliquam corporis earum blanditiis at unde assumenda numquam eos quod fugit doloribus minima possimus sed accusantium ipsam natus corrupti repellendus.</p>
        <h4 id="scrollspyHeading3">Third heading</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, illo aliquam corporis earum blanditiis at unde assumenda numquam eos quod fugit doloribus minima possimus sed accusantium ipsam natus corrupti repellendus.</p>
        <h4 id="scrollspyHeading4">Fourth heading</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, illo aliquam corporis earum blanditiis at unde assumenda numquam eos quod fugit doloribus minima possimus sed accusantium ipsam natus corrupti repellendus.</p>
        <h4 id="scrollspyHeading5">Fifth heading</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, illo aliquam corporis earum blanditiis at unde assumenda numquam eos quod fugit doloribus minima possimus sed accusantium ipsam natus corrupti repellendus.</p>
    </div>
    <script src="<?php echo $url; ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>