<?php
$ogUrl = 'about.php';
$ogDesc = 'Ko smo mi? Koliko dugo postojimo? Šta je Royal Oak program? Zašto smo eco friendly? Šta je 3D parket?';
$ogImg = 'assets/img/breadcrumbs/about.jpg';
$pageTitle = 'O nama';
$pageClass = 'about';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
?>
<div id="<?php echo $pageClass; ?>-page">
    <section class="text-section text-center text-white section-padding">
        <div class="wrapper">
            <div class="about-us-qna mb-4">
                <h2 class="qna-trigger">Ko smo mi?</h2>
                <p class="shown-qna">"Jo Wood" je kompanija iz Banjaluke čiji je inovativni parket sa 3D efektima otvorio vrata ka potpuno novom i originalnom svijetu podova koji oplemenjuju vaš prostor i daju mu toplinu doma. Svjesni da je naše tržište zasićeno potpuno istim ponudama podova i parketa, hrabro smo iskoračili naprijed i kroz pažljivo poigravanje sa geometrijskim oblicima, idealno rješenje koje pruža veliki broj kombinacija, pronašli smo u šestouglovima koji se savršeno slažu sa svakim prostorom. Naš inovativni proizvod svojim izgledom, ali i izuzetnim kvalitetom, daleko odskače od svega što se danas nudi na našem tržištu i omogućava svakome da u svojoj kući, stanu, ugostiteljskom objektu ili nekom drugom prostoru, odabere originalan parket, u skladu sa svojim željama, ukusom i bojama.</p>
            </div>
            <div class="about-us-qna mb-4">
                <h2 class="qna-trigger">Kako je rođena naša originalna ideja?</h2>
                <p>Ideja za "Jo Wood" 3D parket je rođena tokom našeg višegodišnjeg bavljenja proizvodnjom rezanog furnira za potrebe sklapanja i lijepljenja podnica klasičnog parketa. Prepoznali smo razne probleme koji muče klasični parket i vrijedno radili da ih otklonimo. Znali smo da ono što se zove hrastov parket ne znači puno drvo u klasičnom smislu, nego slijepljene slojeve furnira uz mnogo drvnog otpada. Te podnice su veoma podložne uticajima vlage u prostorijama, kao i korićenju i savijanju, a nisu pogodne za postavljanje preko podnog grijanja. Istraživali smo i tržište i zaključili da je ponuda uvijek ista kada se radi o parketu i da postoje samo tri opcije slaganja, riblja kost, kvadrat i mozaici kvadrata. Osim jednoličnosti, klasični parket pati i od tankog gornjeg sloja koji onemogućava češće brušenje i osvježavanje.</p>
            </div>
            <div class="about-us-qna mb-4">
                <h2 class="qna-trigger">Šta je naša misija?</h2>
                <p>Naša misija je bila da otklonimo sve nedostatke i da napravimo parket koji će moći da diše, koji se neće savijati i koji će ponuditi više opcija slaganja i kombinacija boja. Željeli smo napraviti kvalitetan parket koji će dobro sarađivati sa podnim grijanjem i koji će trajati decenijama. Mukotrpnim radom smo otklonili sve probleme i danas samo naš kupac može reći da ima pravi hrastov parket od punog drveta, otporan na razne uticaje, savitljiv tamo gdje treba i sa 3D efektima koji nikoga ne ostavljaju ravnodušnim. Ponudili smo inovativan i moderan dizajn koji će olakšati i samim tim smanjiti cijenu proizvodnje i proizvoda na tržištu, a krajnjim korisnicima predstaviti veću lepezu mozaika slaganja, bilo po našem prijedlogu ili prema njihovim idejama i željama.</p>
            </div>
            <div class="about-us-qna mb-4">
                <h2 class="qna-trigger">Zašto da odaberete "Royal Oak" i "JoWood"?</h2>
                <p>Naš parket je napravljen od 100 posto hrasta, tehnikom lameliranja furnira koji obezbjeđuje dugotrajnost i veliku otpornost. Posebno izdvajamo debljine gornjeg sloja koja iznosi pet milimetara čime se postiže dugotrajnost, uz mogućnost brušenja i osvježavanja. Izučavajući geometrijske oblike, tražili smo onaj idealni koji bi omogućavao najjednostavnije i najefektnije slaganje, ali tako da sve stane u dva oblika koja se uklapaju jedan sa drugim i sami sa sobom. Tako smo došli do šestougla. On je postao baza jer se savršeno uklapa sa drugim šestouglovima čineći oblik saća. Šestogao je idealan geometrijski oblik za novi dizajn i da bismo ga napravili, dizajnirali smo dva oblika: paralelogram i trapez. Ova dva oblika omogućavaju ogroman broj kombinacija i mozaika.</p>
            </div>
            <div class="about-us-qna mb-4">
                <h2 class="qna-trigger">Znate li da smo eco-friendly i idealni za podno grijanje?</h2>
                <p>U drvnoj industriji je poznato, posebno kada se radi o hrastu, da se trupac iskoristi maksimalno 40-50 posto. U izradi furnira stvara se dosta otpada zbog vrževa, blistača, pukotina i drugih promjena. I ove probleme smo prevazišli i kroz naš inovativni sistem proizvodnje i iskorištenost smo podigli na 99 posto. Shvatili smo da dio materijala, koji ne može ući u gornji sloj parketa, možemo iskoristiti u podlogu. Tako smo smanjili cijenu proizvodnje, čime smo postigli izuzetnu konkurentnost na tržištu. Takav dizajn podnice je omogućio da postignemo još jedan izuzetno bitan kvalitet koji se tiče izdržljivosti parketa. Donji i gornji sloj lijepimo radijalno što sprečava uvijanje jer poprečni slojevi ne dozvoljavaju gornjem da djeluje i obrnuto. Zato je naš parket idealn za podno grijanje, nikada ne može da pukne ili da se podigne.</p>
            </div>
        </div>
    </section>
    <section class="gallery-section section-padding">
        <div class="gallery-holder">
            <?php
            $imagesNo = 18;
            for ($i = 1; $i < $imagesNo; $i++) :
            ?>
                <a class="mb-3 rounded overflow-hidden" href="assets/img/gallery/<?php echo $i; ?>.jpg" data-lightbox="JoWood 3D Podovi | <?php echo $i; ?>">
                    <img src="assets/img/gallery/thumbs/<?php echo $i; ?>.jpg" alt="JoWood 3D Podovi | <?php echo $i; ?>">
                </a>
            <?php endfor; ?>
        </div>
    </section>
    <section class="end-text-section section-padding">
        <div class="wrapper">
            <ul class="doted-ul text-white">
                <li class="h4 font-weight-light">Za proizvodnju naših 3D parketa koristimo isključivo hrastovinu i druge materijale na prirodnoj bazi.</li>
                <li class="h4 font-weight-light">Naš prizvod je ekološki prihvatljiv jer sve otpadne materijale recikliramo i uvodimo ponovo u proizvodnju.</li>
                <li class="h4 font-weight-light">Korištenjem tehnike lameliranja drveta postižemo izuzetno visok kvalitet i veliku toleranciju na toplotu i vlagu.</li>
            </ul>
        </div>
    </section>
</div>


<?php
include('inc/body-after.php');
?>