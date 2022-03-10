<?php
    $images = array(
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
        "/assets/img/servicios/bomba-centrifuga.jpg",
        "/assets/img/servicios/bomba-sumergible.jpg",
    );

    $texto = array(
        "Suministro e instalación de equipos de bombeo centrifugos y sumergibles.",
        "Suministro e instalación de equipos verticales para calderas con sello mecanico de viton hasta 120°c con diferentes caudales requeridos.",
        "Suministro e instalación equipos de bombeo para aguas lluvias y residuales con solidos.",
        "Perforaciones y mantenimiento de pozo.",
        "Rehabilitacion quimica y mecanica de pozo.",
        "Suministro e instalación de sistemas de filtracion de agua potable uso residencial e industrial.",
        "Suministro e instalación de osmosis inversa para uso industrial.",
        "Tratamiento de aguas residuales industriales.",
        "Diseño, suministro e instalación de sistemas contra incendio.",
        "Diseño, suministro e instalación de sistemas de riego.",
        "Diseño, suministro e instalación de equipos de piscinas.",
        "Suministro e instalación de calentadores a gas y electricos.",
        "Servicio de mantenimiento de cisternas.",
        "Te brindamos asesoria profesional.",
        "Taller especializado con equipos y herramientas de funcionamiento.",
        "Soporte tecnico de servicios.",
        "Amplio inventario de repuestos en todos nuestros equipos.",
        "Personal tecnico altamente calificado."
    );

    $clase = "grid-template";

    $contador = 18;

    require "./functions/CardRenderer.php";
    
?>
<section class="servicios">
    <div class="container">
        <h2 class="text-shadow">SERVICIOS</h2>
        <div class="container-card-renderer">
            <div class="grid-container">

                <?php
                    for ($i=0; $i < $contador ; $i++) { 
                        echo CardRenderer($clase, $images[$i], $texto[$i]);
                    }
                ?>


            </div>
        </div>
    </div>
</section>