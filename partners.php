<?php
$ogUrl = 'partners.php';
$ogDesc = '"JoWood" je otvoren za partnerske kompanije kojima nudimo brojne pogodnosti. Ako imate prijedlog za saradnju, pozivamo vas da nam pišete. ';
$ogImg = 'assets/img/breadcrumbs/partners.jpg';
$pageTitle = 'Partneri';
$pageClass = 'partners';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
require_once('forms/keys.php');
?>

<div id="<?php echo $pageClass; ?>-page">
    <section class="text-section text-center text-white section-padding">
        <div class="wrapper">
            <p class="h4 font-weight-light max-w-md">"JoWood" je otvoren za partnerske kompanije kojima nudimo brojne pogodnosti. Ako imate prijedlog za saradnju, pozivamo vas da nam pišete. </p>
        </div>
    </section>
    <section class="partners-form-section section-padding">
        <div class="wrapper">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <form method="post" action="forms/partners.php" id="partners-form" class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <input id="contact-name" required name="name" type="text" placeholder="Vaše ime *" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input id="contact-mail" required name="email" type="text" placeholder="Vaš email *" class="input-style">
                        </div>
                        <div class="col-12 mb-3">
                            <input id="contact-company" required name="company" type="text" placeholder="Naziv kompanije *" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input name="address" type="text" placeholder="Adresa kompanije" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input name="jib" type="text" placeholder="JIB kompanije" class="input-style">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea required name="message" id="contact-text" class="input-style" placeholder="Napišite više informacija o tipu partnerstva koje želite da ostvarimo ovde ili nam postavite pitanje *"></textarea>
                        </div>
                        <div class="col-6 mb-3"></div>
                        <div id="message" class="col-12"></div>
                        <div class="col-6 mb-3"></div>
                        <div class="col-6 mb-3">
                            <button class="g-recaptcha btn btn-block btn-dark text-uppercase font-weight-light" data-sitekey="<?php echo $site; ?>" data-callback="onSubmit" data-action="submit"><i class="far fa-paper-plane"></i> Pošaljite</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            var formData = $("#partners-form").serialize();
            $(".has-error").removeClass("has-error");
            if ($("#contact-name").val() == "") {
                $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite svoje ime.</div>');
                return false;
            }
            if ($("#contact-mail").val() == "") {
                $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite svoju email adresu.</div>');
                return false;
            }
            if ($("#contact-company").val() == "") {
                $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite ime kompanije.</div>');
                return false;
            }
            if ($("#contact-text").val() == "") {
                $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite poruku.</div>');
                return false;
            }
            $.ajax({
                url: "forms/partners.php",
                type: "POST",
                data: formData,
                success: function(data) {
                    $("#partners-form")[0].reset();
                    $("#message").html(data);
                },
                error: function() {
                    alert("error handling here");
                }
            });
        };
    </script>
</div>

<?php
include('inc/body-after.php');
?>