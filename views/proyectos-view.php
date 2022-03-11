<?php
    $images = [
        "/assets/img/proyectos/project-cover.jpg",
        "/assets/img/proyectos/project-cover.jpg",
        "/assets/img/proyectos/project-cover.jpg",
        "/assets/img/proyectos/project-cover.jpg",
    ];

    $texto = [
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dignissimos doloribus quos, ad impedit est ducimus dolor doloremque dolores.",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dignissimos doloribus quos, ad impedit est ducimus dolor doloremque dolores.",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dignissimos doloribus quos, ad impedit est ducimus dolor doloremque dolores.",
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dignissimos doloribus quos, ad impedit est ducimus dolor doloremque dolores.",
    ];

    $link = [
        "home",
        "conocenos",
        "servicios",
        "contactanos"
    ];

    $size = count($texto);

    $animalo="animalo";
    $effect="fadeInUp";

    require "./functions/CardRenderer.php";


?>

<section class="proyectos">
    <div class="container">
        <h2 class="text-shadow">PROYECTOS</h2>
        <div class="container-card-renderer">
            <div class="grid-container">

                <?php
                    for ($i=0; $i < $size ; $i++) {
                        echo "<div class='grid-item card-container'>";
                        echo CardRenderer($images[$i], $texto[$i], $link[$i], $animalo, $effect);
                        echo "</div>";
                    }
                ?>


            </div>
        </div>
    </div>
</section>

<script>

    setTimeout(() => {
        linkActive(".link-proyectos");
    }, 500);

</script>