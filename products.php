<?php
$pageTitle = 'Proizvodi';
$pageClass = 'products';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
$floors = array(
    array("name" => 'cube', "desc" => 'Cube slaganje "JoWood" parketa kombinuje tri boje na velikim podnicama kako bi se dobio 3D efekat složenih kocki. Na ovaj način se postiže otvaranje prostora uz dodavanje dekorativnih elemenata koji obogaćuju ambijent. Cube slaganje je idealno za veće prostorije, restorane, poslovne prostore, kancelarije, svim onim prostorima koje želite obogatiti stilom i dobrim ukusom. Savršeno se slaže sa savremenim minimalizmom u vašem dnevnom boravku. <br/><br/>Cube parket nudi najmanje četiri načina slaganja boja, a efekat koji se dobija zavisi samo od kombinovanja boja. Sve one mogu postići 3D efekat zahvaljujući jedinstvenom obliku i načinu slaganja našeg parketa. Čak i ako se odabere samo jednobojni parket, biranjem načina slaganja, dodaje mu se šara koja će definisati i oplemeniti prostor.',  ''),
    array("name" => 'honeycomb', "desc" => 'Metoda slaganja "JoWood" parketa koju smo nazvali Honeycomb u osnovi ima šestougao koji se gradi i oblaže u veći, dajući efekat košnice, odnosno medenog saća. Najbolji efekat se postiže kombinovanjem raznih boja po izboru kupaca koji mogu sami da odluče prema svom ukusu, ambijentu, osvjetljenju prostora. Idealan je za stanove, kuhinje, ali i za ugostiteljske objekte. Pogodan je za ublažavanje naglih prelaza boja vašeg namještaja i zidova. <br/><br/>U Honeycomb varijanti slaganja, najbolji efekat postiže se kombinacijom boja i kontrastima, stvarajući optičku iluziju ili diskretnu šaru. U ponudi je najmanje šest opcija slaganja parketa, a sve one proizvod su želja kupaca i ambijenta koji se obogaćuje "JoWood" parketima.',  ''),
    array("name" => 'hexagon', "desc" => 'Hexagon slaganje "JoWood" parketa u svojoj osnovi ima samo manje podnice koje se slažu u šestougao. One se dalje nadovezuju i uklapaju preko cijele prostorije. Na ovaj način slaganja parketa otvaramo široku paletu kombinacija. Koje god boje da odaberete, ovaj parket će u vaš prostor unijeti punoću i toplinu.<br/><br/> Hexagon slaganje parketa nudi šest varijanti, ali one su samo početak. Šestougao možemo graditi iz dvije boje ili sa samo jedne. Moguće je slaganje šestougla u jednoj, na koji se nastavljaju u drugoj boji. Parket može da se slaže i tako da podsjeća na klasični parket kroz uklapanje velikih podnica koje se nastavljaju jedna na drugu presječene kosom linijom. Ovo slaganje je idealno za kupce koji vole inovativnu klasiku. '),
    array("name" => 'line', "desc" => 'Line slaganje "JoWood" parketa približavaju se klasičnom parketu uz dodatke naših inovativnih kosih linija, kombinacija boja i efekata koje želimo postići. Ovo slaganje parketa nudi niz originalnih kombinacija boja, od blijede boje drveta do crvenih i crnih tonova.<br/><br/> Zavisno od odabira boja parketa, našem kupcu se ovdje otvaraju brojne mogućnosti kombinovanja i efekata. U ovom slučaju ne slažemo šestogulove, nego kose podnice postavljamo u pravilne nizove na najmanje sedam elegantnih načina. Ovaj način slaganja idealan je za gotovo sve prostorije u vašem domu, u koji unosi eleganciju i klasiku koja nije standardna.'),
    array("name" => 'flower', "desc" => 'Flower slaganje "JoWood" parketa zahtijeva kompleksnije kombinacije pomoću obje veličine podnica. Ovo je kombinacija velike i male podnice, sa efektom preplitanja i uklapanjem šestouglova. Tako dobijamo vidljiv cvjetni aranžman na podu. U zavisnosti od odabranih boja i u skladu sa željama kupaca, cvjetove možemo slagati tako da im unutrašnjost bude svjetlija ili tamnija, a jednako lijep efekat postižemo i sa jednobojnim podnicama.<br/><br/> Flower slaganje idealno je za romantične dnevne boravke toplih boja i nježnih ivica, za biblioteke, spavaće i radne sobe.  Cvjetni aranžman možete ponuditi i u vašem ugostiteljskom objektu kao ukras na zidu ili u vašem radnom prostoru kao dekoraciju. '),
    array("name" => 'triangle', "desc" => 'Triangle "JoWood" slaganje parketa u svojoj osnovi koristi samo male podnice, koje se uklapaju tako da dobijemo jednakostranične trouglove. Kao i u prethodnim slučajevima slaganja našeg parketa, i ovdje nam se otvaraju brojne mogućnosti za kreativnost na podu. Sve one, opet, zavise od boja i želja kupaca da se sa njima poigraju i u svoj prosto unesu nešto novo.<br/><br/> Triangle nudi četiri varijante koje možemo proširivati u skladu sa željama kupaca, počevši od jednobojnog, do kombinacije boja trouglova koji zajedno čine veliki mozaik na vašem podu. Kako god ga složili, ovom tehnikom postižete inovativan i nesvakidašnji efekat isprepletanosti, koji nikoga neće ostaviti ravnodušnim.')
);
$counter = 1;
?>
<div id="<?php echo $pageClass; ?>-page">
    <div id="prod-floors-tab" class="">
        <div class="products-intro-text">
            <div class="wrapper">
                <p class="h4 font-weight-light">Predstavili smo vam samo mali dio naše ponude inovativnih, modernih i jedinstvenih parketa, kroz izbor najljepših kombinacija koje smo dizajnirali posebno za vas. Broj kombinacija je veliki, a naši kupci u saradnji sa našim kreativnim timom, uvijek mogu da osmisle neku novu, sa njhovim potpisom.</p>
                <p class="h4 font-weight-light">Nastavićemo da osluškujemo vaše želje i skupa sa vama stvaramo nove vizije kojima ćemo obogatiti vaš životni ili radni prostor. Odaberite svoje najdraže boje, poigrajte se sa njima i dajte svom domu one tonove koje volite, udahnite mu toplinu i u njega unesite dizajn 21. vijeka.</p>
            </div>
        </div>
        <div class="wrapper pt-5">
            <div class="row pt-5 pb-4">
                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="cube">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/cube.svg" alt="JoWood 3D podovi | Cube">
                    <h4 class="text-white">Cube</h4>
                </button>
                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="honeycomb">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/honeycomb.svg" alt="JoWood 3D podovi | Honeycomb">
                    <h4 class="text-white">Honeycomb</h4>
                </button>
                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="hexagon">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/hexagon.svg" alt="JoWood 3D podovi | Hexagon">
                    <h4 class="text-white">Hexagon</h4>
                </button>
                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="line">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/line.svg" alt="JoWood 3D podovi | Line">
                    <h4 class="text-white">Line</h4>
                </button>

                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="flower">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/flower.svg" alt="JoWood 3D podovi | Flower">
                    <h4 class="text-white">Flower</h4>
                </button>

                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="triangle">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/triangle.svg" alt="JoWood 3D podovi | Triangle">
                    <h4 class="text-white">Triangle</h4>
                </button>
            </div>
        </div>
    </div>
    <div id="main-floors-page" class="d-none">
        <section id="floor-selection">
            <div class="wrapper">
                <div id="floor-triggers" class="py-5">
                    <?php foreach ($floors as $f) : ?>
                        <div class="floor-trigger-item">
                            <button class="floor-trigger" data-trigger-name="<?php echo $f['name']; ?>" data-triggers="<?php echo $f['name']; ?>-tab"><?php echo ucfirst($f['name']); ?></button>
                        </div>
                    <?php $counter++;
                    endforeach;
                    $counter = 1; ?>
                </div>
            </div>
        </section>
        <!-- <section id="info-selection"> 
            <div class="wrapper">
                <div class="row no-gutters text-center">
                    <div class="col-6 col-md-3">
                        <button class="info-trigger info-trigger-active" data-info="opis">Opis</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="info-trigger" data-info="spec">Specifikacija</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="info-trigger" data-info="gal">Galerija</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="info-trigger" data-info="nest">Nesto</button>
                    </div>
                </div>
            </div>
        </section>-->
        <section id="floor-tabs">
            <?php foreach ($floors as $tab) :
                $tn = $tab['name'];
                $directory = "assets/img/podovi/$tn/";
                $directoryTmb = $directory . 'thumbs';
                $images = glob($directory . "*.jpg");
                $thumbs = glob($directoryTmb . "/*.jpg");

                $imagesCount = 1; ?>
                <div class="floors-tab" id="<?php echo $tab['name']; ?>-tab">
                    <?php /* <div data-info-tab="opis" class="info-tab info-tab-active">

                    </div>
                    <div data-info-tab="spec" class="info-tab">

                    </div>
                    <div data-info-tab="gal" class="info-tab"> */ ?>
                    <div class="about-floor">
                        <div class="wrapper">
                            <p class="h4 font-weight-light"><?php echo $tab['desc']; ?></p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="gallery-holder">
                            <?php foreach ($images as $img) : ?>
                                <a class="mb-3 rounded overflow-hidden" href="<?php echo $img ?>" data-lightbox="JoWood 3D Podovi | <?php echo $imagesCount; ?>">
                                    <img src="<?php echo $thumbs[$imagesCount - 1]; ?>" alt="JoWood 3D Podovi | <?php echo $imagesCount; ?>">
                                </a>
                            <?php
                                $imagesCount++;
                            endforeach; ?>
                        </div>
                    </div>
                    <?php /* </div>
                    <div data-info-tab="nest" class="info-tab">

                    </div> */ ?>
                </div>
            <?php $counter++;
            endforeach; ?>
        </section>
    </div>
</div>
<?php
include('inc/body-after.php');
?>