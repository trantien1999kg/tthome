<?php

  require_once 'ajaxConfig.php';

  include_once "class_paging_ajax.php";

  if(isset($_REQUEST["page"]))

    {
      $idcat = "";
      
      $cond = [];

      $idlist = "";
      if($_REQUEST["id_list"]>0){
        $idlist = " and id_list= ?";
        array_push($cond,$_REQUEST["id_list"]);
      }
      if($_REQUEST["id_cat"]>0){
        $idcat = " and id_cat = ? ";
        array_push($cond,$_REQUEST["id_cat"]);
      }
      if($_REQUEST["id_km"]>0){

        $arrKm = $_REQUEST["id_km"];

      }

      $type = $_REQUEST['type'];

      array_push($cond,$type);

      $str_van = "select * from #_baiviet where hienthi=1 ".$idlist." ".$idcat." and type= ? order by stt asc,id desc";
  
      $paging = new paging_ajax();

      $paging->class_pagination = "pagination";

      $paging->class_active = "active";

      $paging->class_inactive = "inactive";

      $paging->class_go_button = "go_button";

      $paging->class_text_total = "total";

      $paging->class_txt_goto = "txt_go_button";

      $paging->cond = $cond;

        $paging->per_page = $_REQUEST['per_page'];   

        $sotrang=$_REQUEST['per_page'];

        $paging->page = $_REQUEST["page"];

      $paging->text_sql = $str_van;

        $result_pag_data = $paging->GetResult();

    }

    

?>
<div class="row4">
<?php if(count($result_pag_data)>0){ ?>

<div class="owl-carousel owl-theme owl-carousel-loop in-ajax col4" data-height="640" data-dot="0" data-nav='1'
                data-loop='0' data-play='1' data-lg-items='6' data-md-items='4' data-sm-items='2' data-xs-items="2"
                data-margin='8'>
<?php

    foreach ($result_pag_data as $key => $value){
      if($value["khuyenmai"]!=""){
        $ex_tags = json_decode($value['khuyenmai'],true);
      }
      $alias_l= $func->getAlias($value['id_list'],'baiviet_list',$value['type']).'/';
      $photos = $db->rawQueryOne("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($value["type"],$value["id"]));
  ?>

   <?php if(in_array($arrKm['id'],$ex_tags)){ ?>

    <?php if($deviceType=="computer"){ ?>

      <div class="wrap-category__index-boxproduct wrap-category__index-boxproduct--modifiers">

          <div class="wrap-category__index-boxproduct-img wrap-category__index-boxproduct-img--modifiers p-relative">

              <a href="<?=$value["type"]?>/<?=$value["tenkhongdau_$lang"]?>" title="<?=$value["ten_$lang"]?>" class="d-block hover-left">

                  <img loading="lazy" src="resize1/162x162/1/<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?>>

              </a>

              <?php if($func->percentPrice($value["giacu"],$value["giaban"])>0){?>
                  
              <div class="home-product__header-sale">

                  <span class="home-product__header-sale-percent"><?=$func->percentPrice($value["giacu"],$value["giaban"])?></span>

                  <span class="home-product__header-sale-status">GIẢM</span>

              </div>

              <?php }?>

              <?php if($value["id_quatang"]!=0){ ?>

              <span class="label-present">

                  <img src="./assets/images/quatang.png" alt="Label trả góp">

              </span>

              <?php }?>

              <?php if($value["tragop"]==1){ ?>

              <span class="label-installment">

                  <img src="./assets/images/tragop.png" alt="Label trả góp">

              </span>

              <?php }?>

          </div>

          <div class="wrap-category__index-boxproduct-content">

              <h5 class="wrap-category__index-boxproduct-content-title line-2">

                  <a href="<?=$value["type"]?>/<?=$value["tenkhongdau_$lang"]?>" class="wrap-category__index-boxproduct-content-link" title="<?=$value["ten_$lang"]?>"><?=$value["ten_$lang"]?></a>

              </h5>

              <span class="wrap-category__index-boxproduct-price"><?=($value["giaban"]!=0) ? $func->changeMoney($value["giaban"],$lang):'Liên hệ';?></span>

              <div class="wrap-category__index-boxproduct-content-bottom d-flex align-item-center">

                  <?php if($value["giacu"]!=0){ ?>

                  <del class="col-8"><?=$func->changeMoney($value["giacu"],$lang);?></del>

                  <?php }?>

                  <span class="col-4 t-right"><i class="fas fa-eye"></i><?=$value["luotxem"]?></span>

              </div>

          </div>

      </div>

    <?php }else{ ?>

      <div class="wrap-category__index-boxproduct wrap-category__index-boxproduct--modifiers">

          <div class="wrap-category__index-boxproduct-img wrap-category__index-boxproduct-img--modifiers p-relative">

              <a href="<?=$value["type"]?>/<?=$value["tenkhongdau_$lang"]?>" title="<?=$value["ten_$lang"]?>" class="d-block hover-left">

                  <img loading="lazy" src="resize1/162x162/1/<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?>>

              </a>

              <?php if($func->percentPrice($value["giacu"],$value["giaban"])>0){?>
                  
              <div class="home-product__header-sale">

                  <span class="home-product__header-sale-percent"><?=$func->percentPrice($value["giacu"],$value["giaban"])?></span>

                  <span class="home-product__header-sale-status">GIẢM</span>

              </div>

              <?php }?>

              <?php if($value["id_quatang"]!=0){ ?>

              <span class="label-present">

                  <img src="./assets/images/quatang.png" alt="Label trả góp">

              </span>

              <?php }?>

              <?php if($value["tragop"]==1){ ?>

              <span class="label-installment">

                  <img src="./assets/images/tragop.png" alt="Label trả góp">

              </span>

              <?php }?>

          </div>

          <div class="wrap-category__index-boxproduct-content">

              <h5 class="wrap-category__index-boxproduct-content-title line-2">

                  <a href="<?=$value["type"]?>/<?=$value["tenkhongdau_$lang"]?>" class="wrap-category__index-boxproduct-content-link" title="<?=$value["ten_$lang"]?>"><?=$value["ten_$lang"]?></a>

              </h5>

              <span class="wrap-category__index-boxproduct-price"><?=($value["giaban"]!=0) ? $func->changeMoney($value["giaban"],$lang):'Liên hệ';?></span>

              <div class="wrap-category__index-boxproduct-content-bottom d-flex align-item-center flex-wrap">

                  <?php if($value["giacu"]!=0){ ?>

                  <del class="col-12"><?=$func->changeMoney($value["giacu"],$lang);?></del>

                  <?php }?>

                  <span class="col-12 t-right"><i class="fas fa-eye"></i><?=$value["luotxem"]?></span>

              </div>

          </div>

      </div>

    <?php }?>



    <?php } ?>
  <?php } ?>

</div>
  
  <?php }else{?>
    <div class="col l-12 c-12 m-12 t-center">
        <p style="font-family:var(--monts-rg),Arial, Helvetica, sans-serif;">Nội dung đang được cập nhật...</p>
    </div>
  <?php }?>
</div>

<script>
  $(document).ready(function(){
var owl = $('.owl-carousel.in-ajax');

	  		owl.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item)				

					},

					600:{

						items:Number(sm_item)				

					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

  });
</script>



