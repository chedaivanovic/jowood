<?php
$pageTitle = 'Partneri';
$pageClass = 'partners';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
?>

<div id="<?php echo $pageClass; ?>-page">
    <section class="text-section text-center text-white section-padding">
        <div class="wrapper">
            <p class="h4 font-weight-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci rerum itaque perspiciatis facere quibusdam. Reiciendis mollitia magni iusto modi rerum? Veritatis, modi expedita fuga eos nisi quae quam temporibus vel nemo illo est iusto quo culpa nobis necessitatibus repellat officia, odio, tempora commodi? Saepe, error temporibus? Beatae esse tempora voluptatum voluptatibus molestias cumque quidem asperiores consectetur? Quae mollitia consequuntur asperiores:</p>
            <ul class="pt-4 h5 font-weight-light text-left d-inline-block doted-ul">
                <li class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                <li class="mb-3">Nihil aliquid cum similique tempore ullam amet!</li>
                <li class="mb-3">Sunt aliquid molestiae placeat, natus odio nulla!</li>
                <li class="mb-3">Eos nobis animi eligendi dolores quaerat suscipit.</li>
                <li class="mb-3">Deleniti repellendus deserunt perferendis? Est, quis quaerat!</li>
                <li class="mb-3">Natus, facere repellat ipsa rem unde ducimus?</li>
                <li class="mb-3">Assumenda atque deserunt ab maiores quo magnam.</li>
                <li class="mb-3">Ut iure laudantium optio quidem corporis veniam?</li>
            </ul>
        </div>
    </section>
    <section class="partners-form-section section-padding">
        <div class="wrapper">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <form action="partners.php" id="partenrs-form" class="row">
                        <div class="col-12 text-center">
                            <h2 class="mb-4">Kontaktirajte nas</h2>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" placeholder="Vaše ime" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" placeholder="Naziv kompanije" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" placeholder="Adresa kompanije" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" placeholder="JIB kompanije" class="input-style">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="" id="" class="input-style" placeholder="Napišite više informacija o tipu partnerstva koje želite da ostvarimo ovde ili nam postavite pitanje"></textarea>
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