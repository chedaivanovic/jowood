<?php
$ogUrl = '';
$ogDesc = 'Mi smo JoWood, proizvodimo najinovativnije i jedinstvene parkete od hrastovine. Nudimo vam kvalitet i vrhunski dizajnirana rešenja za podove u vašem domu, a pritom smo i eco friendly!';
$ogImg = 'assets/img/logo/jowood-logo.png';
$pageTitle = 'Početna strana';
$pageClass = 'home';
include('inc/body-before.php');
?>

<section id="hero">
    <img id="main-hero-img" src="assets/img/hero.jpg" alt="">
    <img id="main-hero-head" src="assets/img/logo/jowood-logo-head.svg" alt="">
    <div class="hero-content">
        <div class="wrapper">
            <div class="hero-title text-white text-center" data-aos="zoom-in" data-duration="600">
                <h2 class="hero-heading-sec font-weight-light mb-2" data-aos="fade-right" data-aos-delay="700">Tražite podlogu za zivot?</h2>
                <p class="hero-heading-main font-weight-light mb-4" data-aos="fade-left" data-aos-delay="1400">Dobrodošli u svijet 3D parketa!</p>
                <span data-aos="fade-up" data-aos-delay="2100">
                    <a class="cta-btn cta-btn-primary" href="products.php">Pogledajte naše podove</a>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="home-about-us">
    <div class="wrapper text-center">
        <h1 class="home-about-title mb-4">Upoznajte "Royal Oak" parkete iz kompanije "JoWood"</h1>
        <p class="home-about-text">Naši originalni i inovativni "JoWood" parketi iz linije "Royal Oak" napravljeni su tehnikom lameliranja od čiste hrastovine u tri sloja, što garantuje proizvod vrhunskog kvaliteta, jedinstven kako na našem, tako i na inostranom tržištu.</p>
        <p class="home-about-text">Idealan za sve vrste podova i vrhunski otporan na sve spoljašnje uticaje, parket "Royal Oak" savršen je izbor za svakoga ko želi kvalitetne i moderne podove za svoj dom, ugostiteljski objekat ili neki drugi prostor.</p>
        <p class="home-about-text">Insistiramo na tome da se svakoj podnici posveti puna pažnja i da osim po inovativnim rješenjima za vaše podove, ponudimo i besprekoran kvalitet.</p>
        <p class="home-about-text">Baš zato i jesmo bolji od svih ostalih. Zato što nikada nismo isti, niti skuplji, samo smo bolji.</p>
        <p class="home-about-text mb-5">Pogledate našu ponudu i uvjerite se.</p>
        <span><a class="cta-btn cta-btn-secondary" href="about.php">Pročitajte više...</a></span>
    </div>
</section>

<section id="floors-home">
    <div class="wrapper">
        <div class="floor-images d-none">
            <img src="assets/img/home-floors-bg/cube.jpg" alt="JoWood 3D Podovi | cube">
            <img src="assets/img/home-floors-bg/honeycomb.jpg" alt="JoWood 3D Podovi | honeycomb">
            <img src="assets/img/home-floors-bg/hexagon.jpg" alt="JoWood 3D Podovi | hexagon">
            <img src="assets/img/home-floors-bg/line.jpg" alt="JoWood 3D Podovi | line">
            <img src="assets/img/home-floors-bg/flower.jpg" alt="JoWood 3D Podovi | flower">
            <img src="assets/img/home-floors-bg/triangle.jpg" alt="JoWood 3D Podovi | triangle">
        </div>
        <div id="p-main-box">
            <div class="floors-header mb-4 w-100">
                <button class="all-floors-trigger col-12 mb-3 floors-trigger-active" data-target="#all-floors-tab">
                    <span>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#fff" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                        </svg>
                        Upoznajte naše 3D podove
                    </span>
                </button>
            </div>
            <div id="floors-body" class="floors-tab">
                <div id="all-floors-tab" class="">
                    <div class="row py-4">
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#cube-tab" data-bg="cube">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/cube.svg" alt="JoWood 3D podovi | Cube">
                            <h4 class="text-white">Cube</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#honeycomb-tab" data-bg="honeycomb">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/honeycomb.svg" alt="JoWood 3D podovi | Honeycomb">
                            <h4 class="text-white">Honeycomb</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#hexagon-tab" data-bg="hexagon">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/hexagon.svg" alt="JoWood 3D podovi | Hexagon">
                            <h4 class="text-white">Hexagon</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#line-tab" data-bg="line">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/line.svg" alt="JoWood 3D podovi | Line">
                            <h4 class="text-white">Line</h4>
                        </button>

                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#flower-tab" data-bg="flower">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/flower.svg" alt="JoWood 3D podovi | Flower">
                            <h4 class="text-white">Flower</h4>
                        </button>

                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#triangle-tab" data-bg="triangle">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/triangle.svg" alt="JoWood 3D podovi | Triangle">
                            <h4 class="text-white">Triangle</h4>
                        </button>
                    </div>
                </div>
                <div id="single-floor-section" class="row">
                    <div id="floor-sidebar" class="col-12 col-md-3">
                        <button class="small-floors-trigger" data-target="#cube-tab" data-bg="cube"><span>Cube</span> <?php createSvg('cube'); ?> </button>
                        <button class="small-floors-trigger" data-target="#honeycomb-tab" data-bg="honeycomb"><span>Honeycomb</span> <?php createSvg('honeycomb'); ?> </button>
                        <button class="small-floors-trigger" data-target="#hexagon-tab" data-bg="hexagon"><span>Hexagon</span> <?php createSvg('hexagon'); ?> </button>
                        <button class="small-floors-trigger" data-target="#line-tab" data-bg="line"><span>Line</span> <?php createSvg('line'); ?> </button>
                        <button class="small-floors-trigger" data-target="#flower-tab" data-bg="flower"><span>Flower</span> <?php createSvg('flower'); ?> </button>
                        <button class="small-floors-trigger" data-target="#triangle-tab" data-bg="triangle"><span>Triangle</span> <?php createSvg('triangle'); ?> </button>
                    </div>
                    <div id="dynamic-floors" class="col-12 col-md-9">
                        <div id="cube-tab" class="single-floor-tab">
                            <h2>Cube</h2>
                            <p>Cube slaganje "JoWood" parketa kombinuje tri boje na velikim podnicama kako bi se dobio 3D efekat složenih kocki. Na ovaj način se postiže otvaranje prostora uz dodavanje dekorativnih elemenata koji obogaćuju ambijent. Cube slaganje je idealno za veće prostorije, restorane, poslovne prostore, kancelarije, svim onim prostorima koje želite obogatiti stilom i dobrim ukusom. Savršeno se slaže sa savremenim minimalizmom u vašem dnevnom boravku...</p>
                            <a href="products.php#cube" class="view-more-floors">Pogledajte više o Cube-u</a>
                        </div>
                        <div id="honeycomb-tab" class="single-floor-tab">
                            <h2>Honeycomb</h2>
                            <p>Honeycomb slaganje "JoWood" parketa zahtijeva kompleksnije kombinacije pomoću obje veličine podnica. Ovo je kombinacija velike i male podnice, sa efektom preplitanja i uklapanjem šestouglova. Tako dobijamo vidljiv cvjetni aranžman na podu. U zavisnosti od odabranih boja i u skladu sa željama kupaca, cvjetove možemo slagati tako da im unutrašnjost bude svjetlija ili tamnija, a jednako lijep efekat postižemo i sa jednobojnim podnicama...</p>
                            <a href="products.php#honeycomb" class="view-more-floors">Pogledajte više o Honeycomb-u</a>
                        </div>
                        <div id="hexagon-tab" class="single-floor-tab">
                            <h2>Hexagon</h2>
                            <p>Hexagon slaganje "JoWood" parketa u svojoj osnovi ima samo manje podnice koje se slažu u šestougao. One se dalje nadovezuju i uklapaju preko cijele prostorije. Na ovaj način slaganja parketa otvaramo široku paletu kombinacija. Koje god boje da odaberete, ovaj parket će u vaš prostor unijeti punoću i toplinu...</p>
                            <a href="products.php#hexagon" class="view-more-floors">Pogledajte više o Hexagon-u</a>
                        </div>
                        <div id="line-tab" class="single-floor-tab">
                            <h2>Line</h2>
                            <p>Line slaganje "JoWood" parketa približavaju se klasičnom parketu uz dodatke naših inovativnih kosih linija, kombinacija boja i efekata koje želimo postići. Ovo slaganje parketa nudi niz originalnih kombinacija boja, od blijede boje drveta do crvenih i crnih tonova...</p>
                            <a href="products.php#line" class="view-more-floors">Pogledajte više o Line-u</a>
                        </div>
                        <div id="flower-tab" class="single-floor-tab">
                            <h2>Flower</h2>
                            <p>Flower slaganje "JoWood" parketa zahtijeva kompleksnije kombinacije pomoću obje veličine podnica. Ovo je kombinacija velike i male podnice, sa efektom preplitanja i uklapanjem šestouglova. Tako dobijamo vidljiv cvjetni aranžman na podu. U zavisnosti od odabranih boja i u skladu sa željama kupaca, cvjetove možemo slagati tako da im unutrašnjost bude svjetlija ili tamnija, a jednako lijep efekat postižemo i sa jednobojnim podnicama...</p>
                            <a href="products.php#flower" class="view-more-floors">Pogledajte više o Flower-u</a>
                        </div>
                        <div id="triangle-tab" class="single-floor-tab">
                            <h2>Triangle</h2>
                            <p>Triangle "JoWood" slaganje parketa u svojoj osnovi koristi samo male podnice, koje se uklapaju tako da dobijemo jednakostranične trouglove. Kao i u prethodnim slučajevima slaganja našeg parketa, i ovdje nam se otvaraju brojne mogućnosti za kreativnost na podu. Sve one, opet, zavise od boja i želja kupaca da se sa njima poigraju i u svoj prosto unesu nešto novo...</p>
                            <a href="products.php#triangle" class="view-more-floors">Pogledajte više o Triangle-u</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-partners">
    <div class="wrapper text-center">
        <h2>Saradnja</h2>
        <div class="row">
            <div class="offset-1 col-10 col-md-4 d-flex mb-4 mb-md-0">
                <div class="home-partners-card">
                    <span class="partners-img-holder">
                        <img src="assets/img/partners.jpg" alt="JoWood 3D Podovi | Partneri">
                    </span>
                    <div class="home-partners-text text-center">
                        <h4>Zainteresovani ste za saradnju?</h4>
                        <p>Za partnerske kompanije nudimo velike pogodnosti i benefite. U koliko imate predlog za saradnju, možete nam pisati na stranici na koju vas vodi link ispod.</p>
                        <a href="partners.php" class="partners-link">Partneri</a>
                    </div>
                </div>
            </div>
            <div class="offset-1 col-10 offset-md-2 col-md-4 d-flex">
                <div class="home-partners-card">
                    <span class="partners-img-holder">
                        <img src="assets/img/job.jpg" alt="JoWood 3D Podovi | Zaposlenje">
                    </span>
                    <div class="home-partners-text text-center">
                        <h4>Želite da se zaposlite kod nas?</h4>
                        <p>Ukoliko imate iskustva u obradi drveta ili u radu sa istim i želite posao u našoj kompaniji, na sledećem linku nam možete napisati par stvari o sebi ili dostaviti svoj CV.</p>
                        <a href="job.php" class="partners-link">Zaposlenje</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('inc/body-after.php');
?>