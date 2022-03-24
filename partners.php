<?php
$pageTitle = 'Partneri';
$pageClass = 'partners';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
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
                    <form action="forms/partners.php" id="partenrs-form" class="row">
                        <div class="col-12 text-center">
                            <h2 class="mb-4">Kontaktirajte nas</h2>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input required name="name" type="text" placeholder="Vaše ime *" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input required name="email" type="text" placeholder="Vaš email *" class="input-style">
                        </div>
                        <div class="col-12 mb-3">
                            <input required name="company" type="text" placeholder="Naziv kompanije *" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input name="adress" type="text" placeholder="Adresa kompanije" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input name="jib" type="text" placeholder="JIB kompanije" class="input-style">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea required name="message" id="" class="input-style" placeholder="Napišite više informacija o tipu partnerstva koje želite da ostvarimo ovde ili nam postavite pitanje *"></textarea>
                        </div>
                        <div class="col-6 mb-3"></div>
                        <div class="col-6 mb-3">
                            <button class="btn btn-block btn-dark text-uppercase font-weight-light" type="submit">
                                <i class="far fa-paper-plane"></i> Pošaljite
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include('inc/body-after.php');
?>