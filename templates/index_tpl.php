
<?php include _sections."gioithieuhomedecor.php"; ?>
<?php include _sections."thietkethicong.php"; ?>
<?php include _sections."sanpham.php"; ?>
<section class="wrappers-unit" style="background-image:url(<?= _upload_hinhanh_l.$bgtieuchi['photo']?>);">
    
    <div class="container">

        <div class="tthomedecor-top">

            <div class="title wow fadeInLeft" data-type="about">

                <h2>TT HOME DECOR</h2>

            </div>
            <div class="wow slideInright" data-wow-delay="0.3s">
                <img src="assets/images/homedecor/thanhborder.png" alt="">
            </div>
            

            <p class="wow fadeInUp" >Đơn vị thiết kế - thi công nội thất hàng đầu Lâm Đồng</p>

        </div>

        <div class="box-sumenh">
            <div class="grid-12 gap20 gap10-sm">
            <?php foreach($sumenh as $key => $value){?>
                <div class="span4 span12-sm">
                    <div class="sumenh wow fadeInUp" data-wow-delay="<?= $key*0.2?>s">
                        <div class="sumenh_thumb">
                            <img src="<?=_upload_baiviet_l.$value['photo']?>" alt="">
                        </div>
                        <div class="sumenh_content">
                            <?=$value['ten']?>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</section>
<?php include _sections."video.php"; ?>
<?php include _sections."tintuc.php"; ?>
<?php include _sections."feedback.php"; ?>