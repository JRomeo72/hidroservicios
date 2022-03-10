<?php
    session_start();
    $_SESSION['background'] = "background-image: url('./assets/img/parallax-1.jpg'); background-position: top;";
    $_SESSION['texto1'] ="Sistemas * de riego residenciales";
    $_SESSION['texto2'] ="Somos * distribuidores de la mejor marca de sistemas de riego residenciales en El Salvador.";
    include "./components/About-Us.php";
    include "./components/Parallax.php";
    include "./components/Principios.php";
?>

<script>

    setTimeout(() => {
        linkActive(".link-conocenos");
    }, 500);

</script>