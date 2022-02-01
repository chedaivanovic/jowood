<?php
$pageTitle = 'Zaposlenje';
$pageClass = 'job';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
$searchFor = array('Radnik u proizvodnji', 'Parketar');
?>

<section id="<?php echo $pageClass; ?>-page">
    <div class="text-section text-center text-white section-padding">
        <div class="wrapper">
            <p class="h4 font-weight-light">U koliko ste u potrazi za poslom, a imate iskustva... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem dolorem harum hic nostrum eveniet ad dolorum excepturi? Fuga consequatur similique nisi commodi vitae adipisci aut mollitia inventore blanditiis, esse at odit magnam, iusto numquam totam beatae quam sequi, culpa facere officia nesciunt. Tempora, perspiciatis laboriosam mollitia quibusdam nostrum odit. Vero minus corporis dolorum? Cum cumque cupiditate aspernatur optio praesentium ut tempora libero explicabo. Perferendis quidem consequuntur dicta aspernatur unde exercitationem!</p>
        </div>
    </div>
    <div id="current-positions" class="section-padding">
        <div class="wrapper">
            <?php if (count($searchFor) > 0) : ?>
                <h3 class="text-center mb-4">Trenutno otvorene pozicije</h3>
                <div class="d-flex flex-wrap justify-content-center">
                    <?php
                    $searchCount = 1;
                    foreach ($searchFor as $s) : ?>
                        <div class="search-position-box" data-search-count="<?php echo $searchCount; ?>-position">
                            <p><?php echo $s; ?></p>
                        </div>
                    <?php
                        $searchCount++;
                    endforeach; ?>
                </div>
            <?php else : ?>
                <h5>Trenutno nismo u potrazi za radnom snagom, ali to nije razlog da nam ne pošaljete Vaš CV ili napišete nešto o sebi, da vas možemo kontaktirati kada budemo imali otvorene pozicije.</h5>
            <?php endif; ?>
        </div>
    </div>

    <div class="job-form-section section-padding">
        <div class="wrapper">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <form action="job.php" id="partenrs-form" class="row">
                        <div class="col-12 text-center">
                            <h2 class="mb-4">Kontaktirajte nas</h2>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" placeholder="Vaše ime" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" placeholder="Grad" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" placeholder="Broj telefona" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" placeholder="Email Adresa" class="input-style">
                        </div>

                        <div class="col-12 col-md-4 mb-3">
                            <select class="input-style" name="stepen" id="stepen">
                                <option default disabled selected value="notselected">Stepen obrazovanja</option>
                                <option value="1">1.SSS</option>
                                <option value="2">2.SSS</option>
                                <option value="3">3.SSS</option>
                                <option value="4">4.SSS</option>
                                <option value="5">5.SSS</option>
                                <option value="6">6.SSS</option>
                                <option value="7">7.SSS</option>
                                <option value="8">8.SSS</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8 mb-3">
                            <input type="text" placeholder="Škola / Fakultet" class="input-style">
                        </div>
                        <div class="col-12 mb-3">
                            <select class="input-style" name="position" id="position">
                                <option default disabled selected value="notselected">Zanima me pozicija</option>
                                <option value="db">Nije bitno / Nije navedeno</option>
                                <?php if (count($searchFor) > 0) :
                                    $searchCount = 1;
                                    foreach ($searchFor as $s) : ?>
                                        <option value="<?php echo $searchCount; ?>-position">
                                            <?php echo $s; ?>
                                        </option>
                                <?php
                                        $searchCount++;
                                    endforeach;
                                endif; ?>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="input-file-container">
                                <input class="input-file" id="my-file" type="file" accept=".txt,.pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <label tabindex="0" for="my-file" class="input-file-trigger">Dodajte svoj CV (Nije obavezno)</label>
                            </div>
                            <p class="file-return"></p>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="" id="" class="input-style" placeholder="Napišite sažeto o sebi(U koliko ne šaljete CV)"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="" id="" class="input-style" placeholder="Prethodna radna iskustva(U koliko ne šaljete CV)"></textarea>
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
    </div>
</section>


<?php
include('inc/body-after.php');
?>