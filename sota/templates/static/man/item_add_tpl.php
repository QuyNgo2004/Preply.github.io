<?php
$linkSave = "index.php?com=static&act=save&type=".$type;

if(isset($config['static'][$type]['images']) && $config['static'][$type]['images'] == true)
{
    $colLeft = "col-xl-8 left_content align-self-start";
    $colRight = "col-xl-4 right_content align-self-start";
}
else
{
    $colLeft = "col-12";
    $colRight = "d-none";
}

/* Check cols */
if(isset($config['static'][$type]['gallery']) && count($config['static'][$type]['gallery']) > 0){
    foreach($config['static'][$type]['gallery'] as $key => $value){
        if($key == $type){
            $flagGallery = true;
            break;
        }
    }
}
?>
<!-- Content Header -->
<section class="content-header text-sm">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                <li class="breadcrumb-item active">Quản lý trang tĩnh</li>
            </ol>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <form class="validation-form" novalidate method="post" action="<?=$linkSave?>" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
        </div>
        <div class="row">
            <div class="<?=$colLeft?>"><div id="scroll-left">
                <?php if(isset($flagGallery) && $flagGallery == true) { ?>
                    <div class="card card-primary card-outline text-sm">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách chứng nhận <?=$config['static'][$type]['title_main']?></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="filer-gallery" class="label-filer-gallery mb-3">Album hình: (<?=$config['static'][$type]['gallery'][$key]['img_type_photo']?>)</label>
                                <input type="file" name="files[]" id="filer-gallery" multiple="multiple">
                                <input type="hidden" class="col-filer" value="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                <input type="hidden" class="act-filer" value="man">
                                <input type="hidden" class="folder-filer" value="static">
                            </div>
                            <?php if(isset($gallery) && count($gallery) > 0) { ?>
                                <div class="form-group form-group-gallery">
                                    <label class="label-filer">Album hiện tại:</label>
                                    <div class="action-filer mb-3">
                                        <a class="btn btn-sm bg-gradient-primary text-white check-all-filer mr-1"><i class="far fa-square mr-2"></i>Chọn tất cả</a>
                                        <button type="button" class="btn btn-sm bg-gradient-success text-white sort-filer mr-1"><i class="fas fa-random mr-2"></i>Sắp xếp</button>
                                        <a class="btn btn-sm bg-gradient-danger text-white delete-all-filer"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                                    </div>
                                    <div class="alert my-alert alert-sort-filer alert-info text-sm text-white bg-gradient-info"><i class="fas fa-info-circle mr-2"></i>Có thể chọn nhiều hình để di chuyển</div>
                                    <div class="jFiler-items my-jFiler-items jFiler-row">
                                        <ul class="jFiler-items-list jFiler-items-grid row scroll-bar" id="jFilerSortable">
                                            <?php foreach($gallery as $v) echo $func->galleryFiler($v['stt'],$v['id'],$v['photo'],$v['tenvi'],'static','col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6'); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Nội dung <?=$config['static'][$type]['title_main']?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(isset($config['static'][$type]['file']) && $config['static'][$type]['file'] == true) { ?>
                            <div class="form-group">
                                <label class="change-file mb-1 mr-2" for="file-taptin">
                                    <p>Upload tập tin:</p>
                                    <strong class="ml-2">
                                        <span class="btn btn-sm bg-gradient-success"><i class="fas fa-file-upload mr-2"></i>Chọn tập tin</span>
                                        <div><b class="text-sm text-split"></b></div>
                                    </strong>
                                </label>
                                <strong class="d-block mt-2 mb-2 text-sm"><?php echo $config['static'][$type]['file_type']; ?></strong>
                                <div class="custom-file my-custom-file d-none">
                                    <input type="file" class="custom-file-input" name="file-taptin" id="file-taptin">
                                    <label class="custom-file-label" for="file-taptin">Chọn file</label>
                                </div>
                                <?php if(isset($item['taptin']) && $item['taptin'] != '') { ?>
                                    <a class="btn btn-sm bg-gradient-primary text-white d-inline-block align-middle p-2 rounded mb-1" href="<?=UPLOAD_FILE.@$item['taptin']?>" title="Download tập tin hiện tại"><i class="fas fa-download mr-2"></i>Download tập tin hiện tại</a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="hienthi" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                            <div class="custom-control custom-checkbox d-inline-block align-middle">
                                <input type="checkbox" class="custom-control-input hienthi-checkbox" name="data[hienthi]" id="hienthi-checkbox" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked':''?>>
                                <label for="hienthi-checkbox" class="custom-control-label"></label>
                            </div>
                        </div>
                        <?php if(
                            (isset($config['static'][$type]['tieude']) && $config['static'][$type]['tieude'] == true) || 
                            (isset($config['static'][$type]['mota']) && $config['static'][$type]['mota'] == true) || 
                            (isset($config['static'][$type]['noidung']) && $config['static'][$type]['noidung'] == true)
                        ) { ?>
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                        <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?=($k=='vi')?'active':''?>" id="tabs-lang" data-toggle="pill" href="#tabs-lang-<?=$k?>" role="tab" aria-controls="tabs-lang-<?=$k?>" aria-selected="true"><?=$v?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="card-body card-article">
                                    <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                        <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                            <div class="tab-pane fade show <?=($k=='vi')?'active':''?>" id="tabs-lang-<?=$k?>" role="tabpanel" aria-labelledby="tabs-lang">
                                                <?php if(isset($config['static'][$type]['tieude']) && $config['static'][$type]['tieude'] == true) { ?>
                                                    <div class="form-group">
                                                        <label for="ten<?=$k?>">Tiêu đề (<?=$k?>):</label>
                                                        <input type="text" class="form-control for-seo" name="data[ten<?=$k?>]" id="ten<?=$k?>" placeholder="Tiêu đề (<?=$k?>)" value="<?=@$item['ten'.$k]?>" <?=($k=='vi')?'required':''?>>
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['static'][$type]['mota']) && $config['static'][$type]['mota'] == true) { ?>
                                                    <div class="form-group">
                                                        <label for="mota<?=$k?>">Mô tả (<?=$k?>):</label>
                                                        <textarea class="form-control for-seo <?=(isset($config['static'][$type]['mota_cke']) && $config['static'][$type]['mota_cke'] == true)?'form-control-ckeditor':''?>" name="data[mota<?=$k?>]" id="mota<?=$k?>" rows="5" placeholder="Mô tả (<?=$k?>)"><?=htmlspecialchars_decode(@$item['mota'.$k])?></textarea>
                                                    </div>
                                                <?php } ?>
                                                <?php if(isset($config['static'][$type]['noidung']) && $config['static'][$type]['noidung'] == true) { ?>
                                                    <div class="form-group">
                                                        <label for="noidung<?=$k?>">Nội dung (<?=$k?>):</label>
                                                        <textarea class="form-control for-seo <?=(isset($config['static'][$type]['noidung_cke']) && $config['static'][$type]['noidung_cke'] == true)?'form-control-ckeditor':''?>" name="data[noidung<?=$k?>]" id="noidung<?=$k?>" rows="5" placeholder="Nội dung (<?=$k?>)"><?=htmlspecialchars_decode(@$item['noidung'.$k])?></textarea>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="<?=$colRight?>"><div id="scroll-right">
            <?php if(isset($config['static'][$type]['images']) && $config['static'][$type]['images'] == true) { ?>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Hình ảnh <?=$config['static'][$type]['title_main']?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        $photoDetail = UPLOAD_NEWS.@$item['photo'];
                        $dimension = "Width: ".$config['static'][$type]['width']." px - Height: ".$config['static'][$type]['height']." px (".$config['static'][$type]['img_type'].")";
                        include TEMPLATE.LAYOUT."image.php";
                        ?>
                    </div>
                </div>
            <?php } ?>
            <?php if(isset($config['static'][$type]['images2']) && $config['static'][$type]['images2'] == true) { ?>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Hình ảnh <?=$config['static'][$type]['title_main']?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        $photoDetail = UPLOAD_NEWS.@$item['photo1'];
                        $dimension = "Width: ".$config['static'][$type]['width1']." px - Height: ".$config['static'][$type]['height1']." px (".$config['static'][$type]['img_type'].")";
                        include TEMPLATE.LAYOUT."image1.php";
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php if(isset($config['static'][$type]['seo']) && $config['static'][$type]['seo'] == true) { ?>
    <div class="card card-primary card-outline text-sm">
        <div class="card-header">
            <h3 class="card-title">Nội dung SEO</h3>
            <a class="btn btn-sm bg-gradient-success d-inline-block text-white float-right create-seo" title="Tạo SEO">Tạo SEO</a>
        </div>
        <div class="card-body">
            <?php
            $seoDB = $seo->getSeoDB(0,$com,'capnhat',$type);
            include TEMPLATE.LAYOUT."seo.php";
            ?>
        </div>
    </div>
<?php } ?>
<div class="card-footer text-sm bottom_height">
    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
</div>
</form>
</section>