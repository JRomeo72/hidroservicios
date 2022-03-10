<?php
    function CardRenderer($valor1, $valor2, $valor3) {
        echo 
        '<div class="'.$valor1.' card-container">
            <div class="card">
                <div class="img">
                    <img src="'.$valor2.'" alt="">
                </div>
                <div class="text">
                    <p>'.$valor3.'</p>
                </div>
            </div>
        </div>';
    }
?>