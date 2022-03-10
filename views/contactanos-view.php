<?php
    session_start();
    $_SESSION['background'] = "background-image: url('./assets/img/parallax-2.jpg'); background-position: top right;";
    $_SESSION['texto1'] ="Sistemas de riego residenciales";
    $_SESSION['texto2'] ="Somos distribuidores de la mejor marca de sistemas de riego residenciales en El Salvador.";
    include "./components/Cards-02.php";
    include "./components/Formulario.php";
    include "./components/Brands.php";
    include "./components/Parallax.php";

?>

<script>

    setTimeout(() => {
        linkActive(".link-contactanos");
    }, 500);

</script>