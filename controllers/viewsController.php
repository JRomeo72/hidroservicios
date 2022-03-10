<?php

    require_once "./models/viewsModel.php";

    class viewsController extends viewsModel {

        /* ---------- Controlador para obtener plantilla ---------- */
        public function get_template_controller(){
            return require_once "./template.php";
        }

        /* ---------- Controlador para obtener vista ---------- */
        public function get_view_controller(){
            if( isset( $_GET[ 'views' ] ) ) {
                $url = explode( '/', $_GET[ 'views' ] );
                $res = viewsModel::get_view_model( $url[0] );
            } else {
                $res = "./views/home-view.php";
            }

            return $res;
        }
    }
