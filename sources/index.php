<?php  
	if(!defined('SOURCES')) die("Error");
 
    $slider = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide'));
    $doitac = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('doitac'));
    $kh = $d->rawQuery("select ten$lang, mota$lang, photo,diachi,nghenghiep, noidung$lang from #_news where type = ? and hienthi > 0 order by stt,id desc ",array('feedback'));

    $pronb_list = $d->rawQueryOne("select count(id) as numb from #_product where noibat>0 and hienthi>0 and type='san-pham'");
    $danhmuc_list = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao, id from #_product_list where hienthi>0 and type='san-pham' order by stt,id desc");
    $danhmucnb_list = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao, id from #_product_list where noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc limit 0,3");
    $danhmucnb_list2 = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao, id from #_product_list where noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc limit 3,5");
    $sanpham_nb = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao,photo, id,gia from #_product where noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc");
    $ct_list = $d->rawQueryOne("select count(id) as numb from #_news where noibat>0 and hienthi>0 and type='dich-vu'");

    $gioithieu = $d->rawQueryOne("select ten$lang, mota$lang,photo,photo1 from #_static where type = ?",array('gioi-thieu'));


    $tintuc = $d->rawQuery("select ten$lang, tenkhongdau$lang, mota$lang, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc ",array('tin-tuc'));

    $duan = $d->rawQuery("select ten$lang, tenkhongdau$lang, id, icon,mota$lang from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc ",array('dich-vu'));
   
    $video = $d->rawQuery("select ten$lang, id, video from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc ",array('video'));
 
    /* SEO */
    $seoDB = $seo->getSeoDB(0,'setting','capnhat','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->setSeo('description',$seoDB['description'.$seolang]);
    $seo->setSeo('url',$func->getPageURL());
    $img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'],true) : null;
    if($img_json_bar == null || ($img_json_bar['p'] != $logo['photo']))
    {
        $img_json_bar = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($img_json_bar),'photo',$logo['id']);
    }
    if(count($img_json_bar) > 0)
    {
        $seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->setSeo('photo:width',$img_json_bar['w']);
        $seo->setSeo('photo:height',$img_json_bar['h']);
        $seo->setSeo('photo:type',$img_json_bar['m']);
    }
?>