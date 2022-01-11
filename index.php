<?php
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
                <h2 class="h2 font-weight-light mb-2" data-aos="fade-right" data-aos-delay="700">Tražite najbolju podlogu za život?</h2>
                <p class="display-4 font-weight-light mb-4" data-aos="fade-left" data-aos-delay="1400">Na pravom ste mjestu</p>
                <span data-aos="fade-up" data-aos-delay="2100">
                    <a class="cta-btn cta-btn-primary" href="products.php">Pogledajte naše podove</a>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="home-about-us">
    <div class="wrapper text-center">
        <h1 class="display-4 mb-3">Mi smo JoWood</h1>
        <p class="h3 font-weight-light mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non sit architecto neque laborum nam rem earum! Rem molestiae laborum unde, veniam ab consequuntur minus animi nulla blanditiis at fugiat ipsa laudantium doloremque iste, consectetur hic itaque esse! Quae, nisi quaerat atque deserunt ab sequi facere temporibus qui, aut sit delectus ratione odit quidem, amet officiis in quisquam veritatis ipsum deleniti alias. Sequi quae officiis ut reprehenderit alias, deserunt blanditiis quisquam voluptates dolorem doloribus eveniet eaque! Autem cupiditate dolores, ad quibusdam accusamus ipsam beatae consectetur, eveniet hic vero quasi natus eos vitae iste voluptate assumenda fugiat incidunt sunt praesentium a voluptas...</p>
        <span><a class="cta-btn cta-btn-secondary" href="about.php">Pročitajte više...</a></span>
    </div>
</section>

<section class="homepage-products">
    <div class="wrapper">
        <div class="row">
            <article class="col-6 col-md-4">

            </article>
            <article class="col-6 col-md-4">

            </article>
            <article class="col-6 col-md-4">

            </article>
            <article class="col-6 col-md-4">

            </article>
            <article class="col-6 col-md-4">

            </article>
            <article class="col-6 col-md-4">

            </article>
        </div>
    </div>
</section>

<section id="services">
    <div class="wrapper">
        <div id="services-main-box">
            <div class="services-header mb-4 w-100">
                <button class="all-services-trigger col-12 mb-3 services-trigger-active" data-target="#all-services-tab">
                    <span>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                        </svg>
                        Naši Podovi
                    </span>
                </button>
            </div>
            <div id="services-body" class="services-tab">
                <div id="all-services-tab" class="">
                    <div class="row py-4">
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#servis-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/images/icons/servis-sampion-mehanika.svg" alt="Servis Auto Klima Sampion | Mehanika">
                            <h4 class="text-white">Kompletan servis auto klime</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#punjenje-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/images/icons/servis-sampion-punjenje.svg" alt="Servis Auto Klima Sampion | Punjenje klime">
                            <h4 class="text-white">Punjenje auto klime</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#dijagnostika-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/images/icons/servis-sampion-dijagnostika.svg" alt="Servis Auto Klima Sampion | Dijagnostika">
                            <h4 class="text-white">Dijagnostika auto klime</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#remont-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/images/icons/servis-sampion-remont.svg" alt="Servis Auto Klima Sampion | Remont">
                            <h4 class="text-white">Remont auto klime</h4>
                        </button>

                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#dezinfekcija-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/images/icons/servis-sampion-dezinfekcija.svg" alt="Servis Auto Klima Sampion | Dezinfekcija">
                            <h4 class="text-white">Dezinfekcija klima sistema</h4>
                        </button>

                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#delovi-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/images/icons/servis-sampion-delovi.svg" alt="Servis Auto Klima Sampion | Delovi">
                            <h4 class="text-white">Delovi auto klime</h4>
                        </button>
                    </div>
                </div>
                <div id="single-service-section" class="row">
                    <div id="service-sidebar" class="col-12 col-md-3">
                        <button class="small-services-trigger" data-target="#servis-tab"><img loading="lazy" src="assets/images/icons/servis-sampion-mehanika.svg" alt="Servis Auto Klima Sampion | Komletan servis"> <span>Servis auto klime</span></button>
                        <button class="small-services-trigger" data-target="#punjenje-tab"><img loading="lazy" src="assets/images/icons/servis-sampion-punjenje.svg" alt="Servis Auto Klima Sampion | Punjenje klime"> <span>Punjenje auto klime</span></button>
                        <button class="small-services-trigger" data-target="#dijagnostika-tab"><img loading="lazy" src="assets/images/icons/servis-sampion-dijagnostika.svg" alt="Servis Auto Klima Sampion | Dijagnostika stanja klime"> <span>Dijagnostika auto klime</span></button>
                        <button class="small-services-trigger" data-target="#remont-tab"><img loading="lazy" src="assets/images/icons/servis-sampion-remont.svg" alt="Servis Auto Klima Sampion | Remont auto klime"> <span>Remont auto klime</span></button>
                        <button class="small-services-trigger" data-target="#dezinfekcija-tab"><img loading="lazy" src="assets/images/icons/servis-sampion-dezinfekcija.svg" alt="Servis Auto Klima Sampion | Dezinfekcija sistema"> <span>Dezinfekcija klima sistema</span></button>
                        <button class="small-services-trigger" data-target="#delovi-tab"><img loading="lazy" src="assets/images/icons/servis-sampion-delovi.svg" alt="Servis Auto Klima Sampion | Delovi za klime"> <span>Delovi auto klime</span></button>
                    </div>
                    <div id="dynamic-services" class="col-12 col-md-9">
                        <div id="servis-tab" class="single-service-tab">
                            <h2>Kompletan servis auto klime</h2>
                            <p>Pod kompletnim servisom auto klime u našem servisu podrazumevamo sledeće operacije na klima sistemu:</p>
                            <ul>
                                <li>- Dijagnostikovanje stanja klima sistema</li>
                                <li>- Dijagnostikovanje stanja i količine fluida u klima sistemu</li>
                                <li>- Vađenje starog ulja i freona iz sistema profesionalnim alatima predviđenim za te operacije</li>
                                <li>- Konektovanje sistema na za kompresiju (Provera curenja pod pritiskom na vašem klima sistemu, zamena ulja u samom kompresoru)</li>
                                <li>- Vakumiranje sistema, ukoliko je isti u ispravnom stanju</li>
                                <li>- Pranje spoljnih hladnjaka</li>
                                <li>- Dezinfekcija kompletnog sistema za izduv hladnog vazduha</li>
                                <li>- Zamena polen filtera</li>
                                <li>- Provera rada ventilatora i strujnih elemenata - vodova</li>
                                <li>- Sipanje novog ulja i freona u sistem</li>
                            </ul>
                            <p>Nakon izvršenog servisa klime, isti puštamo u rad i vršimo proveru svih parametara. Ova operacija bi po propisima bi trebalo da se vrši na svake 2 do 3 godine, radi lakšeg i rasterećenijeg rada celog sistema, smanjenja potrošnje goriva, manjeg habanja kompletnih uređaja na samom sistemu, kao i radi efikasnijeg rada klima sistema.</p>
                        </div>
                        <div id="punjenje-tab" class="single-service-tab">
                            <h2>Punjenje auto klime</h2>
                            <p>Prema propisanim intervalima za održavanje klima sistema, kontrola količine freona i ulja u sistemu trebala bi
                                da se vrši na svake 2 godine tj. pred početak svake druge letnje sezone. Kod nas u servisu ovaj proces je potpuno
                                automatizovan i vrši se isključivo profesionalnim uređajima (klima centrima) najnovije generacije. Naše klima stanice
                                imaju bazu podataka za svaki tip vozila, koja sadrži informacije o tačnoj količini freona (R-134a), ulja za podmazivanje
                                sistema, kao i UV boje koja služi za proveru curenja sistema u slučaju kvara. Ceo proces traje od 15 do 20 minuta u zavisnosti od tipa vozila.</p>
                            <p>Samo sistem održavan prema tačnim propisima količine ubačenih fluida može da radi potpuno ispravno i bez opterećenja</p>
                        </div>
                        <div id="dijagnostika-tab" class="single-service-tab">
                            <h2>Dijagnostika auto klime</h2>
                            <p>Pre svakog punjenja ili servisiranja sistema auto klime,
                                bitno je utvrditi tačan kvar električnog, elektronskog, mehaničkog dela sistema.
                                Kod nas ova ispitivanja na sistemu vršimo najpouzdanijim aparatima za dijagnostikovanje kvarova.
                                U slučaju neadekvatnog dijagnostikovanja problema, dolazi do mogućnosti da dosuti fluidi iscure iz sistema nakon kratkog vremenskog intervala.
                                Ako želite da kvar bude brzo otklonjen i da nema dodatnih troškova, jedini način da to postignete je pravilno dijagnostikovanje istog.</p>
                        </div>
                        <div id="remont-tab" class="single-service-tab">
                            <h2>Remont auto klime</h2>
                            <p>Jedni od čestih kvarova na klima sistemu su curenje freona, nedovoljan pritisak u klima sistemu,
                                kvarovi električnog i elektronskog sklopa. To se dešava usled neprofesionalnog dolivanja fluida u sistem,
                                koje se vrši ne adekvatnim mašinama kao i zbog poroznosti creva, koje se dešava usled neadekvatnog ili
                                neredovnog održavanja sistema. Kvarovi vezani za pritisak nastaju zbog oštećenja kompresora koja mogu nastati iz sledećih razloga:</p>
                            <ul>
                                <li> - neadekvatnog ulja.</li>
                                <li> - nedovoljne količine ulja.</li>
                                <li> - dotrajalosti(istrošenosti) samog kompresora</li>
                                <li> - izloženosti kompresora nepovoljnim faktorima kao što su vlaga i drugi fluidi.</li>
                                <li> - mehaničkog oštećenja.</li>
                            </ul>
                            <p>Ukoliko se ne remontuje sistem auto klime, dopuna sistema freonom i potrebnim fluidima, neće garantovati pravilno
                                funkcionisanje vašeg klima sistema. Zbog toga se nakon pravilnog dijagnostikovanja, pristupa remontu sistema,
                                pa tek nakon toga dopuni freona, ulja za podmazivanje i UV boje.</p>
                            <p>U remont sistema još spadaju i zamena seta kvačila klime tj. spojnice lagera kompresora, dihtunga i gumica, creva, kondenzatora, isparivača itd...</p>
                        </div>
                        <div id="dezinfekcija-tab" class="single-service-tab">
                            <h2>Dezinfekcija sistema auto klime</h2>
                            <p>Usled nepravilnog korišćenja auto klime i ne redovne zamene filtera polena, stvaraju se bakterije
                                u samom sistemu za izduvavanje vazduha, koje stvaraju neprijatan miris, pa u nekim slučajevima čak mogu i uticati na vaše zdravlje.
                                Iz tog razloga idealno stanje klima sistema se može održati dezinfekcijom kompletnog izduvnog sistema i zamenom polen filtera,
                                jednom godišnje, a najidealnije pred početak letnje sezone. Samom dezinfekcijom sistema će te dobiti svežinu u vašem vozilu,
                                ali i najbitnije od svega, faktor zdravstvene zaštite od bakterija iz klima sistema.</p>
                        </div>
                        <div id="delovi-tab" class="single-service-tab">
                            <h2>Delovi klima sistema</h2>
                            <p>Usled nastalih oštećenja ili dotrajalosti pojedinih delova klima sistema, nekada je potrebno zameniti iste.
                                Naš servis sarađuje sa velikim brojem uvoznika novih delova za klima sisteme, tako da vam možemo ponuditi iste sa adekvatnim garancijama.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('inc/body-after.php');
?>