<!DOCTYPE html>
<html>
<head>
    <?php include('./modules/parts/config.php'); ?>
    <meta charset="UTF-8">
    <title>Uvod - <?php echo (WEB_NAME); ?></title>
    <?php include('./modules/parts/sections/head.php'); ?>
    
</head>

<body>
    <main>
    <?php
         include('./modules/parts/sections/header.php');
         include('./modules/parts/sections/intro.php');
       // include('./modules/parts/sections/about.php');
       // include('./modules/parts/sections/contact.php');
       // include('./modules/parts/sections/products.php');
       ?>
    </main>
    
    <?php include('./modules/parts/sections/footer.php'); ?>
    
</body>
</html>