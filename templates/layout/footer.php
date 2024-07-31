<!-- <div class="boxfooter_container " id="background-footer">
    <div class="fixwidth row">
        <div class="col-md-5">
            <div class="name_top_footer">
                <?= htmlspecialchars_decode($footer['noidung' . $lang]) ?>
            </div>
            <div class="diachi_footer">
                <img style="width: 5%;" src="/assets/images/chiduong.png" alt="">
                <span><?= $optsetting['diachi'] ?></span>
            </div>
            <div class="diachi_footer">
                <img style="width: 5%;" src="/assets/images/goidien.png" alt="">
                <span><?= $optsetting['hotline'] ?></span>
            </div>
            <div class="diachi_footer">
                <i class="fa-solid fa-envelope" style="font-family: 'Font Awesome 5 Pro';margin-right: 10px;"></i>
                <span><?= $optsetting['email'] ?></span>
            </div>
            <div class="diachi_footer">
                Website:
                <span><?= $optsetting['website'] ?></span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="logo_footer" style="text-align: center;">
                <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';"
                        src="<?= THUMBS ?>/0x100x2/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
            </div>
            <div class="boxmenu_middle align-self-center " style="width: 100%;margin-top: 17%;">
                <img class="banner" onerror="this.src='<?= THUMBS ?>/0x70x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x70x2/<?= UPLOAD_PHOTO_L . $baner['photo'] ?>"/>
            </div>
        </div>
        <div class="col-md-3">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=<?= $optsetting['fanpage'] ?>&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</div>
<div class="boxfooter_bottom ">
    <div class="fixwidth d-flex justify-content-between flex-wrap">
        <?= $optsetting['copyright'] ?>
        <div>Online: <?= $online ?> | Hôm nay: <?= $counter['today'] ?> | Tổng: <?= $counter['total'] ?></div>
    </div>
</div> -->


<div class="boxfooter_container " id="background-khachhang">
    <div class="fixwidth">
        <div class="row">
            <div class="col-md-8">
                <div class="footer_name"><?= $footer['ten' . $lang] ?></div>
                <div class="des_footer">
                <?= htmlspecialchars_decode($footer['noidung' . $lang]) ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_cs">
                    <div class="tit_ft">Chính sách hỗ trợ</div>
                    <p>
                        <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Đổi
                            Trả Hàng</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Đối Tác Công Trình Tiêu Biểu</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Tuyển
                            Dụng</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Chính Sách Bảo Mật</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Miễn Phí Vận Chuyển</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="boxfooter_bottom"><?= $optsetting['copyright'] ?>. All rights reserved. Design by sotagroup.vn  </div>
</div>