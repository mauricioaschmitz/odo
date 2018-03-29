<html>
    <head>
        <meta charset="utf-8">
        <title><?php if (isset($title)){ echo $title;} else{ echo "Odonto";}?></title>

        <!-- Arquivos JavaScript -->
        <script src="<?php echo base_url() ?>includes/js/jquery.min.js"></script> <!-- Importar jQuery -->
        <script src="<?php echo base_url() ?>includes/bootstrap/js/bootstrap.min.js"></script> <!-- Importar bootstrap.js -->
        <script src="<?php echo base_url() ?>includes/js/default.js"></script> <!-- Importar Arquivo JavaScript Default -->

        <!-- Arquivos CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>includes/bootstrap/css/bootstrap.css">
        <?php if(isset($headerOption)){ echo $headerOption;}?>
    </head>
<body style="padding-bottom: 100px;">
<?php include_once('menu.php');