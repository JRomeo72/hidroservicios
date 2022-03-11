<?php
    function CardRenderer($image="", $texto="", $link="", $animalo="", $effect="") {
        if($link == ""){
            $boton="";
        }else{
            $boton = '<a href='.$link.' class="btn btn-primary">Leer más</a>';
        };

        echo 
        "<div class='card $animalo' data-animate-effect='$effect'>
            <div class='img'>
                <img src='$image'alt='img'>
            </div>
            <div class='text'>
                <p>$texto</p>
            </div>
            <div class='boton'>
                $boton
            </div>
        </div>";
    }
?>