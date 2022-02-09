<?php
$pageTitle = 'O nama';
$pageClass = 'about';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
?>
<div id="<?php echo $pageClass; ?>-page">
    <section class="text-section text-center text-white section-padding">
        <div class="wrapper">
            <p class="h4 font-weight-light">Mi smo pokrenuli ideju 3D parketa da bi u svijet podova od drveta donjeli novu dimenziju uredjenja vašeg doma. Primjenom novih tehnologija I uvodjenjem inovacija u sam način izrade parketa osigurali smo visok kvalitet I moderan dizajn.
                JoWood parket je dizajniran tako da omogucava jednostavno postavljanje uz mnogo različitih mustri za slaganje. U ponudi imamo veliki izbor boja sto nam daje veliku slobodu u uredjivanju vasih interijera. Naši 3D podovi su prilagodivi svakom domu, na vama je samo da budete maštoviti.
            </p>
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
                <li class="h4 font-weight-light">Za proizvodnju naših 3D parketa koristimo isključivo hrast i materijale koji su takođe na prirodnoj bazi.</li>
                <li class="h4 font-weight-light">Otpadne materijale recikliramo i uvodimo ponovo u proizvodnju.</li>
                <li class="h4 font-weight-light">Korišćenjem tehinike lameliranja drveta postigli smo visoki kvalitet i veliku tolerantnost na toplotu i vlagu.</li>
            </ul>
        </div>
    </section>
</div>


<?php
include('inc/body-after.php');
?>