<?php include('inc/header.php'); ?>

<body id="<?= $pageClass ?>">
    <header>
        <div id="topHeader">
            <div class="wrapper">
                <div class="w-100 d-sm-flex justify-content-between align-items-center">
                    <h2 class="lead">Proizvodnja 3D parketa, <span class="d-none d-md-inline-block"> JoWood, </span> Banja Luka <a href="tel:+38766221588" class="d-inline-block d-md-none mx-2 text-white"><i class="fas fa-phone fa-lg"></i></a> <span class="d-none d-md-inline-block">, +387 66 221 588</span></h2>
                    <ul class="social-networks">
                        <li>
                            <a class="btn btn-white" href="partners.php">Partnerstvo?</a>
                        </li>
                        <li>
                            <a target="_blank" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mainHeader">
            <div class="wrapper">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="index.php" class="logo-holder <?php echo $pageClass == 'home' ? 'home-logo' : ''; ?>">
                        <img src="assets/img/logo/jowood-logo-white.svg" alt="Jowood Logo">
                    </a>
                    <nav id="mainMenu" class="d-md-flex align-items-center justify-content-between">
                        <a class="mr-3 text-white" href="index.php">
                            <h2 class="font-weight-light h3">Početna</h2>
                        </a>
                        <a class="mr-3 text-white" href="products.php">
                            <h2 class="font-weight-light h3">Proizvodi</h2>
                        </a>
                        <a class="mr-3 text-white" href="about.php">
                            <h2 class="font-weight-light h3">O nama</h2>
                        </a>
                        <a class="mr-3 text-white" href="contact.php">
                            <h2 class="font-weight-light h3">Kontakt</h2>
                        </a>
                    </nav>
                    <button id="main-menu-trigger">
                        <span class="menu-dash"></span>
                        <span class="menu-dash"></span>
                        <span class="menu-dash"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>