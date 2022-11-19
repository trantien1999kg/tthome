<?php 

	#=================check per===============

	$GLOBAL_LANG=false;

	$GLOBAL_PERMISSION=false;

	#=================check user===============

	$GLOBAL_USER=true;

	$GLOBAL_USER_ADMIN=true;

	$GLOBAL_USER_CLIENT=true;

	#================check member================

	$MEMBER=false;

	$CONTACT=true;

	$NEWSLETTER=false;

	$FLASHSALE = true;

	$BOOKING=true;

	$ORDER=true;

	// =======================seo page======================
	$setting['seopage']['page']=array(
		'gioi-thieu'=>"Giới thiệu",
		'san-pham'=>'Sản phẩm',
		'tin-tuc'=>'Tin tức',
		'dich-vu'=>'Dịch vụ',
		'lien-he'=>'Liên hệ',
	);
	$setting['seopage']['mota'] = true;
	$setting['seopage']['mota-ckeditor'] = true;
	$setting['seopage']['noidung'] = true;
	$setting['seopage']['noidung-ckeditor'] = true;
	$setting['seopage']['img-width'] = 300;
	$setting['seopage']['img-height'] = 200;
	$setting['seopage']['img-ratio'] = 1;
	$setting['seopage']['img-b'] = 200;
	$setting['seopage']['thumb'] = '300x200x1';
	$setting['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
	$viewArray=array('htgh','pttt');

	// #========================Sản phẩm==================== 

	$nametype='san-pham';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Sản phẩm';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['tragop'] = false;

	$GLOBAL['baiviet'][$nametype]['quatang'] = false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['imgphu'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 255;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 255;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 2;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['tags'] = false;

	$GLOBAL['baiviet'][$nametype]['khuyenmai'] = false;

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

	$GLOBAL['baiviet'][$nametype]['text-search'] = true;

	$GLOBAL['baiviet'][$nametype]['masp'] = false;

	$GLOBAL['baiviet'][$nametype]['dungtich'] = false;

	$GLOBAL['baiviet'][$nametype]['trangthai'] = false;

	$GLOBAL['baiviet'][$nametype]['color'] = false;

	$GLOBAL['baiviet'][$nametype]['size'] = false;

	$GLOBAL['baiviet'][$nametype]['gia'] = true;

	$GLOBAL['baiviet'][$nametype]['giacu'] = false;

	$GLOBAL['baiviet'][$nametype]['size-product'] = false;

	$GLOBAL['baiviet'][$nametype]['brand'] = false;

	$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

	$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// DM1
	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=> "Mục lục",

			"noibat"=>"Nổi bật",

			"hienthi"=>"Hiển thị",

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	// DANH MUC 2

	$GLOBAL['baiviet'][$nametype]['cat'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

		$GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat']=array(

			"mucluc"=> "Mục lục",

			"noibat"=> "Nổi bật",

			"hienthi"=>"Hiển thị"
			
		);

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 102;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 102;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
		
	#========================DANH SÁCH ==================== 

	$nametype='tin-tuc';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#========================DANH SÁCH ==================== 

	$nametype='title-intro';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tiêu đề giới thiệu';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = false;

	$GLOBAL['baiviet'][$nametype]['cano'] = false;

	$GLOBAL['baiviet'][$nametype]['schema'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



	/*--------------------------------------------Thiết kế thi công --------------------------------------*/
	$nametype='thiet-ke-thi-cong';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Thiết kế thi công';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 290;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// DM1
	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=> "Mục lục",

			"noibat"=>"Nổi bật",

			"hienthi"=>"Hiển thị",

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = FALSE;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);
	#============================================Thương hiệu======================================================================
	
	// $nametype = "thuong-hieu";
	// $GLOBAL['baiviet'][$nametype]['alias'] = true;
	// $GLOBAL['baiviet'][$nametype]['list'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

	// 		"mucluc"=>"Mục lục",

	// 		"noibat"=>'Nổi bật',

	// 		"daitiec"=>'Đại tiệc',

	// 		"hienthi"=>"Hiển thị"

	// 	);

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 285;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 160;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['alias'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

	// (

	// 	$nametype=>array

	// 		(

    //         	"title_main_photo" => "Hình ảnh kèm theo",

    //         	"title_sub_photo" => "Hình ảnh",

    //         	"width_photo" => 500,

    //         	"height_photo" => 500,

    //         	"thumb_width_photo" => 500,

    //         	"thumb_height_photo" => 500,

    //         	"thumb_ratio_photo" => 1,

    //         	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

    //      	)

	// );
	
	#=========================================Sứ mệnh=============================================================
	
	$nametype='thong-tin-chung';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'bài viết thông tin chung';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['numb'] = false;

	$GLOBAL['baiviet'][$nametype]['cano'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#=========================================Sứ mệnh=============================================================
	
	//$nametype='mua-hang-online';

	//$GLOBAL['baiviet'][$nametype]['title_main'] = 'bài viết mua hàng online';

	//$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	//$GLOBAL['baiviet'][$nametype]['full'] = false;

	//$GLOBAL['baiviet'][$nametype]['check']=array(

	//	"hienthi"=>"Hiển thị",

	//);

	//$GLOBAL['baiviet'][$nametype]['img'] = true;

	//$GLOBAL['baiviet'][$nametype]['img-width'] = 278;

	//$GLOBAL['baiviet'][$nametype]['img-height'] = 278;

	//$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	//$GLOBAL['baiviet'][$nametype]['mota'] = false;

	//$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	//$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	//$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	//$GLOBAL['baiviet'][$nametype]['numb'] = false;

	//$GLOBAL['baiviet'][$nametype]['cano'] = true;

	//$GLOBAL['baiviet'][$nametype]['alias'] = true;

	//$GLOBAL['baiviet'][$nametype]['seo'] = true;

	//$GLOBAL['baiviet'][$nametype]['tag'] = false;

	//$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	//$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#=========================================CHÍNH SÁCH=============================================================
	
		$nametype='chinh-sach';

		$GLOBAL['baiviet'][$nametype]['title_main'] = 'bài viết chính sách';
	
		$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';
	
		$GLOBAL['baiviet'][$nametype]['full'] = false;
	
		$GLOBAL['baiviet'][$nametype]['check']=array(
	
			"mucluc"=>"Mục lục",
	
			// "noibat"=>'Nổi bật',
	
			"hienthi"=>"Hiển thị",
	
		);
	
		$GLOBAL['baiviet'][$nametype]['img'] = false;
	
		$GLOBAL['baiviet'][$nametype]['img-width'] = 110;
	
		$GLOBAL['baiviet'][$nametype]['img-height'] = 110;
	
		$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;
	
		$GLOBAL['baiviet'][$nametype]['mota'] = false;
	
		$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;
	
		$GLOBAL['baiviet'][$nametype]['noidung'] = true;
	
		$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;
	
		$GLOBAL['baiviet'][$nametype]['alias'] = true;
	
		$GLOBAL['baiviet'][$nametype]['seo'] = true;
	
		$GLOBAL['baiviet'][$nametype]['tag'] = true;
	
		$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	
		$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';
	
#=========================================CHÍNH SÁCH=============================================================
		
	$nametype='icon';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'icon';

	$GLOBAL['baiviet'][$nametype]['title'] = 'quản lý icon';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		// "noibat"=>'Nổi bật',

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 110;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 110;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['link'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = false;


	$GLOBAL['baiviet'][$nametype]['alias'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



	#=========================================Sứ mệnh=============================================================
	
	$nametype='thanh-toan';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'bài viết thanh toán';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 72;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 40;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#========================htgh==================== 

	$nametype='htgh';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức giao hàng';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức giao hàng';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 72;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 72;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#========================pttt==================== 
	$nametype='pttt';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức thanh toán';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức thanh toán';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 285;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 215;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';
	

	//Giới thiệu

	$nametype='gioi-thieu';

	$GLOBAL['info'][$nametype]['title_main'] = 'Về chúng tôi';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý về chúng tôi';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 270;

	$GLOBAL['info'][$nametype]['img-height'] = 270;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = true;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['noidung'] = true;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	//GT PHẢI
	$nametype='gioi-thieu-phai';

	$GLOBAL['info'][$nametype]['title_main'] = 'Bên Phải Phần GT';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý GT';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 270;

	$GLOBAL['info'][$nametype]['img-height'] = 270;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = false;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['info'][$nametype]['noidung'] = false;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = false;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	

	#===============================Title=======================================================
	
	$nametype='flash-sale';

	$GLOBAL['title'][$nametype]['title_main'] = 'Tiêu đề Flash sales';

	$GLOBAL['title'][$nametype]['title'] = 'Quản lý tiêu đề flash sales';

	$GLOBAL['title'][$nametype]['full'] = false;

	$GLOBAL['title'][$nametype]['img'] = false;

	$GLOBAL['title'][$nametype]['img-width'] = 725;

	$GLOBAL['title'][$nametype]['img-height'] = 425;

	$GLOBAL['title'][$nametype]['img-ratio'] = 1;

	$GLOBAL['title'][$nametype]['img-b'] = false;

	$GLOBAL['title'][$nametype]['img-gallery'] = false;

	$GLOBAL['title'][$nametype]['mota'] = false;

	$GLOBAL['title'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['title'][$nametype]['noidung'] = false;

	$GLOBAL['title'][$nametype]['noidung-ckeditor'] = false;

	$GLOBAL['title'][$nametype]['link'] = false;

	$GLOBAL['title'][$nametype]['seo'] = false;

	$GLOBAL['title'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['title'][$nametype]['img-gallery'] = false;

	$GLOBAL['title'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);
	#====================album============================

	$GLOBAL['album']['album']['title_main'] = 'Thư viện ảnh';

	$GLOBAL['album']['album']['title'] = 'Quản lý thư viện ảnh';

	$GLOBAL['album']['album']['full'] = false;

	$GLOBAL['album']['album']['img'] = true;

	$GLOBAL['album']['album']['img-width'] = 280;

	$GLOBAL['album']['album']['img-height'] = 210;

	$GLOBAL['album']['album']['img-ratio'] = 1;

	$GLOBAL['album']['album']['img-gallery'] = true;

	$GLOBAL['album']['album']['link'] = true;

	$GLOBAL['album']['album']['mota'] = false;

	$GLOBAL['album']['album']['noidung'] = false;

	$GLOBAL['album']['album']['seo'] = true;

	$GLOBAL['album']['album']['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['album']['album']['img-gallery'] = true;

	$GLOBAL['album']['album']['multi-gallery-arr']=array

	(

		"album"=>array

			(

				"title_main_photo" => "Hình ảnh album",

				"title_sub_photo" => "Hình ảnh",

				"width_photo" => 500,

				"height_photo" => 500,

				"thumb_width_photo" => 500,

				"thumb_height_photo" => 500,

				"thumb_ratio_photo" => 1,

				"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

			)

	);
	#====================Slider============================
	$nametype='slider';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'Slider';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý slider';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 800;

	$GLOBAL['photo'][$nametype]['img-height'] = 400;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = true;

	$GLOBAL['photo'][$nametype]['linhvuc'] = true;

	$GLOBAL['photo'][$nametype]['nam'] = true;

	$GLOBAL['photo'][$nametype]['noidung'] = true;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Ảnh Feedback============================
	$nametype='feedback';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'LOGO ĐỐI TÁC';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý Ảnh ĐỐI TÁC';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 258;

	$GLOBAL['photo'][$nametype]['img-height'] = 459;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Slider============================
	$nametype='quang-cao';

	$GLOBAL['photo'][$nametype]['title_main'] = 'quảng cáo';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý quảng cáo';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 385;

	$GLOBAL['photo'][$nametype]['img-height'] = 180;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Đối tác============================
	$nametype='doi-tac';

	$GLOBAL['photo'][$nametype]['title_main'] = 'đối tác';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý đối tác';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 180;

	$GLOBAL['photo'][$nametype]['img-height'] = 100;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;


	$GLOBAL['photo'][$nametype]['mota'] = true;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================mạng xã hội============================
	$nametype='mangxahoi';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Mạng xã hội';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 35;

	$GLOBAL['photo'][$nametype]['img-height'] = 35;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================Hotline============================
	$nametype='hotline';
			
	$GLOBAL['photo'][$nametype]['title_main'] = 'Hotline';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý Hotline';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = false;

	$GLOBAL['photo'][$nametype]['img-width'] = 1440;

	$GLOBAL['photo'][$nametype]['img-height'] = 568;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['phone'] = true;


	$GLOBAL['photo'][$nametype]['link'] = false;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Hotline============================
	#====================logo============================

	$nametype='logo';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 140;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 75;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	
	#====================bg footer============================

	$nametype='bg_footer';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background footer';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background footer';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Background body============================

	$nametype='bg_body';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background body';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background body';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Background header============================

	$nametype='bg_header';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background header';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background header';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Background tiêu chí============================

	$nametype='bg_tieuchi';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background tiêu chí';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background tiêu chí';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================bg gioithieu============================

	$nametype='bg_gioithieu';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'LOGO VUÔNG';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý LOGO VUÔNG';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['mota'] = true;

	$GLOBAL['bannerqc'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		#====================BACKGROUND FEEDBACK============================
	$nametype='slider-mark';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'slider-mark';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý slider-mark';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 195;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 60;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
			
	#====================dmca============================
	// $nametype='dmca';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'background dmca';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background dmca';

	// $GLOBAL['bannerqc'][$nametype]['full'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 130;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 45;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	// #====================hình đại diện============================

	$nametype='hinhdaidien';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================booking============================
	$nametype='dat-lich';

	$GLOBAL['booking'][$nametype]['title_main'] = 'đăng ký báo giá';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký báo giá';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';
	#====================================================ĐĂNG KÝ NHẬN TIN====================================
	$nametype='client';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = false;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = false;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = false;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#================================================Đánh giá sản phẩm=======================================
	$nametype='dat-lich';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['title'] = 'Đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['id_product'] = false;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = true;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';
	#====================Video============================
	$nametype='video';

	$GLOBAL['video'][$nametype]['title_main'] = 'video';

	$GLOBAL['video'][$nametype]['title'] = 'Quản lý video';

	$GLOBAL['video'][$nametype]['full'] = true;

	$GLOBAL['video'][$nametype]['upload'] = false;

	$GLOBAL['video'][$nametype]['img'] = true;

	$GLOBAL['video'][$nametype]['img-width'] = 190;

	$GLOBAL['video'][$nametype]['img-height'] = 110;

	$GLOBAL['video'][$nametype]['img-ratio'] = 1;

	$GLOBAL['video'][$nametype]['link'] = true;

	$GLOBAL['video'][$nametype]['mota'] = false;

	$GLOBAL['video'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['video'][$nametype]['seo'] = false;

	$GLOBAL['video'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	#====================footer============================
	$nametype='footer';

	$GLOBAL['company'][$nametype]['title_main'] = 'Footer';

	$GLOBAL['company'][$nametype]['title'] = 'Thông tin footer';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = false;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = true;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================company============================
	$nametype='lien-he';

	$GLOBAL['company'][$nametype]['title_main'] = 'liên hệ';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý liên hệ';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = true;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================setting============================

	$GLOBAL['setting']['tieude']=true;

	$GLOBAL['setting']['diachi']=true;

	$GLOBAL['setting']['chaychu1']=true;

	$GLOBAL['setting']['chaychu2']=true;

	$GLOBAL['setting']['slogan']=true;

	$GLOBAL['setting']['mota']=false;

	$GLOBAL['setting']['timework']=false;

	$GLOBAL['setting']['time']=false;

	$GLOBAL['setting']['email']=true;

	$GLOBAL['setting']['hotline']=true;

	$GLOBAL['setting']['hotline-advance']=true;

	$GLOBAL['setting']['dienthoai']=true;

	$GLOBAL['setting']['page_in']=true;

	$GLOBAL['setting']['page_ne']=true;

	$GLOBAL['setting']['page_sp']=true;

	$GLOBAL['setting']['postalcode']=true;

	$GLOBAL['setting']['tax_code']=false;

	$GLOBAL['setting']['blank']=false;

	$GLOBAL['setting']['denominator']=false;

	$GLOBAL['setting']['symbol']=false;

	$GLOBAL['setting']['code']=false;

	$GLOBAL['setting']['city']=true;

	$GLOBAL['setting']['district']=true;

	$GLOBAL['setting']['message']=true;

	$GLOBAL['setting']['counter']=false;

	$GLOBAL['setting']['zalo']=true;

	$GLOBAL['setting']['website']=true;

	$GLOBAL['setting']['laisuat']=false;

	$GLOBAL['setting']['phivanchuyen']=false;

	$GLOBAL['setting']['toado']=true;

	$GLOBAL['setting']['seo']=true;

	$GLOBAL['setting']['iframe']=true;

	$GLOBAL['setting']['iframe1']=true;

	$GLOBAL['setting']['fanpage']=true;

	$GLOBAL['setting']['copyright']=false;

	$GLOBAL['setting']['faceid']=true;

	$GLOBAL['setting']['toc']=true;

	$GLOBAL['setting']['block']=false;

	$GLOBAL['setting']['slider']=false;

	$GLOBAL['setting']['linksyoutube']=true;

	$GLOBAL['setting']['links']=true;

	$GLOBAL['setting']['slide']=false;

	$GLOBAL['setting']['nonecopy']=true;

	$GLOBAL['setting']['background']=true;

	$GLOBAL['setting']['watermark']=false;

	$GLOBAL['setting']['tag']=false;

	$GLOBAL['setting']['changedola']=false;

	$GLOBAL['setting']['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

?>