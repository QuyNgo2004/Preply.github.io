<div class="title"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></div>
<div class="content-main w-clear">
    <?php if(isset($product) && count($product) > 0){?>
    <div class="loadkhung_product1 mainkhung_product">
        <?php foreach($product as $k=>$v){?>
            <div class="boxproduct_item">
                <a class="boxproduct_img" href="<?=$v['tenkhongdauvi']?>"><span><img onerror="this.src='<?=THUMBS?>/380x270x2/assets/images/noimage.png';" src="<?=THUMBS?>/380x270x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/></span></a>
                <div class="boxproduct_info">
                    <div class="boxproduct_name"><a href="<?=$v['tenkhongdauvi']?>" title="<?=$v['tenvi']?>"><?=$v['ten'.$lang]?></a></div>
                    <div class="boxproduct_price">Giá: <span><?=$func->format_money($v['gia'])?></span></div>

                </div>
            </div>
        <?php } ?>
    </div>
    <?php }else{?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php }?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>
<?php if($noidung_page!=''){?>
<div class="noidung_page_product">
    <div class="meta-toc">
        <div class="box-readmore">
            <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
        </div>
    </div>
    <div id="toc-content"><?=htmlspecialchars_decode($noidung_page)?></div>
</div>
<?php }?>