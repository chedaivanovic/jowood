<?php
$ogUrl = '404.php';
$ogDesc = 'Error404. Stanica koju ste izabrali ne postoji.';
$ogImg = 'assets/img/breadcrumbs/products.jpg';
$pageTitle = 'Nepostojeća strana';
$pageClass = 'error';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
?>

<div id="<?php echo $pageClass; ?>-page">
    <div class="wrapper">
        <p class="display-1 font-weight-light">Error 404</p>
        <h2 class="mb-4 h1 font-weight-bold ">Stranica koju tražite ne postoji</h2>
        <h3 class="font-weight-light mb-5">Da li želite da se vratite na početnu stranu?</h3>
        <a href="/" class="cta-btn cta-btn-primary">Nazad na početnu</a>
    </div>
</div>

<?php
include('inc/body-after.php');
?>