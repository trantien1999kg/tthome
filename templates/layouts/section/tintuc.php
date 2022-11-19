<section class="wrapper-news">

    <div class="container">

        <div class="row d-flex flex-wrap mb60">

            <div class="item col-12">

                <div class="wrapper-title__news wow slideInLeft" data-wow-delay="0.2s">

                    <a href="tin-tuc" rel="dofollow" title="Tin tức">

                        <span>TIN TỨC</span>

                    </a>

                </div>

            </div>

       </div>

        <div class="tintuc-tin mt20">

              <div class="owl-carousel owl-theme owl-carousel-loop quick-slide"

                data-height="575" data-dot="1" data-nav='1'

                data-loop='0' data-play='0' data-lg-items='3' data-md-items='2' data-sm-items='2' data-xs-items="1"

                <?php if($deviceType=="computer"){ ?> data-margin='30' <?php }else{ ?> data-margin='8' <?php }?>>

                <?php 
                    foreach($tintuc as $key => $value){ ?>

                    <div class="pt10 pb10 wow fadeInUp" data-wow-delay="<?= $key*0.2 + 0.2?>s">

                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">

                            <div class="tintuc-tin-sp">
                                
                                    <div class="hoversofa"> 

                                        <span class="d-block hover-left tintuc_thumb thumb-box">

                                            <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="js-loadcover">

                                            <div class="wrappers-news__overflow">

                                                <span class="wrappers-news__overflow-date"><?=date('d/m/Y',$value["ngaytao"])?></span>

                                                <span class="wrappers-news__overflow-view">XEM CHI TIẾT</span>

                                            </div>

                                        </span>

                                    </div>

                                    <div class="wrapper-news__detail">

                                        <h3 class="line-2"><?= $value['ten']?></h3>

                                        <p class="bentrai"><i class="fas fa-calendar-alt me-2"></i> <?= date("d/m/Y",$value['ngaytao'])?></p>

                                        <div class="gioihantintuc">

                                            <p><?= htmlspecialchars_decode($value['mota'])?></p>

                                        </div>

                                    </div>
                            
                            </div>

                        </a>

                    </div>


                <?php } ?>

            </div>

        </div>

    </div>

</section>