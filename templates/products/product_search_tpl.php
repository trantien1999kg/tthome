<?php $link_href = $com.'/'.$act; ?>

<section class="product-pages">

    <div class="grid wide">

        <div class="row4">
            
            <div class="col4 l-12 m-12 c-12 mt20-m">

                <div class="row">
                
                    <div class="col l-12 m-12 c-12 mb20">

                        <div class="row0 <?php if($deviceType=="tablet"){echo "row";}?> bg-white"  style="border-radius:0.5rem;padding-bottom:10px">

                            <div class="col l-12 m-12 c-12 border-gray mb20 col-m-10" style="background:var(--html-bg-website)">

                                <div class="wrap-categoryhot-title wrap-categoryhot-title--tpl">

                                    <h1 class="mg0">
                                        <span> 
                                            <?php if($seo->getSeo('h1') != ""){?>
                                                <?=$seo->getSeo('h1')?>
                                            <?php }else{ echo $title_seo;}?>
                                        </span>
                                    </h1>


                                </div>

                            </div>

                            <?php if(count($tintuc)>0){ ?>
                            
                            <?php if($deviceType=="computer"){ ?>

                            <div class="view-products col">

                                <div class="row4" id="show-product">

                                <?php foreach($tintuc as $key => $val){ ?>

                                    <div class="col4 l-2-4 m-3 c-6 mb8">
                                    
                                        <div class="wrap-category__index-boxproduct wrap-category__index-boxproduct--modifiers">

                                            <div class="wrap-category__index-boxproduct-img wrap-category__index-boxproduct-img--modifiers p-relative">

                                                <a href="<?=$val["type"]?>/<?=$val["tenkhongdau_$lang"]?>" title="<?=$val["ten_$lang"]?>" class="d-block hover-left">

                                                    <img loading="lazy" src="resize1/222x222/2/<?=_upload_baiviet_l.$val["photo"]?>" alt="<?=$val["ten_$lang"]?>" <?=$func->errorImg()?>>

                                                </a>

                                                <?php if($func->percentPrice($val["giacu"],$val["giaban"])>0){?>
                                                    
                                                <div class="home-product__header-sale">

                                                    <span class="home-product__header-sale-percent"><?=$func->percentPrice($val["giacu"],$val["giaban"])?></span>

                                                    <span class="home-product__header-sale-status">GIẢM</span>

                                                </div>

                                                <?php }?>

                                            </div>

                                            <div class="wrap-category__index-boxproduct-content">

                                                <?php if($idl!='' && $idc == ''){ ?>

                                                <h4 class="wrap-category__index-boxproduct-content-title line-2">

                                                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" class="wrap-category__index-boxproduct-content-link" title="<?=$val["ten_$lang"]?>"><?=$val["ten_$lang"]?></a>

                                                </h4>

                                                
                                                <?php }else if($idc != '') {?>

                                                <h3 class="wrap-category__index-boxproduct-content-title line-2">

                                                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" class="wrap-category__index-boxproduct-content-link" title="<?=$val["ten_$lang"]?>"><?=$val["ten_$lang"]?></a>

                                                </h3>

                                                <?php }else if($idl=='' && $idc ==''){ ?>

                                                <h5 class="wrap-category__index-boxproduct-content-title line-2">

                                                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" class="wrap-category__index-boxproduct-content-link" title="<?=$val["ten_$lang"]?>"><?=$val["ten_$lang"]?></a>

                                                </h5>

                                                <?php }?>

                                                <div class="wrap-category__index-boxproduct-content-bottom d-flex align-item-center">

                                                    <span class="col-6 wrap-category__index-boxproduct-price"><?=($val["giaban"]!=0) ? $func->changeMoney($val["giaban"],$lang):'Liên hệ';?></span>

                                                    <?php if($val["giacu"]!=0){ ?>

                                                    <del class="col-6"><?=$func->changeMoney($val["giacu"],$lang);?></del>

                                                    <?php }?>


                                                </div>

                                                </div>

                                            </div>

                                    </div>

                                <?php }?>


                                </div>

                            </div>

                            <?php }else{ ?>

                            <div class="view-products col-12">

                                <div class="row" id="show-product" style="padding:0 10px;">

                                <?php foreach($tintuc as $key=>$val){ ?>

                                    <div class="col4 l-3 m-3 c-6 mb8">
                                    
                                        <div class="wrap-category__index-boxproduct wrap-category__index-boxproduct--modifiers">

                                            <div class="wrap-category__index-boxproduct-img wrap-category__index-boxproduct-img--modifiers p-relative">

                                                <a href="<?=$val["type"]?>/<?=$val["tenkhongdau_$lang"]?>" title="<?=$val["ten_$lang"]?>" class="d-block hover-left">

                                                    <img loading="lazy" src="resize1/222x222/2/<?=_upload_baiviet_l.$val["photo"]?>" alt="<?=$val["ten_$lang"]?>" <?=$func->errorImg()?>>

                                                </a>

                                                <?php if($func->percentPrice($val["giacu"],$val["giaban"])>0){?>
                                                    
                                                <div class="home-product__header-sale">

                                                    <span class="home-product__header-sale-percent"><?=$func->percentPrice($val["giacu"],$val["giaban"])?></span>

                                                    <span class="home-product__header-sale-status">GIẢM</span>

                                                </div>

                                                <?php }?>

                                                <?php if($val["id_quatang"]!=0){ ?>

                                                <span class="label-present">

                                                    <img src="./assets/images/quatang.png" alt="Label trả góp">

                                                </span>

                                                <?php }?>

                                                <?php if($val["tragop"]==1){ ?>

                                                <span class="label-installment">

                                                    <img src="./assets/images/tragop.png" alt="Label trả góp">

                                                </span>

                                                <?php }?>

                                            </div>

                                            <div class="wrap-category__index-boxproduct-content">

                                                <?php if($idl!='' && $idc == ''){ ?>

                                                <h4 class="wrap-category__index-boxproduct-content-title line-2">

                                                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" class="wrap-category__index-boxproduct-content-link" title="<?=$val["ten_$lang"]?>"><?=$val["ten_$lang"]?></a>

                                                </h4>

                                                
                                                <?php }else if($idc != '') {?>

                                                <h3 class="wrap-category__index-boxproduct-content-title line-2">

                                                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" class="wrap-category__index-boxproduct-content-link" title="<?=$val["ten_$lang"]?>"><?=$val["ten_$lang"]?></a>

                                                </h3>

                                                <?php }else if($idl=='' && $idc ==''){ ?>

                                                <h5 class="wrap-category__index-boxproduct-content-title line-2">

                                                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" class="wrap-category__index-boxproduct-content-link" title="<?=$val["ten_$lang"]?>"><?=$val["ten_$lang"]?></a>

                                                </h5>

                                                <?php }?>

                                                <div class="wrap-category__index-boxproduct-content-bottom d-flex align-item-center flex-wrap">

                                                    <span class="col-12 wrap-category__index-boxproduct-price"><?=($val["giaban"]!=0) ? $func->changeMoney($val["giaban"],$lang):'Liên hệ';?></span>

                                                    <?php if($val["giacu"]!=0){ ?>

                                                    <del class="col-12 mt5"><?=$func->changeMoney($val["giacu"],$lang);?></del>

                                                    <?php }?>


                                                </div>

                                                <div class="progress-wrapper p-relative mt10 mb10">

                                                <?php $widthProgress = $func->getProgressBar($val["soluongban"],$val["luotxem"]); ?>

                                                <div class="progress<?=$key?>" style="width:<?=$widthProgress?>%;height: 15px;background-color: var(--html-cl-website);transition: width 0.3s cubic-bezier(0,.96,0,.96);text-align: center;"></div>

                                                <span class="progress-wrapper-sold">Đã bán <?=$val["luotxem"]?></span>

                                                </div>
                                            
                                            </div>

                                           

                                        </div>

                                    </div>

                                <?php }?>


                                </div>

                            </div>

                            <?php }?>

                            <?php }else{ ?>

                            <div class="col l-12 m-12 c-12 t-center">

                                <p>Nội dung đang được cập nhật...</p>

                            </div>

                            <?php }?>

                            <?php if(!$func->isAjax()){?>

                                <div class="col l-12 c-12 c-12 mt20 mb20">



                                    <div id="pagingPage"><?=$paging?></div>



                                </div>

                            <?php }else{ ?>

                                <div class="col l-12 c-12 c-12 mt20 mb20">



                                    <div id="pagingPage"><?=$paging?></div>



                                </div>

                            <?php }?>

                        </div>

                    </div>


                </div>

            </div>

        </div>

        
        <?php if($deviceType=="computer"){ ?>

        <div class="row4 bg-white mb20" style="border-radius:0.5rem">

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt20">
                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>
                </div>

                <?php }?>

                <?php if($seo->getSeo('content')){ ?>

               <div class="p-relative">

                    <div class="wrapper-toc mt20">

                        <div class="content ul-list-detail">
                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                        </div>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

        <?php }else{?>

        <div class="row bg-white mb20" style="border-radius:0.5rem">

            <div class="col l-12 m-12 c-12 col-m-10">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt20">
                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>
                </div>

                <?php }?>

                <?php if($seo->getSeo('content')){ ?>

               <div class="p-relative">

                    <div class="wrapper-toc mt20">

                        <div class="content ul-list-detail">
                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                        </div>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

        <?php }?>

         <input type="hidden" name="alias" value="<?=$https_config.$link_href?>">

		<input type="hidden" name="href" value="<?=base64_encode($https_config.$link_href)?>">

    </div>

</section>