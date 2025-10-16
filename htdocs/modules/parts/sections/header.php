<header>

    <div class="content-wrap">

        <div class = "header-left">
            <a class="header-logo" href="./">
                <img src="./assets/imgs/logoCat.png" alt="logo-data">
            </a>
    </div>
    
    <div class = "header-middle">
        <ul>
            <?php foreach ($MENU_ITEMS as $item) : ?>
                <li><a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class = "header-right">
        <ul>
            <li class ="highlight">
                <a href="#"><span class= "material-symbols-outlined"> call</span>Kontaktujte ma</a>
