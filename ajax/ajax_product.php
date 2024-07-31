<?php 
	include "ajax_config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);

	$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
	$idCat = (isset($_GET['idCat']) && $_GET['idCat'] > 0) ? htmlspecialchars($_GET['idCat']) : 0;
	$idItem = (isset($_GET['idItem']) && $_GET['idItem'] > 0) ? htmlspecialchars($_GET['idItem']) : 0;

	//$namelist = $_GET['namelist'];//(isset($_GET['namelist']) && $_GET['namelist'] !='') ? htmlspecialchars($_GET['namelist']) : 0;

	$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "ajax/ajax_product.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";

	/* Math url */
	if($idList)
	{
		$tempLink .= "&idList=".$idList;
		$where .= " and id_list = ".$idList;
	}
	if($idCat)
	{
		$tempLink .= "&idCat=".$idCat;
		$where .= " and id_cat = ".$idCat;
	}
	if($idItem)
	{
		$tempLink .= "&idItem=".$idItem;
		$where .= " and id_item = ".$idItem;
	}
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	/* Get data */
	$sql = "select ten$lang, tenkhongdauvi, id, photo, gia, giamoi, giakm, type, motangan$lang from #_product where type='san-pham' $where and noibat > 0 and hienthi > 0 order by stt,id desc";
	//$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->getCache($sql,'result',7200);

	/* Count all data */
	$countItems = count($cache->getCache($sql,'result',7200));

	/* Get page result */
	//$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);

	$namelist = $d->rawQueryOne("select ten$lang from #_product_cat where type = ? and id = ? and hienthi > 0",array('san-pham',$idCat));
?>
<?php if($countItems) { ?>
	<div class="loadkhung_product mainkhung_product">
		<?php foreach($items as $k=>$v){?>
			<div class="boxproduct_item">
				<div class="boxproduct_mainimg">
					<a class="boxproduct_img" href="<?=$v['tenkhongdauvi']?>"><img onerror="this.src='<?=THUMBS?>/280x280x2/assets/images/noimage.png';" src="<?=WATERMARK?>/product/280x280x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/></a>
					<a class="boxproduct_info" href="<?=$v['tenkhongdauvi']?>">
						<p>
							<span class="boxproduct_namecat"><?=$namelist['ten'.$lang]?></span>
							<span class="boxproduct_mota"><?=$v['motangan'.$lang]?></span>
							<img src="assets/images/icon_plus.png" alt="plus">
						</p>
					</a>
				</div>
				<h3 class="boxproduct_name"><a href="<?=$v['tenkhongdauvi']?>" title="<?=$v['tenvi']?>"><?=$v['ten'.$lang]?></a></h3>
			</div>
		<?php }?>
	</div>
<?php } ?>