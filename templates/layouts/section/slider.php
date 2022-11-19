<section class="section__slider">
    <div class="container m-container">
        <div class="box__slider owl-carousel owl-theme" id="owl__slider">
            <?php for($i=0;$i<count($slider);$i++){ ?>
            <div class="item__slider">
                <a href="<?=$slider[$i]['link']?>" title="<?=$slider[$i]['ten']?>">
                    <img src="<?=_upload_hinhanh_l.$slider[$i]['photo']?>"
                        alt="<?=$slider[$i]['ten']?>" />
                </a>
            </div>
            <?php } ?>
        </div>    
    </div>
</section>