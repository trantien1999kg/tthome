<?php 

	#=================check per===============

	$GLOBAL_TAGS = false;

	$GLOBAL_LANG=true;

	$GLOBAL_PERMISSION=false;

	$GLOBAL_ORDER = false;

	#=================check user===============

	$GLOBAL_USER=true;

	$GLOBAL_USER_ADMIN=true;

	$GLOBAL_USER_CLIENT=true;

	#================check member================

	$MEMBER=false;

	$CONTACT=true;

	$NEWSLETTER=false;

	$BOOKING=true;


	/** ARTICLE SETTING*/
		
	$PUBLIC = [];

	$PRIVATE = [];

	$PHOTOS = [];

	$COMPANY= [];

	// =======================seo page======================
	$setting['seopage']['page']=array(
		'san-pham'=>"Sản phẩm",
		'dich-vu'=>"Dịch vụ",
		'tin-tuc'=>'Tin tức',
		'hoat-dong'=>'Hoạt động',
		// 've-chung-toi'=>'Về chúng tôi',
		'lien-he'=>'Liên hệ'
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
	$viewArray=array('y-kien');


#========================Sản phẩm==================== 

	$nametype='san-pham';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Sản phẩm';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['order'] = false;

	$GLOBAL['baiviet'][$nametype]['private'] = true;

	$GLOBAL['baiviet'][$nametype]['color'] = false;

	$GLOBAL['baiviet'][$nametype]['size'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['attribute'] = array(
		"thanhphan"=>array(
			"name"=>"Thành phần",
			"class"=>"",
			"type"=>"text",
		)
	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['masp'] = true;

	$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

	$GLOBAL['baiviet'][$nametype]['xuatxu'] = true;

	$GLOBAL['baiviet'][$nametype]['rank'] = false;

	$GLOBAL['baiviet'][$nametype]['gia'] = true;

	$GLOBAL['baiviet'][$nametype]['giacu'] = true;

	$GLOBAL['baiviet'][$nametype]['dientich'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 276;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 276;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 2;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

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

	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=>"Mục lục",

			"hienthi"=>"Hiển thị"

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['status'] = array();

		$GLOBAL_LEVEL1['baiviet'][$nametype]['alias'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 220;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 154;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 62;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 285;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 506;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

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

	// danh mục cấp 2

	$GLOBAL['baiviet'][$nametype]['cat'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

		$GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat']=array(

			"mucluc"=>"Mục lục",

			"hienthi"=>"Hiển thị"
			
		);

		$GLOBAL_LEVEL2['baiviet'][$nametype]['status'] = array();

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 270;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 220;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = false;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = false;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['alias'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL2['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// danh mục cấp 3

	$GLOBAL['baiviet'][$nametype]['item'] = true;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['title'] = 'Danh mục cấp 3';

		$GLOBAL_LEVEL3['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['check_item']=array(

			"mucluc"=>"Mục lục",

			"hienthi"=>"Hiển thị"
			
		);

		$GLOBAL_LEVEL3['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['img-width'] = 270;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['img-height'] = 220;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['brand'] = false;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['img-width1'] = 30;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['img-height1'] = 30;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['noidung'] = false;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL3['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#========================Sản phẩm====================

#========================Dịch vụ==================== 

	$nametype='dich-vu';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dịch vụ';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['private'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục tự động",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 400;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 280;

	$GLOBAL['baiviet'][$nametype]['icon'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 318;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 259;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=>"Mục lục",

			"hienthi"=>"Hiển thị"

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['status'] = array();

		$GLOBAL_LEVEL1['baiviet'][$nametype]['alias'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 220;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 154;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 62;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 285;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 506;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

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

#========================Dịch vụ==================== 

#========================Hoạt động==================== 

	$nametype='hoat-dong';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Hoạt động';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục tự động",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 318;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 259;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#========================Hoạt động==================== 

#========================Tin tức==================== 

	$nametype='tin-tuc';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục tự động",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 318;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 259;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#========================Tin tức==================== 


#========================Tin tức==================== 

	$nametype='tin-tuc';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục tự động",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 318;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 259;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#========================Tin tức==================== 

#========================Về chúng tôi==================== 

	// $nametype='ve-chung-toi';

	// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Về chúng tôi';

	// $GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	// $GLOBAL['baiviet'][$nametype]['full'] = false;

	// $GLOBAL['baiviet'][$nametype]['public'] = true;

	// $GLOBAL['baiviet'][$nametype]['check']=array(

	// 	"mucluc"=>"Mục lục tự động",

	// 	"hienthi"=>"Hiển thị"

	// );

	// $GLOBAL['baiviet'][$nametype]['status'] = array('footer'=>"Footer");

	// $GLOBAL['baiviet'][$nametype]['tag']=true;

	// $GLOBAL['baiviet'][$nametype]['img'] = true;

	// $GLOBAL['baiviet'][$nametype]['img-width'] = 400;

	// $GLOBAL['baiviet'][$nametype]['img-height'] = 280;

	// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['baiviet'][$nametype]['mota'] = true;

	// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	// $GLOBAL['baiviet'][$nametype]['noidung'] = true;

	// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL['baiviet'][$nametype]['job'] = false;

	// $GLOBAL['baiviet'][$nametype]['seo'] = true;

	// $GLOBAL['baiviet'][$nametype]['alias'] = true;

	// $GLOBAL['baiviet'][$nametype]['tag'] = false;

	// $GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	// $GLOBAL['baiviet'][$nametype]['rating'] = false;

	// $GLOBAL['baiviet'][$nametype]['daytin'] = false;

	// $GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	// $GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// $GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#========================Về chúng tôi==================== 


#========================Chính sách==================== 

	$nametype='chinh-sach';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Chính sách';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục tự động",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 270;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 220;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

#========================Chính sách==================== 	


##===================Giới thiệu========================

	$nametype='gioi-thieu';

	$GLOBAL['info'][$nametype]['title_main'] = 'Giới thiệu';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý Giới thiệu';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 400;

	$GLOBAL['info'][$nametype]['img-height'] = 404;

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
##===================Giới thiệu========================

##===================Về chúng tôi========================

	$nametype='ve-chung-toi';

	$GLOBAL['info'][$nametype]['title_main'] = 'Về chúng tôi';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý Về chúng tôi';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 400;

	$GLOBAL['info'][$nametype]['img-height'] = 404;

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
##===================Về chúng tôi========================

##===================Trung tâm khảo nghiệm========================

	$nametype='trung-tam-khao-nghiem';

	$GLOBAL['info'][$nametype]['title_main'] = 'Trung tâm khảo nghiệm';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý Trung tâm khảo nghiệm';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 270;

	$GLOBAL['info'][$nametype]['img-height'] = 220;

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
##===================Trung tâm khảo nghiệm========================

#====================Slider============================
	$nametype='slider';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'Slider';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý slider';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['check'] = array(
		"hienthi"=>"Hiển thị",

		"hienthi_tieude"=> "Tiêu đề"
		
	);

	$GLOBAL['photo'][$nametype]['img-width'] = 1440;

	$GLOBAL['photo'][$nametype]['img-height'] = 768;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = true;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Slider============================

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


#====================Đối tác============================
	$nametype='doi-tac';

	$GLOBAL['photo'][$nametype]['title_main'] = 'đối tác';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý đối tác';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['check'] = array(
		"hienthi"=>"Hiển thị",
	);

	$GLOBAL['photo'][$nametype]['img-width'] = 170;

	$GLOBAL['photo'][$nametype]['img-height'] = 100;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Đối tác============================

	
#====================mạng xã hội============================

	$nametype='mangxahoi';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Mạng xã hội';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['check'] = array(
		"hienthi"=>"Hiển thị",
	);

	$GLOBAL['photo'][$nametype]['img-width'] = 32;

	$GLOBAL['photo'][$nametype]['img-height'] = 32;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================mạng xã hội============================

#====================Ảnh cung cấp============================

	$nametype='cung-cap';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Ảnh cung cấp';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['check'] = array(
		"hienthi"=>"Hiển thị",
	);

	$GLOBAL['photo'][$nametype]['img-width'] = 96;

	$GLOBAL['photo'][$nametype]['img-height'] = 96;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Ảnh cung cấp============================

#====================Icon giới thiệu============================

	$nametype='aboutic';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Icon giới thiệu';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['check'] = array(
		"hienthi"=>"Hiển thị",
	);

	$GLOBAL['photo'][$nametype]['img-width'] = 72;

	$GLOBAL['photo'][$nametype]['img-height'] = 72;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = false;

	$GLOBAL['photo'][$nametype]['count'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Icon giới thiệu============================



#====================Thư viện ảnh============================
	// $nametype = "album";
	// $GLOBAL['album'][$nametype]['title_main'] = 'Album Thư viện ảnh';
	// $GLOBAL['album'][$nametype]['title'] = 'Quản lý Album Thư viện ảnh';
	// $GLOBAL['album'][$nametype]['full'] = false;
	// $GLOBAL['album'][$nametype]['img'] = true;
	// $GLOBAL['album'][$nametype]['img-width'] = 332;
	// $GLOBAL['album'][$nametype]['img-height'] = 416;
	// $GLOBAL['album'][$nametype]['img-width-lg'] = 386;
	// $GLOBAL['album'][$nametype]['img-height-lg'] = 550;
	// $GLOBAL['album'][$nametype]['img-ratio'] = 1;
	// $GLOBAL['album'][$nametype]['img-gallery'] = true;
	// $GLOBAL['album'][$nametype]['link'] = true;
	// $GLOBAL['album'][$nametype]['mota'] = false;
	// $GLOBAL['album'][$nametype]['noidung'] = false;
	// $GLOBAL['album'][$nametype]['seo'] = false;
	// $GLOBAL['album'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	// $GLOBAL['album'][$nametype]['img-gallery'] = true;
	// $GLOBAL['album'][$nametype]['multi-gallery-arr']=array
	// (
	// 	$nametype=>array
	// 		(
	// 			"title_main_photo" => "Hình ảnh thực tế",
	// 			"title_sub_photo" => "Hình ảnh",
	// 			"width_photo" => 500,
	// 			"height_photo" => 500,
	// 			"thumb_width_photo" => 500,
	// 			"thumb_height_photo" => 500,
	// 			"thumb_ratio_photo" => 1,
	// 			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'
	// 		)
	// );
#====================Thư viện ảnh============================


#====================Video============================
	// $nametype='video';

	// $GLOBAL['video'][$nametype]['title_main'] = 'video';

	// $GLOBAL['video'][$nametype]['title'] = 'Quản lý video';

	// $GLOBAL['video'][$nametype]['full'] = false;

	// $GLOBAL['video'][$nametype]['upload'] = false;

	// $GLOBAL['video'][$nametype]['img'] = true;

	// $GLOBAL['video'][$nametype]['img-width'] = 1200;

	// $GLOBAL['video'][$nametype]['img-height'] = 646;

	// $GLOBAL['video'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['video'][$nametype]['link'] = true;

	// $GLOBAL['video'][$nametype]['mota'] = false;

	// $GLOBAL['video'][$nametype]['mota-ckeditor'] = true;

	// $GLOBAL['video'][$nametype]['seo'] = false;

	// $GLOBAL['video'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Video============================


#====================logo============================

	$nametype='logo';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 71;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 68;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================logo============================



#====================logo mobile============================

	$nametype='logo-mobile';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo mobile';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo mobile';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 71;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 68;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================logo mobile============================

#====================logo cung cấp============================

	$nametype='logo-cungcap';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo cung cấp';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo cung cấp';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 96;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 96;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================logo cung cấp============================

#====================Ảnh con slider============================

	$nametype='slider-mark';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Ảnh con slider';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Ảnh con slider';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 32;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 128;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Ảnh con slider============================

#====================Popup============================

	$nametype='popup';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Popup';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Popup';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Popup============================
#====================Background giới thiệu============================

	$nametype='bg-about';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background giới thiệu';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background giới thiệu';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1349;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 363;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Background giới thiệu============================

#====================Ảnh duới sản phẩm============================

	$nametype='img-global';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Ảnh duới sản phẩm';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Ảnh duới sản phẩm';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1200;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 782;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Ảnh duới sản phẩm=============================

#====================Background Trung tâm khảo nghiệm============================

	$nametype='trung-tam';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background Trung tâm khảo nghiệm';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background Trung tâm khảo nghiệm';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 369;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Background Trung tâm khảo nghiệm=============================


#====================Background footer============================

	$nametype='bg-footer';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background footer';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background footer';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


#====================watermark============================

	// $nametype='watermark';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình đóng dấu';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình đóng dấu';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 50;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 50;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['watermark-advanced'] = true;

	// $GLOBAL['bannerqc'][$nametype]['watermark'] = true;

	// $GLOBAL['bannerqc'][$nametype]['thumb'] = '50x50x1';

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================bộ công thương============================
	// $nametype='bocongthuong';

	// $GLOBAL['bannerqc'][$nametype]['title_main'] = 'Bộ công thương';

	// $GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Bộ công thương';

	// $GLOBAL['bannerqc'][$nametype]['full'] = false;

	// $GLOBAL['bannerqc'][$nametype]['img'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img-width'] = 147;

	// $GLOBAL['bannerqc'][$nametype]['img-height'] = 45;

	// $GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['bannerqc'][$nametype]['link'] = true;

	// $GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================bộ công thương============================

#====================hình đại diện============================

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
#====================hình đại diện============================

#====================Maps============================
	// $nametype = "north";
	// $GLOBAL['map'][$nametype]['title_main'] = 'Chi nhánh miền bắc';
	// $GLOBAL['map'][$nametype]['title'] = 'Quản lý Chi nhánh miền bắc';
	// $GLOBAL['map'][$nametype]['full'] = false;
	// $GLOBAL['map'][$nametype]['img'] = false;
	// $GLOBAL['map'][$nametype]['img-width'] = 585;
	// $GLOBAL['map'][$nametype]['img-height'] = 345;
	// $GLOBAL['map'][$nametype]['img-ratio'] = 1;
	// $GLOBAL['map'][$nametype]['address'] = true;
	// $GLOBAL['map'][$nametype]['phone'] = true;
	// $GLOBAL['map'][$nametype]['noidung'] = false;
#====================Maps============================

#====================booking============================
	$nametype='nhan-tin';

	$GLOBAL['booking'][$nametype]['title_main'] = 'đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['title_head'] = 'Nhận tin';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = false;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['name'] = false;

	$GLOBAL['booking'][$nametype]['phone'] = false;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = false;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

#====================booking============================

#====================booking============================
	$nametype='ho-tro';

	$GLOBAL['booking'][$nametype]['title_main'] = 'đăng ký Hỗ trợ';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký Hỗ trợ';

	$GLOBAL['booking'][$nametype]['title_head'] = 'Hỗ trợ';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = false;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['name'] = true;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

#====================booking============================

#====================booking============================
	$nametype='dai-ly';

	$GLOBAL['booking'][$nametype]['title_main'] = 'đăng ký đại lý';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký đại lý';

	$GLOBAL['booking'][$nametype]['title_head'] = 'Đại lý';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = false;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['name'] = true;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

#====================booking============================
	
#====================footer============================
	$nametype='footer';

	$GLOBAL['company'][$nametype]['title_main'] = 'footer';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý footer';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = false;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================footer============================


#====================Mô tả dưới sản phẩm============================
	$nametype='desc-global';

	$GLOBAL['company'][$nametype]['title_main'] = 'Mô tả dưới sản phẩm';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý Mô tả dưới sản phẩm';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['public'] = true;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = false;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Mô tả dịch vụ============================

#====================Mô tả đăng ký============================

	$nametype='desc-booking';

	$GLOBAL['company'][$nametype]['title_main'] = 'Mô tả đăng ký';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý Mô tả đăng ký';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['public'] = true;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = false;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Mô tả đăng ký============================


#====================Mô tả thời gian làm việc ============================

	$nametype='timework';

	$GLOBAL['company'][$nametype]['title_main'] = 'Mô tả thời gian làm việc ';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý Mô tả thời gian làm việc ';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['public'] = true;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = false;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

#====================Mô tả thời gian làm việc ============================
	
#====================Liên hệ============================
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

	$GLOBAL['company'][$nametype]['mota'] = false;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = true;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================Liên hệ============================


#====================setting============================

	$GLOBAL['setting']['tieude']=true;

	$GLOBAL['setting']['diachi']=true;

	$GLOBAL['setting']['chaychu1']=false;

	$GLOBAL['setting']['chaychu2']=false;

	$GLOBAL['setting']['slogan']=false;

	$GLOBAL['setting']['mota']=false;

	$GLOBAL['setting']['timework']=false;

	$GLOBAL['setting']['time']=false;

	$GLOBAL['setting']['email']=true;

	$GLOBAL['setting']['hotline_advance']=false;

	$GLOBAL['setting']['hotline']=true;

	$GLOBAL['setting']['dienthoai']=false;

	$GLOBAL['setting']['dienthoai1']=false;

	$GLOBAL['setting']['page_in']=false;

	$GLOBAL['setting']['page_sp']=true;

	$GLOBAL['setting']['page_ne']=true;

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

	$GLOBAL['setting']['youtube']=true;

	$GLOBAL['setting']['instagram']=true;

	$GLOBAL['setting']['pinterest']=true;

	$GLOBAL['setting']['slide']=false;

	$GLOBAL['setting']['nonecopy']=false;

	$GLOBAL['setting']['background']=true;

	$GLOBAL['setting']['tag']=false;

	$GLOBAL['setting']['changedola']=false;

	$GLOBAL['setting']['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
#====================setting============================

	foreach ($GLOBAL['baiviet'] as $key => $value) {
		if($value['public']){
			array_push($PUBLIC,$key);
		}else if($value['private']){
			array_push($PRIVATE,$key);
		}
	}

	foreach ($GLOBAL['company'] as $key => $value) {
		if($value['public']){
			array_push($COMPANY,$key);
		}
	}
?>