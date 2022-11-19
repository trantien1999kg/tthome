<section class="footer "
    style="background-image: url(<?= _upload_hinhanh_l.$bg_footer['photo']?>) !important; background-size:cover;">
    <!-- cover để cái hình làm backgroung tràn viền-->
    <div class="futto">
        <div class="container">
            <div class="row">
                <div class="footer-left">
                    <ul>
                        <h1>THÔNG TIN LIÊN HỆ</h1><span></span>
                        <li><?= htmlspecialchars_decode($footer['mota'])
                ?></li>

                        <!-- <li><img src="assets/images/iconmail.png" alt="Email" /><b>  Email: </b>toanyamaha19999@gmail.com</li>
                <li><img src="assets/images/iconfooter/iconweb.png"  /><b>  Website: </b>thanhxuanshop.com</li>
                <li><img src="assets/images/iconfooter/iconbrowser.png"/><b>  Địa Chỉ: </b>Ấp 2, Tân Lập, Bắc Tân Uyên, Bình Dương</li> -->
                    </ul>
                </div>
                <div class="footer-center">
                    <ul>
                        <h1>QUY ĐỊNH & CHÍNH SÁCH</h1><span></span>
                        <?php 
                    foreach($chinhsach as $key => $value){?>
                        <li><a href="<?= $value['type']?>/<?= $value['tenkhongdau'] ?>">
                                <img src="assets/images/iconfooter/iconarrow.png" />
                                <?=htmlspecialchars_decode($value['ten'])?>

                            </a>
                        </li>
                        <?php }?>
                        <!-- <li><img src="assets/images/iconfooter/iconarrow.png" />  Chính sách đổi trả</li>
                <li><img src="assets/images/iconfooter/iconarrow.png" />  Chính sách bảo hành</li>
                <li><img src="assets/images/iconfooter/iconarrow.png" />  Chính sách vận chuyển</li>
                <li><img src="assets/images/iconfooter/iconarrow.png" />  Chính sách thanh toán</li> -->
                    </ul>
                </div>
                <div class="footer-right">
                    <h1>KẾT NỐI VỚI CHÚNG TÔI</h1><span></span>
                    <ul style="display: flex;">
                        <?php 
                    foreach($mangxahoi as $key => $value){?>
                        <li><a href="<?=$value['link']?>">
                                <img src="<?=_upload_hinhanh_l.$value['photo']?>" />


                            </a>
                        </li>
                        <?php }?>
                        <!-- <li><img src="assets/images/iconfooter/iconfacebook.png" /></li> -->
                        <!-- <li><img src="assets/images/iconfooter/iconline.png" /></li>
                <li><img src="assets/images/iconfooter/iconzalo.png" /></li>
                <li><img src="assets/images/iconfooter/iconyoutube.png" /></li> -->
                    </ul>
                    <div class="footer-right-textbutton">
                        <form action="" id="form-bookingf" name="form-bookingf" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            <input type="text" placeholder="nhập email của bạn" name="data[email]" validate-email data-validate data-messages="Email không được để trống">
                            <input type="hidden" name="data[type]" value="dat-lich">
                            <button style="background: white; !important">
                            <a href="javascript:void(0)" class="submit_form"
                                onclick="_FRAMEWORK.submitForm('#form-bookingf');">Gửi</a>

                            </a>
                            </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>