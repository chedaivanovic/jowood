<?php
$pageTitle = 'Kontakt';
$pageClass = 'contact';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
?>
<section id="mainContact">
    <div class="wrapper">
        <div class="row">
            <div class="col-12 col-md-6 px-4 d-flex">
                <div class="contact-page-card contact-page-info-card">
                    <p class="contact-heading">Kontakt Informacije</p>
                    <h2>JoWood D.O.O.</h2>
                    <h3>Preduzeće za proizvodnju i ugradnju 3D podova</h3>
                    <p><span class="icon-holder"><i class="fas fa-map-marker-alt"></i></span> Skendera Kulenovića 14, Banja Luka 78000</p>
                    <p><span class="icon-holder"><i class="fas fa-briefcase"></i></span> JIB : 4404741370008</p>
                    <p><span class="icon-holder"><i class="fas fa-clock"></i></span> Radnim danima: 9.00 do 17.00</p>
                    <?php /* <p><i class="fas fa-industry"></i> Put za Lamovitu 1, Omarska</p> */ ?>
                    <a href="mailto:office@jowood.ba"><span class="icon-holder"><i class="fas fa-envelope"></i></span> office@jowood.ba</a>
                    <a href="tel:+38766221588"><span class="icon-holder"><i class="fas fa-phone"></i></span> +387 66 221 588</a>
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <span class="icon-holder"><i class="fab fa-facebook-f"></i></span> FB: JoWood 3D Podovi
                    </a>
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <span class="icon-holder"><i class="fab fa-instagram"></i></span> IG: jowoodpodovi
                    </a>
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <span class="icon-holder"><i class="fab fa-youtube"></i></span> YT: jowoodpodovi
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 px-4 d-flex">
                <div class="contact-page-card contact-page-form-card">
                    <p class="contact-heading">Pišite nam</p>
                    <form action="" id="contact-form">
                        <div class="row">
                            <div class="col-12 mb-3 col-md-6"><input class="input-style" id="contact-name" placeholder="Vaše Ime *" type="text" required></div>
                            <div class="col-12 mb-3 col-md-6"><input class="input-style" id="contact-mail" placeholder="Vaša e-mail adresa *" type="email" required></div>
                            <div class="col-12 mb-3"><input class="input-style" id="contact-subject" placeholder="Naslov poruke *" type="text" required></div>
                            <div class="col-12 mb-3"><textarea class="input-style" name="contact-text" id="contact-text" placeholder="Vaša poruka *" required></textarea></div>
                            <div class="col-6 mb-3"></div>
                            <div class="col-6 mb-3"><button class="btn btn-block btn-dark text-uppercase font-weight-light" type="submit"><i class="far fa-paper-plane"></i> Pošaljite</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mainMap">
    <iframe id="googleMapJoWood" src="https://www.google.com/maps/d/u/0/embed?mid=1PQ7atWwSQsVh9qOS_UE4KUyqv5iMPHfF&ehbc=2E312F" width="" height="" frameborder="0" style="border:0" zoom="21"></iframe>
</section>

<?php
include('inc/body-after.php');
?>