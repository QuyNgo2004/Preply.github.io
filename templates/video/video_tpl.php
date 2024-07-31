<div class="title"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></div>
<div class="content-main w-clear">
    <div class="loadkhung_video">
    <?php if(isset($video) && count($video) > 0) { for($i=0;$i<count($video);$i++) { ?>
        <div class="tailvideo_item1">
            <a class="" data-fancybox="video" data-src="<?=$video[$i]['video']?>" title="<?=$video[$i]['ten'.$lang]?>">
                <p class="pic-video"><img onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?=$func->getYoutube($video[$i]['video'])?>/maxresdefault.jpg" alt="<?=$video[$i]['ten'.$lang]?>"/></p>                
            </a>
            <div class="name-video"><a data-fancybox="video" data-src="<?=$video[$i]['video']?>" title="<?=$video[$i]['ten'.$lang]?>"><?=$video[$i]['ten'.$lang]?></a></div>
        </div>
    <?php } }?>
    </div>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>