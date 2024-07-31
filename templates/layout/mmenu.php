<nav class="menu_mobile">
    <span class="menu_mobile__close"><i class="fal fa-times"></i></span>
    <div class="title-menu-mobile">MENU</div>
    <ul class="menu_mobile__content">
        <li><a href="" title="TRANG CHỦ">TRANG CHỦ</a></li>
        <li><a href="gioi-thieu" title="GIỚI THIỆU">GIỚI THIỆU</a></li>
        <li><a href="san-pham" title="SẢN PHẨM">SẢN PHẨM</a>
            <?php if(count($splistmenu)>0) { ?>
            <span class="nav_open_1" id="active_show_menu1_0" data-id="0"><i class="fal fa-angle-down"></i></span>
            <ul class="menu_con_1 menu_con_1__0" id="menu_con_1__0">
                <?php foreach($splistmenu as $c=>$cat) {
                    $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc",array('san-pham',$cat['id']));
                    ?>
                <li><a title="<?=$cat['ten'.$lang]?>" href="<?=$cat[$sluglang]?>"><?=$cat['ten'.$lang]?></a>
                    <?php if(count($spcatmenu)>0) { ?>
                        <span class="nav_open_2" id="active_show_menu2_<?=$c?>" data-id="<?=$c?>"><i class="fal fa-angle-down"></i></span>
                        <ul class="menu_con_2 menu_con_2__<?=$c?>" id="menu_con_2__<?=$c?>">
                            <?php foreach($spcatmenu as $c1=>$cat1) {?>
                                <li><a title="<?=$cat1['ten'.$lang]?>" href="<?=$cat1[$sluglang]?>"><?=$cat1['ten'.$lang]?></a></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
        <li><a href="dich-vu" title="DỊCH VỤ">DỊCH VỤ</a></li>
        <li><a href="bang-gia" title="BẢNG GIÁ">BẢNG GIÁ</a></li>
        <li><a href="tin-tuc" title="TIN TỨC">TIN TỨC</a></li>
        <li><a href="lien-he" title="LIÊN HỆ">LIÊN HỆ</a></li>
    </ul>
</nav>
<div class="menu_mobile__overlay"></div>

<!--Gọi điện tư vấn-->
<?PHP /*<div class="call">
    <div class="call_hotline">
        <span class="blink_me">
            <a href="tel:<?=str_replace(' ','', $optsetting['hotline'])?>"><i class="fab fa-whatsapp"></i> Gọi điện</a>
        </span>
    </div>
    <div>
        <span><a href="sms:<?=str_replace(' ','', $optsetting['hotline'])?>"><i class="fas fa-sms"></i> SMS</a></span>
    </div>
    <div>
        <span><a href="<?=$optsetting['toado']?>"><i class="fas fa-map-marker-alt"></i> Bản đồ</a></span>
    </div>
</div>*/?>