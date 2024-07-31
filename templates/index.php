<!DOCTYPE html>
<html lang="<?= $config['website']['lang-doc'] ?>">

<head>
    <?php include TEMPLATE . LAYOUT . "head.php"; ?>
    <?php include TEMPLATE . LAYOUT . "css.php"; ?>
</head>

<body>

    <div id="wrapper">
        <!-- <div id="preloader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div> -->
        <div class="content1">
        <?php
        include TEMPLATE . LAYOUT . "seo.php";
        include TEMPLATE . LAYOUT . "menu.php";
        include TEMPLATE . LAYOUT . "slide.php";
        if ($source != 'index') include TEMPLATE . LAYOUT . "breadcrumb.php";
        ?>
        <div class="<?= ($source == 'index') ? 'wrap-home wrap-low' : 'wrap-main' ?> w-clear"><?php include TEMPLATE . $template . "_tpl.php"; ?></div>
        <?php
        include TEMPLATE . LAYOUT . "footer.php";
        //include TEMPLATE.LAYOUT."mmenu.php";
        include TEMPLATE . LAYOUT . "phone3.php";
        include TEMPLATE . LAYOUT . "modal.php";
        include TEMPLATE . LAYOUT . "js.php";
        // if($deviceType=='mobile') include TEMPLATE.LAYOUT."phone.php";
        ?>
        </div>
    </div>

</body>

</html>