<?php
$pageTitle = 'Kontakt';
$pageClass = 'contact';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
require_once('forms/keys.php');
?>
<section id="mainContact">
    <div class="wrapper">
        <div class="row">
            <div class="col-12 col-md-6 px-4 mb-4 mb-md-0 d-flex">
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
                    <form method="post" action="forms/contact.php" id="contact-form">
                        <div class="row">
                            <div class="col-12 mb-3 col-md-6">
                                <input name="name" class="input-style" id="contact-name" placeholder="Vaše Ime *" type="text" required>
                            </div>
                            <div class="col-12 mb-3 col-md-6">
                                <input name="email" class="input-style" id="contact-mail" placeholder="Vaša e-mail adresa *" type="email" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input name="subject" class="input-style" id="contact-subject" placeholder="Naslov poruke *" type="text" required>
                            </div>
                            <div class="col-12 mb-3">
                                <textarea class="input-style" name="msg" id="contact-text" placeholder="Vaša poruka *" required></textarea>
                            </div>
                            <div id="message" class="col-12"></div>
                            <div class="col-6 mb-3"></div>
                            <div class="col-6 mb-3">
                                <button class="g-recaptcha btn btn-block btn-dark text-uppercase font-weight-light" data-sitekey="<?php echo $site; ?>" data-callback="onSubmit" data-action="submit"><i class="far fa-paper-plane"></i> Pošaljite</button>
                            </div>
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

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        var formData = $("#contact-form").serialize();
        $(".has-error").removeClass("has-error");
        if ($("#contact-name").val() == "") {
            $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite svoje ime.</div>');
            return false;
        }
        if ($("#contact-mail").val() == "") {
            $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite svoju email adresu.</div>');
            return false;
        }
        if ($("#contact-subject").val() == "") {
            $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite naslov poruke.</div>');
            return false;
        }
        if ($("#contact-text").val() == "") {
            $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite poruku.</div>');
            return false;
        }
        $.ajax({
            url: "forms/contact.php",
            type: "POST",
            data: formData,
            success: function(data) {
                $("#contact-form")[0].reset();
                $("#message").html(data);
            },
            error: function() {
                alert("error handling here");
            }
        });
    };
</script>
<?php
include('inc/body-after.php');
?>