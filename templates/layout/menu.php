<div id="menu_topp">
    <div class="header-cachtop">
        <div class="header-top">
            <div class="fixwidth d-flex justify-content-between align-self-center flex-wrap">
                <div class="menu_mobi align-self-center">
                    <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                    <a href="" class="home_mobi">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="header_left_mobile align-self-center">
                    <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x200x1/assets/images/noimage.png';" src="<?= THUMBS ?>/0x200x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
                </div>
                <div class="menu_mobi_add">
                    <div class="frm_timkiem">
                        <input type="text" class="input" id="keyword" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword');">
                        <button type="submit" class="nut_tim" onclick="onSearch('keyword');"><i class="far fa-search"></i></button>
                    </div>
                </div>

                <div class="diachi-top"><?= $optsetting['diachi'] ?></div>
                <div>
                    <?php foreach ($social1 as $v) { ?>
                        <a href="<?= $v['link'] ?>" class="ftmxh" target="_blank" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/30x30x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" /></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="fixwidth d-flex justify-content-between flex-wrap align-items-center">
                <div class="header_left align-self-center">
                    <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x200x1/assets/images/noimage.png';" src="<?= THUMBS ?>/0x200x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
                </div>
                <div class="boxmenu_middle align-self-center ">
                    <img class="banner" onerror="this.src='<?= THUMBS ?>/0x200x1/assets/images/noimage.png';" src="<?= THUMBS ?>/0x200x1/<?= UPLOAD_PHOTO_L . $baner['photo'] ?>" />
                </div>

                <div class="all_totle">
                    <div>
                        <div class="all_phone d-flex">
                            <div class="img_phone">
                                <img style="margin-top: 10px;" src="assets/images/  " alt="">
                            </div>
                            <div class="phone d-flex flex-column">
                                <strong><?= $optsetting['hotline'] ?></strong>
                                <strong><?= $optsetting['dienthoai'] ?></strong>
                            </div>
                        </div>
                    </div>
                    <div class="frm_timkiem">
                        <input type="text" class="input" id="keyword2" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword2');">
                        <button type="submit" class="nut_tim" onclick="onSearch('keyword2');"><i class="far fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-height">
        <div id="menu_top">
            <div class="fixwidth clearfix">
                <div class="menu">
                    <ul class="menu_cap_cha d-flex">
                        <li class="menulicha <?= $source == 'index' ? 'trangchu active' : '' ?>"><a href="" title="TRANG CHỦ">TRANG CHỦ</a></li>
                        <li class="menulicha <?= $com == 'gioi-thieu' ? 'trangchu active' : '' ?>"><a href="gioi-thieu" title="GIỚI THIỆU">GIỚI THIỆU</a></li>

                        <li class="menulicha <?= $com == 'san-pham' ? 'trangchu active' : '' ?>"><a href="san-pham" title="SẢN PHẨM">SẢN PHẨM</a>
                            <?php if ($splistmenu) { ?>
                                <ul class="menu_cap_con">
                                    <?php foreach ($splistmenu as $c => $cat) { ?>
                                        <li><a title="<?= $cat['ten' . $lang] ?>" href="<?= $cat[$sluglang] ?>"><?= $cat['ten' . $lang] ?></a>
                                            <?php
                                            $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat['id']));
                                            if (count($spcatmenu) > 0) { ?>
                                                <ul class="menu_cap_2">
                                                    <?php foreach ($spcatmenu as $c1 => $cat1) {
                                                        $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_item where type = ? and id_cat = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat1['id']));
                                                    ?>
                                                        <li><a title="<?= $cat1['ten' . $lang] ?>" href="<?= $cat1[$sluglang] ?>"><?= $cat1['ten' . $lang] ?></a>
                                                            <?php if (count($spitemmenu) > 0) { ?>
                                                                <ul class="menu_cap_3">
                                                                    <?php foreach ($spitemmenu as $c1 => $cat2) { ?>
                                                                        <li><a title="<?= $cat2['ten' . $lang] ?>" href="<?= $cat2[$sluglang] ?>"><?= $cat2['ten' . $lang] ?></a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>

                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>

                        <li class="menulicha <?= $com == 'khuyen-mai' ? 'trangchu active' : '' ?>"><a href="khuyen-mai" title="KHUYẾN MÃI">KHUYẾN MÃI</a></li>
                        <li class="menulicha <?= $com == 'dich-vu' ? 'trangchu active' : '' ?>"><a href="dich-vu" title="DỊCH VỤ">DỊCH VỤ</a>

                        </li>
                        <li class="menulicha <?= $com == 'bang-gia' ? 'trangchu active' : '' ?>"><a href="bang-gia" title="BẢNG GIÁ">BẢNG GIÁ</a>

                        </li>
                        <li class="menulicha <?= $com == 'tin-tuc' ? 'trangchu active' : '' ?>"><a href="tin-tuc" title="TIN TỨC">TIN TỨC</a>

                        </li>
                        <li class="menulicha <?= $com == 'lien-he' ? 'trangchu active' : '' ?>"><a href="lien-he" title="LIÊN HỆ">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>