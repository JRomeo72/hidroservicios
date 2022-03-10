<?php
    $background = $_SESSION['background'];
    $texto1 = $_SESSION['texto1'];
    $texto2 = $_SESSION['texto2'];
?>

<section class="parallax__container">

    <div class="mask">
        <div class="parallax-container text-white">
            <div class="contenido box-shadow animalo" data-animate-effect="fadeInUp">
            <!-- <div class="contenido _shadow-bg-light-l"> -->
                <h2><?php echo $texto1; ?></h2>
                <p><?php echo $texto2; ?></p>
            </div>
        </div>
    </div>

    <div class="parallax" style="<?php echo $background; ?>"></div>

</section>