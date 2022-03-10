<?php
    class viewsModel {

        /* ---------- Modelo para obtener las vistas ---------- */
        protected static function get_view_model( $view ) {
            $URLList = [
                "home",
                "conocenos",
                "servicios",
                "proyectos",
                "contactanos"
            ];

            if( in_array( $view, $URLList ) ) {

                if( is_file( "./views/".$view."-view.php" ) ){
                    $content = "./views/".$view."-view.php";
                } else {
                    $content = "404";
                }

            } elseif( $view == "index" ) {
                $content = "./views/home-view.php";
            } else {
                $content = "404";
            }

            return $content;
        }
    }