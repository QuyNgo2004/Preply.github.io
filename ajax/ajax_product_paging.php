<?php 
	include "ajax_config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);

 
	//$namelist = $_GET['namelist'];//(isset($_GET['namelist']) && $_GET['namelist'] !='') ? htmlspecialchars($_GET['namelist']) : 0;

	$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
	$id = (isset($_GET['id']) && $_GET['id']!='') ? htmlspecialchars($_GET['id']) : '';
	$idl = (isset($_GET['idl']) && $_GET['idl']!='') ? (int)$_GET['id'] : 0;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "ajax/ajax_product_paging.php?idl=".$idl."id=".$id.$idl."&&perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";
	if($idl>0){
		$where = " and id_list=".$idl;
	}
	 
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	/* Get data */
	$sql = "select ten$lang, tenkhongdau$lang, photo, id,gia from #_product where type='san-pham' $where and noibat > 0 and hienthi > 0 order by stt,id desc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->getCache($sqlCache,'result',7200);

	/* Count all data */
	$countItems = count($cache->getCache($sql,'result',7200));

	/* Get page result */
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow,$id);
	

	
?>
<?php if($countItems) { ?>
	<div class="loadkhung_product1">
		<?php foreach($items as $k=>$v){?>
			<div class="boxproduct_item">
				<a class="boxproduct_img" href="<?=$v['tenkhongdauvi']?>"><span><img onerror="this.src='<?=THUMBS?>/380x270x2/assets/images/noimage.png';" src="<?=THUMBS?>/380x270x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/></span></a>
				<div class="boxproduct_info">
					<div class="boxproduct_name"><a href="<?=$v['tenkhongdauvi']?>" title="<?=$v['tenvi']?>"><?=$v['ten'.$lang]?></a></div>
					<div class="boxproduct_price">Giá: <span><?=$func->format_money($v['gia'])?></span></div>

				</div>
			</div>
		<?php }?>
	</div>
	<div class="pagination-ajax">
		<div class="pagination">
			<?=$pagingItems?>
		</div>
	</div>
<?php } ?>