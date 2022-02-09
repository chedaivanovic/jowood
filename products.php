<?php
$pageTitle = 'Proizvodi';
$pageClass = 'products';
include('inc/body-before.php');
createBreadcrumb($pageTitle, $pageClass);
$floors = array(
    array("name" => 'cube', "desc" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, debitis. Dolore architecto neque molestias laboriosam mollitia reiciendis laudantium facere recusandae!',  ''),
    array("name" => 'flower', "desc" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, at? Dolor tempore, culpa mollitia modi beatae consequuntur reprehenderit fugiat libero dolorum iusto. Laboriosam eveniet consequatur non reprehenderit ullam odit repudiandae.',  ''),
    array("name" => 'hexagon'),
    array("name" => 'line'),
    array("name" => 'star'),
    array("name" => 'triangle')
);
$counter = 1;
?>

<div id="<?php echo $pageClass; ?>-page">
    <div id="prod-floors-tab" class="">
        <div class="wrapper">
            <div class="row py-4">
                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="cube">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/cube.svg" alt="JoWood 3D podovi | Cube">
                    <h4 class="text-white">Cube</h4>
                </button>
                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="flower">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/flower.svg" alt="JoWood 3D podovi | Flower">
                    <h4 class="text-white">Flower</h4>
                </button>
                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="hexagon">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/hexagon.svg" alt="JoWood 3D podovi | Hexagon">
                    <h4 class="text-white">Hexagon</h4>
                </button>
                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="line">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/line.svg" alt="JoWood 3D podovi | Line">
                    <h4 class="text-white">Line</h4>
                </button>

                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="star">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/star.svg" alt="JoWood 3D podovi | Star">
                    <h4 class="text-white">Star</h4>
                </button>

                <button class="col-12 col-sm-6 col-md-4 btn mb-3 prod-floors-trigger" data-select="triangle">
                    <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/triangle.svg" alt="JoWood 3D podovi | Triangle">
                    <h4 class="text-white">Triangle</h4>
                </button>
            </div>
        </div>
    </div>
    <div id="main-floors-page" class="d-none">
        <section id="floor-selection">
            <div class="wrapper">
                <div id="floor-triggers" class="py-5">
                    <?php foreach ($floors as $f) : ?>
                        <div class="floor-trigger-item">
                            <button class="floor-trigger" data-trigger-name="<?php echo $f['name']; ?>" data-triggers="<?php echo $f['name']; ?>-tab"><?php echo ucfirst($f['name']); ?></button>
                        </div>
                    <?php $counter++;
                    endforeach;
                    $counter = 1; ?>
                </div>
            </div>
        </section>
        <!-- <section id="info-selection"> 
            <div class="wrapper">
                <div class="row no-gutters text-center">
                    <div class="col-6 col-md-3">
                        <button class="info-trigger info-trigger-active" data-info="opis">Opis</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="info-trigger" data-info="spec">Specifikacija</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="info-trigger" data-info="gal">Galerija</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="info-trigger" data-info="nest">Nesto</button>
                    </div>
                </div>
            </div>
        </section>-->
        <section id="floor-tabs">
            <?php foreach ($floors as $tab) :
                $tn = $tab['name'];
                $directory = "assets/img/podovi/$tn/";
                $directoryTmb = $directory . 'thumbs';
                $images = glob($directory . "*.jpg");
                $thumbs = glob($directoryTmb . "/*.jpg");

                $imagesCount = 1; ?>
                <div class="floors-tab" id="<?php echo $tab['name']; ?>-tab">
                    <?php /* <div data-info-tab="opis" class="info-tab info-tab-active">

                    </div>
                    <div data-info-tab="spec" class="info-tab">

                    </div>
                    <div data-info-tab="gal" class="info-tab"> */ ?>
                    <div class="wrapper">
                        <div class="gallery-holder">
                            <?php foreach ($images as $img) : ?>
                                <a class="mb-3 rounded overflow-hidden" href="<?php echo $img ?>" data-lightbox="JoWood 3D Podovi | <?php echo $imagesCount; ?>">
                                    <img src="<?php echo $thumbs[$imagesCount - 1]; ?>" alt="JoWood 3D Podovi | <?php echo $imagesCount; ?>">
                                </a>
                            <?php
                                $imagesCount++;
                            endforeach; ?>
                        </div>
                    </div>
                    <?php /* </div>
                    <div data-info-tab="nest" class="info-tab">

                    </div> */ ?>
                </div>
            <?php $counter++;
            endforeach; ?>
        </section>
    </div>
</div>
<?php
include('inc/body-after.php');
?>