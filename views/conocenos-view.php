<?php
    session_start();
    $_SESSION['background'] = "background-image: url('./assets/img/parallax-1.jpg'); background-position: top;";
    $_SESSION['texto1'] ="Hidroservicios El Salvador";
    $_SESSION['texto2'] ="Somos expertos en equipos de bombeo, cisternas, sistemas de filtración, sistemas de riego y mucho más.";
    include "./components/About-Us.php";
    include "./components/Parallax.php";
    include "./components/Principios.php";
?>

<script>

    setTimeout(() => {
        linkActive(".link-conocenos");
    }, 500);

</script>