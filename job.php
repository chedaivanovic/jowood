<?php
$pageTitle = 'Zaposlenje';
$pageClass = 'job';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
$searchFor = array(/*'Radnik u proizvodnji', 'Parketar'*/);
require_once('forms/keys.php');
?>

<div id="<?php echo $pageClass; ?>-page">
    <section class="text-section text-center text-white section-padding">
        <div class="wrapper">
            <p class="h4 font-weight-light max-w-md">Iskusni ste u obradi drveta i želite posao u našoj kompaniji? Javite nam se, napišite nam par riječi o sebi ili pošaljite CV.</p>
        </div>
    </section>
    <section id="current-positions" class="section-padding">
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
    </section>

    <section class="job-form-section section-padding">
        <div class="wrapper">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <form method="post" action="forms/job.php" id="job-form" class="row" enctype="multipart/form-data">
                        <div class="col-12 col-md-6 mb-3">
                            <input required id="contact-name" name="name" type="text" placeholder="Vaše ime *" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input required id="contact-city" name="city" type="text" placeholder="Grad *" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input required id="contact-phone" name="phone" type="text" placeholder="Broj telefona *" class="input-style">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input required id="contact-mail" name="email" type="email" placeholder="Email Adresa *" class="input-style">
                        </div>

                        <div class="col-12 col-md-4 mb-3">
                            <select class="input-style" name="education" id="contact-education">
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
                            <input type="text" id="contact-school" name="school" placeholder="Škola / Fakultet" class="input-style">
                        </div>
                        <div class="col-12 mb-3">
                            <select class="input-style" name="position" id="contact-position">
                                <option default disabled selected value="notselected">Zanima me pozicija</option>
                                <option value="db" data-js-pos="Nije bitno / Nije navedeno">Nije bitno / Nije navedeno</option>
                                <?php if (count($searchFor) > 0) :
                                    $searchCount = 1;
                                    foreach ($searchFor as $s) : ?>
                                        <option value="<?php echo $searchCount; ?>-position" data-js-pos="<?php echo $s; ?>">
                                            <?php echo $s; ?>
                                        </option>
                                <?php
                                        $searchCount++;
                                    endforeach;
                                endif; ?>
                            </select>
                        </div>



                        <?php /* <div class="col-12 mb-3">
                            <div class="input-filenbtn">
                                <div class="input-file-container">
                                    <input class="input-file" id="contact-file" name="contact-file" type="file" accept=".txt,.pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                    <label tabindex="0" for="contact-file" class="input-file-trigger">Dodajte svoj CV (Max 24MB. Nije obavezno)</label>
                                </div>
                                <!-- <button id="add-cv">Dodaj CV</button> -->
                            </div>
                            <p class="file-return"></p>
                        </div>
 */ ?>


                        <div class="col-12 mb-3">
                            <textarea name="about" id="contact-about" class="input-style" placeholder="Napišite sažeto o sebi"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="exp" id="contact-exp" class="input-style" placeholder="Prethodna radna iskustva"></textarea>
                        </div>
                        <div id="message" class="col-12"></div>
                        <div class="col-6 mb-3"></div>
                        <div class="col-6 mb-3">
                            <button class="g-recaptcha btn btn-block btn-dark text-uppercase font-weight-light" <?php /*onclick="return VerifyUploadSizeIsOK()" */ ?> data-sitekey="<?php echo $site; ?>" data-callback="onSubmit" data-action="submit"><i class="far fa-paper-plane"></i> Pošaljite</button>
                        </div>
                        <div class="col-12 text-center py-4">
                            <p class="lead">Ukoliko želite, svoj CV nam možete poslati direktno na <a class="d-inline-block" href="mailto:office@jowood.ba" target="_blank" rel="noopener noreferrer">office@jowood.ba</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript">
    function VerifyUploadSizeIsOK() {
        var UploadFieldID = "contact-file";
        var MaxSizeInBytes = 25165824;
        var fld = document.getElementById(UploadFieldID);
        if (fld.files && fld.files.length == 1 && fld.files[0].size > MaxSizeInBytes) {
            alert("The file size must be no more than " + parseInt(MaxSizeInBytes / 1024 / 1024) + "MB");
            return false;
        }
        return true;
    }


    function onSubmit(token) {
        var formData = $("#job-form").serialize();
        $(".has-error").removeClass("has-error");
        if ($("#contact-name").val() == "") {
            $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite svoje ime.</div>');
            return false;
        }
        if ($("#contact-mail").val() == "") {
            $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite svoju email adresu.</div>');
            return false;
        }
        if ($("#contact-city").val() == "") {
            $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite svoju grad.</div>');
            return false;
        }
        if ($("#contact-phone").val() == "") {
            $("#message").html('<div class="bg-danger text-white lead mb-3 py-2 px-4 rounded">Unesite svoj broj telefona.</div>');
            return false;
        }
        $.ajax({
            url: "forms/job.php",
            type: "POST",
            data: formData,
            success: function(data) {
                $("#job-form")[0].reset();
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