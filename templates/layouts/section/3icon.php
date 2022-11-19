

<section class="vc_hl_tt">
    <div class="color-top"></div>
  
    <div class="color-bottom">
        <div class="container">
            <div class="up-top">
                <div class="owl-carousel owl-theme" id="owl-icon">
                <!-- <?php 
                    foreach($icon as $key => $value){?> -->
                        
                        <div class="vanchuyen">
                            <img class="rotate" src="<?= _upload_baiviet_l.$value['photo']?>" />
                            <h3><?= $value['ten_vi']?></h3>
                          <p><?= htmlspecialchars_decode($value['noidung_vi'])?></p>
                        </div>
                        
                    <!-- <?php }
                ?> -->
                </div>
            </div>
        </div>
    
    </div>
</section>