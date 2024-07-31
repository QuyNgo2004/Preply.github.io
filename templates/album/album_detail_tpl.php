<div class="title-main"><span><?=$row_detail['ten'.$lang]?></span></div>
<div class="content-main album-gallery w-clear">	
    <?php if(count($hinhanhsp)>0) { ?>
    	<div class="loadkhung_tailalbum">
    	<?php for($i=0;$i<count($hinhanhsp);$i++) { ?>
        <a class="" rel="album-<?=$row_detail['id']?>" href="<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" title="<?=$row_detail['ten'.$lang]?>">
            <img onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';" src="<?=THUMBS?>/480x360x1/<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"/>
        </a>
    	<?php } ?>
    	</div>
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
</div>