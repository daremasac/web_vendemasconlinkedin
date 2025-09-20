<?php
    include_once('global/global.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Crece tu Negocio con LinkedIn | Vende más con LinkedIn</title>
    <!-- Metadatos -->
    <meta name="author" content="<?php echo AUTHOR?>">
    <meta name="description"
        content="Impulsa tu negocio y aumenta tus ventas con LinkedIn. Aprende estrategias efectivas para maximizar tu presencia y éxito en la plataforma profesional.">
    <meta name="keywords"
        content="LinkedIn, negocios, ventas, estrategias, presencia online, marketing, crecimiento, red profesional, B2B, networking, promoción, éxito empresarial, optimización LinkedIn, marketing digital, posicionamiento, generar leads">
    <!-- Etiquetas Open Graph -->
    <meta property="og:title" content="Inicio - Crece tu Negocio con LinkedIn | Vende más con LinkedIn" />
    <meta property="og:description"
        content="Impulsa tu negocio y aumenta tus ventas con LinkedIn. Aprende estrategias efectivas para maximizar tu presencia y éxito en la plataforma profesional.">
    <meta property="og:image" content="<?php echo URL?>assets/img/logo/miniatura.png">
    <meta property="og:url" content="<?php echo URL?>" />
    <meta property="og:type" content="website">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="<?php echo URL?>assets/img/icono/icono.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/animate.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/fontawesome.min.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/meanmenu.min.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/venobox.css" type="text/css" media="all">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/style.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/responsive.css" type="text/css" media="all">
    <!-- progresscircle CSS -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/progresscircle.css">
    <!-- aos CSS -->
    <link href="<?php echo URL?>assets/css/aos.css" rel="stylesheet">
    <!-- modernizr CSS -->
    <script src="<?php echo URL?>assets/js/modernizr-3.5.0.min.js"></script>



</head>

<body>
    <?php
    $identificador =  getenv('HTTP_USER_AGENT');
    if(preg_match("/Edg/i",$identificador))
    {
       require_once ('views/index.php');
       require_once('views/footer.php');
    }
    else if(preg_match("/Chrome/i",$identificador)){
       require_once ('view/index.php');
       require_once('view/footer.php');
    }
    else
    {
       require_once ('view/index.php');
       require_once('view/footer.php');
    }
    ?>
    <script src="<?php echo URL?>assets/js/typing.js"></script>
</body>

</html>