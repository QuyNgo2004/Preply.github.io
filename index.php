<?php
    session_start();
    define('LIBRARIES','./libraries/');
    define('SOURCES','./sources/');
    define('WATERMARK','watermark');
    define('LIBRARIES_PREPLY','Preply/libraries/');
    define('SOURCES_PREPLY','Preply/sources/');
    define('PREPLY','Preply/');
    /* Config */
    require_once LIBRARIES."config.php";
    require_once LIBRARIES.'autoload.php';
    require_once LIBRARIES."config-type.php";
    new AutoLoad();
    $injection = new AntiSQLInjection();
    $d = new PDODb($config['database']);
    $seo = new Seo($d);
    $emailer = new Email($d);
    $router = new AltoRouter();
    $cache = new FileCache($d);
    $func = new Functions($d);
    $breadcr = new BreadCrumbs($d);
    $statistic = new Statistic($d, $cache);
    $cart = new Cart($d);
    $detect = new MobileDetect();
    $addons = new AddonsOnline();
    $css = new CssMinify($config['website']['debug-css'], $func);
    $js = new JsMinify($config['website']['debug-js'], $func);
    /* Router */
    require_once LIBRARIES."router.php";
 
    /* Template */
    include "Home.php";
?>