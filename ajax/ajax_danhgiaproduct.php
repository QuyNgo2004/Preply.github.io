<?php
include "ajax_config.php";
$d = new PDODb($config['database']);
$dem = (isset($_POST['dem']) && $_POST['dem'] != '') ? htmlspecialchars($_POST['dem']) : '';
$id = (isset($_POST['id']) && $_POST['id'] != '') ? htmlspecialchars($_POST['id']) : '';
$data['rating'] = $dem;
$getRatingWithId = $d->rawQuery("select id,rating,id_product from #_danhgia where id_product = ?", array($id));
$data['id_product'] = $id;
//$data['ngaytao'] = time();

$html = '';
if ($d->insert('danhgia', $data)) {
    $html = '<div class="d-flex align-items-center mb-2">
        <div>
            <img width="50" height="50" src="assets/images/user.png" alt="" srcset="">
        </div>
        <div class="show_rating pl-2 d-flex flex-column">
            <small> Người dùng dịch vụ</small>
            <div>';
    for ($i = 0; $i < $dem['rating']; $i++) {
        $html .=   '<i class="fas fa-star"></i> ';
    }
    $html .=  '</div>
        </div>
    </div>';
} else {
    $html = '';
}
echo $html;
