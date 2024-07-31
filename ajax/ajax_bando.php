<?php
	include "ajax_config.php";
	
	$id = (isset($_POST['id']) && $_POST['id'] > 0) ? htmlspecialchars($_POST['id']) : 0;
	$news = $d->rawQueryOne("select bando from #_news where id = ? limit 0,1",array($id));
?>
<div class="bottom-contact"><?=htmlspecialchars_decode($news['bando'])?></div>