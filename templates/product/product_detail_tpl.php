<div class="clearfix">
    <div class="wrap_left_detail">
        <div class="title-left-detail">DANH MỤC SẢN PHẨM</div>
        <div class="catagory-list-detail">
            <?php if ($splistmenu) { ?>
                <ul>
                    <?php foreach ($splistmenu as $c => $cat) { ?>
                        <li><a title="<?= $cat['ten' . $lang] ?>" href="<?= $cat[$sluglang] ?>"><img src="assets/images/img-data/list.png"> <?= $cat['ten' . $lang] ?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>

        </div>
    </div>
    <div class="wrap_right_detail">
        <div class="grid-pro-detail w-clear">
            <div class="left-pro-detail w-clear">
                <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/760x540x2/assets/images/noimage.png';" src="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
                <?php if ($hinhanhsp) {
                    if (count($hinhanhsp) > 0) { ?>
                        <div class="gallery-thumb-pro">
                            <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                            <div class="owl-carousel owl-theme owl-thumb-pro">
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/760x540x2/assets/images/noimage.png';" src="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
                                <?php foreach ($hinhanhsp as $v) { ?>
                                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>">
                                        <img onerror="this.src='<?= THUMBS ?>/760x540x2/assets/images/noimage.png';" src="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>">
                                    </a>
                                <?php } ?>
                            </div>
                            <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
                        </div>
                <?php }
                } ?>
            </div>
            <div class="right-pro-detail w-clear">
                <p class="title-pro-detail"><?= $row_detail['ten' . $lang] ?></p>
                <?php if (isset($config['product'][$type]['danhgia']) && $config['product'][$type]['danhgia'] == true) { ?>
                    <div class="rating_total d-flex align-items-center" data-ratingtotal="<?= $row_detail['ten' . $lang] ?>">Đánh giá trung bình:
                    <div class="img_rating">
                        <div class="color_rating" data-ratingcolor="<?= $totalRating ?>"></div>
                        <div class="gray_rating"></div>
                        <img width="120" src="assets/images/rating_star-removebg-preview.png" alt="" srcset="">
                    </div> (<?= $totalRating ?>)</div>
                <?php } ?>
                <div class="social-plugin social-plugin-pro-detail w-clear">
                    <div class="website_share d-flex align-items-center pr-2">
                        <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= ($optsetting['oaidzalo'] != '') ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize=true>
                            <img width="20" height="20" src="../../assets/images/zalo1.png">
                            <span style="color: #fff; font-size: 11px; font-weight: 500;letter-spacing: 0.5px">Share</span>
                        </div>
                    </div>
                    <div class="sharethis-inline-share-buttons"></div>
                    <?php
                    if (isset($config['product'][$type]['qr']) && $config['product'][$type]['qr'] == true) { ?>
                        <a class="code_qr">Tạo mã QR</a>
                    <?php } ?>
                </div>
                <ul class="attr-pro-detail">
                    <?php
                    if (isset($config['product'][$type]['qr']) && $config['product'][$type]['qr'] == true) { ?>
                        <li class="show_code_qr w-clear">
                            <a class="" data-fancybox="album1" data-src="images<?= $_SERVER['REQUEST_URI'] ?>.png">
                                <img src="images<?= $_SERVER['REQUEST_URI'] ?>.png" alt="" />
                            </a>
                        </li>
                    <?php } ?>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Mã sản phẩm :</label>
                        <div class="attr-content-pro-detail"><?= (isset($row_detail['masp']) && $row_detail['masp'] != '') ? $row_detail['masp'] : 0 ?></div>
                    </li>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Giá bán:</label>
                        <div class="attr-content-pro-detail">
                            <span class="price-new-pro-detail"><?= $func->format_money($row_detail['gia']) ?></span>
                        </div>
                    </li>

                    <li class="w-clear">
                        <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                        <div class="attr-content-pro-detail"><?= $row_detail['luotxem'] ?></div>
                    </li>
                    <?php /*<li class="w-clear"> 
                        <label class="attr-label-pro-detail">Số lượng:</label>
                        <div class="attr-content-pro-detail">
                            <div class="quantity-pro-detail">
                                <button type="button" class="quantity-minus-pro-detail" data-action="minus">-</button>
                                <input type="text"  id="quantity" pattern="[1-9]{10}" value="1">
                                <button type="button" class="quantity-plus-pro-detail" data-action="plus">+</button>
                            </div>
                        </div>
                    </li>
                    <li class="w-clear border-top-0"> 
                        <a data-toggle="modal" class="muangay1 addcart" data-action="addnow" data-id="<?=$row_detail['id']?>" data-name="<?=$row_detail['tenvi']?>" data-gia="<?=$func->format_money($row_detail['gia'])?>" href="#popup-detail"><i class="fal fa-cart-plus"></i> Thêm vào giỏ</a>
                        <a class="muangay2 addcart" data-action="buynow" data-id="<?=$row_detail['id']?>" data-name="<?=$row_detail['tenvi']?>" data-gia="<?=$func->format_money($row_detail['gia'])?>" ><i class="fal fa-shopping-cart"></i> Mua ngay</a>
                    </li>*/ ?>
                </ul>
                <div class="desc-pro-detail">
                    <?= (isset($row_detail['mota' . $lang]) && $row_detail['mota' . $lang] != '') ? htmlspecialchars_decode($row_detail['mota' . $lang]) : '' ?>
                </div>
            </div>
            <div class="clear"></div>

            <div class="tabs-pro-detail">
                <ul class="ul-tabs-pro-detail w-clear">
                    <li class="active transition" data-tabs="info-pro-detail">Thông tin chi tiết</li>
                    <li class="transition" data-tabs="commentfb-pro-detail"><?= binhluan ?></li>
                    <?php if (isset($config['product'][$type]['danhgia']) && $config['product'][$type]['danhgia'] == true) { ?>
                        <li class="transition" data-tabs="rating-pro-detail">Đánh giá</li>
                    <?php } ?>

                </ul>
                <div class="content-tabs-pro-detail info-pro-detail active"><?= (isset($row_detail['noidung' . $lang]) && $row_detail['noidung' . $lang] != '') ? htmlspecialchars_decode($row_detail['noidung' . $lang]) : '' ?></div>
                <div class="content-tabs-pro-detail commentfb-pro-detail">
                    <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
                </div>
                <?php if (isset($config['product'][$type]['danhgia']) && $config['product'][$type]['danhgia'] == true) { ?>
                    <div class="content-tabs-pro-detail rating-pro-detail">
                        <div class="title11">Đánh giá</div>
                        <ul class="d-flex rank_danhgia">
                            <li class="star" data-star="1">1 <i class="fas fa-star"></i></li>
                            <li class="star" data-star="2">2 <i class="fas fa-star"></i></li>
                            <li class="star" data-star="3">3 <i class="fas fa-star"></i></li>
                            <li class="star" data-star="4">4 <i class="fas fa-star"></i></li>
                            <li class="star" data-star="5">5 <i class="fas fa-star"></i></li>
                            <li class="send_danhgia" data-id="<?= $row_detail['id'] ?>">Gửi đánh giá <i class="fas fa-paper-plane"></i></li>
                        </ul>
                        <div class="result_danhgia pt-3">
                            <?php foreach ($getRating  as $key => $value) { ?>
                                <div class="d-flex align-items-center mb-2">
                                    <div>
                                        <img width="50" height="50" src="assets/images/user.png" alt="" srcset="">
                                    </div>
                                    <div class="show_rating pl-2 d-flex flex-column">
                                        <small> Người dùng sản phẩm</small>
                                        <div>
                                            <?php for ($i = 0; $i < $value['rating']; $i++) {  ?>
                                                <i class="fas fa-star"></i>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="title">Sản phẩm cùng loại</div>
<div class="content-main w-clear">
    <?php if (isset($product) && count($product) > 0) { ?>
        <div class="loadkhung_product1 mainkhung_product">
            <?php foreach ($product as $k => $v) { ?>
                <div class="boxproduct_item">
                    <a class="boxproduct_img" href="<?= $v['tenkhongdauvi'] ?>"><span><img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" src="<?= THUMBS ?>/380x270x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></span></a>
                    <div class="boxproduct_info">
                        <div class="boxproduct_name"><a href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['tenvi'] ?>"><?= $v['ten' . $lang] ?></a></div>
                        <div class="boxproduct_price">Giá: <span><?= $func->format_money($v['gia']) ?></span></div>

                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>

</div>