<?php if(count($slider)) { ?>
    <div class="wrap_slider">
    <div >
        <!-- <div class="catagory-list">
            <?php if($splistmenu) { ?>
                <ul>
                    <?php foreach($splistmenu as $c=>$cat) { ?>
                        <li><a title="<?=$cat['ten'.$lang]?>" href="<?=$cat[$sluglang]?>"><img src="assets/images/img-data/list.png"> <?=$cat['ten'.$lang]?></a>
                            <?php
                            /*$spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc",array('san-pham',$cat['id']));
                            if(count($spcatmenu)>0) { ?>
                                 
                                <ul id="cat2_<?=$cat['id']?>">
                                    <?php foreach($spcatmenu as $c1=>$cat1) {?>
                                        <li><a title="<?=$cat1['ten'.$lang]?>" href="<?=$cat1[$sluglang]?>">- <?=$cat1['ten'.$lang]?></a></li>
                                    <?php } ?>
                                </ul>
                            <?php } */?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <div class="frm_timkiem">
                <input type="text" class="input" id="keyword1" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword1');" >
                <button type="submit" value="" class="nut_tim" onclick="onSearch('keyword1');"><i class="far fa-search"></i></button>
            </div>
        </div> -->
        <div class="slideshow">
            <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
            <div id="slider" class="owl-carousel owl-theme owl-slideshow">
                <?php foreach($slider as $v) { ?>
                    <div class="item_slider">
                        <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/910x380x2/assets/images/noimage.png';" src="<?=THUMBS?>/910x380x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/></a>
                        <!-- <?php if($v['ten'.$lang]!=''){?>
                        <div class="slider_info1">
                            <h3 class="slider_info__name1"><?=$v['ten'.$lang]?></h3>
                        </div>
                        <?php }?> -->
                        <?php /*<div class="slider_info">
                            <div class="slider_info--text">
                                <h3 class="slider_info__name"><?=$v['ten'.$lang]?></h3>
                                <p class="slider_info__desc"><?=$v['mota'.$lang]?></p>
                            </div>
                        </div>*/ ?>
                    </div>
                <?php } ?>
            </div>
            <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
        </div>
    </div>
    </div>
<?php } ?>

<?php if(count($slider)) { ?>
    <div class="wrap_slider">
    <div >
        <!-- <div class="catagory-list">
            <?php if($splistmenu) { ?>
                <ul>
                    <?php foreach($splistmenu as $c=>$cat) { ?>
                        <li><a title="<?=$cat['ten'.$lang]?>" href="<?=$cat[$sluglang]?>"><img src="assets/images/img-data/list.png"> <?=$cat['ten'.$lang]?></a>
                            <?php
                            /*$spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc",array('san-pham',$cat['id']));
                            if(count($spcatmenu)>0) { ?>
                                 
                                <ul id="cat2_<?=$cat['id']?>">
                                    <?php foreach($spcatmenu as $c1=>$cat1) {?>
                                        <li><a title="<?=$cat1['ten'.$lang]?>" href="<?=$cat1[$sluglang]?>">- <?=$cat1['ten'.$lang]?></a></li>
                                    <?php } ?>
                                </ul>
                            <?php } */?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <div class="frm_timkiem">
                <input type="text" class="input" id="keyword1" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword1');" >
                <button type="submit" value="" class="nut_tim" onclick="onSearch('keyword1');"><i class="far fa-search"></i></button>
            </div>
        </div> -->
        <div class="slideshow">
            <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
            <div id="slider" class="owl-carousel owl-theme owl-slideshow">
                <?php foreach($slider as $v) { ?>
                    <div class="item_slider">
                        <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/910x380x2/assets/images/noimage.png';" src="<?=THUMBS?>/910x380x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/></a>
                        <!-- <?php if($v['ten'.$lang]!=''){?>
                        <div class="slider_info1">
                            <h3 class="slider_info__name1"><?=$v['ten'.$lang]?></h3>
                        </div>
                        <?php }?> -->
                        <?php /*<div class="slider_info">
                            <div class="slider_info--text">
                                <h3 class="slider_info__name"><?=$v['ten'.$lang]?></h3>
                                <p class="slider_info__desc"><?=$v['mota'.$lang]?></p>
                            </div>
                        </div>*/ ?>
                    </div>
                <?php } ?>
            </div>
            <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
        </div>
    </div>
    </div>
<?php } ?>

