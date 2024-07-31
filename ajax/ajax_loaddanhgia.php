<?php
include "ajax_config.php";
$id = (isset($_POST['id']) && $_POST['id'] != '') ? htmlspecialchars($_POST['id']) : '';
$getRating = $d->rawQuery("select id,rating,id_product from #_danhgia where id_product = ? order by id asc", array($id));

$sumRating = array();
foreach ($getRating as $key => $value) {
    array_push($sumRating, $value['rating']);
}
$totalRating = number_format(array_sum($sumRating) / count($getRating), 1, '.', '');

echo $totalRating ;