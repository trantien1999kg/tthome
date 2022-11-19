<?php

	if(!defined('_lib')) die("Errors");



	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$config=array(



		'arrayDomainSSL' => array(),



		'website'=>array(



			'server-name'=>$_SERVER['SERVER_NAME'],



			'url'=>'/',



			'debug-css' => false,



			'debug-js'=>true,



			'debug-responsive'=>true,



			'error-reporting'=>false,



			'robots'=>'index,follow',



			'upload' => array(

				

				'max-width' => 1600,



				'max-height' => 1600

			),

		),

		'database'=>array(

			'type' => 'mysql',

			'host' => 'localhost',

			'username' => 'vpsagr_db',

			'password' => 'rVF267cSL',

			'url'=>'/upload/',

			'dbname'=> 'vpsagr_db',

			'port' => 3306,

			'prefix' => 'table_',

			'charset' => 'utf8',

			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")

		),

		'login-lock'=>array(

		

			'attempt'=>5,



			'delay'=>15

		),

		'mail'=>array(



			'ip'=>'103.1.238.142',



			'email'=>'no-reply@agrimatcovietnam.com',



			'password'=>'yhLQDUnxj',



			'smtp' => true,



			'secure' => 'ssl',



			'port' => 465,

			

			'gmail' => false



		),

		'author'=>array(



			'name'=>'Nguyễn Hoàng Nam',



			'email'=>'kythuat.iweb@gmail.com',



			'create'=>date('d/m/Y H:i:s')



		),

		'loai'=>array(

			0=>"Còn hàng",

			1=>"Hết hàng"
			
		),


		'seo-debug'=>array(

			'index'=>'Trang chủ',

			'products/product'=>"Sản phẩm",

			'products/product_detail'=>"Chi tiết Sản phẩm",

			'news/news'=>'Tin tức,...',

			'news/news_detail'=>'Trang chi tiết Tin tức,...',

			'pages/baiviet'=>'Trang tĩnh ( vd: Giới thiệu,...)',

			'contacts/contact'=>'Liên hệ'

		),

		'alias' => array(
			"vi"=>array(
				'san-pham'=>'san-pham',
				'dich-vu'=>'dich-vu',
				'hoat-dong'=>'hoat-dong',
				'tin-tuc'=>'tin-tuc',
				've-chung-toi'=>'ve-chung-toi',
				'trung-tam-khao-nghiem'=>'trung-tam-khao-nghiem',
				'gioi-thieu'=>'gioi-thieu',
				'chinh-sach'=>'chinh-sach',
				'lien-he'=>'lien-he',
				'tim-kiem'=>'tim-kiem',
			),
			"en"=>array(
				'san-pham'=>'product',
				'dich-vu'=>'service',
				'hoat-dong'=>'activity',
				'tin-tuc'=>'news',
				've-chung-toi'=>'aboutus',
				'trung-tam-khao-nghiem'=>'test-center',
				'gioi-thieu'=>'about',
				'chinh-sach'=>'policy',
				'lien-he'=>'contact',
				'tim-kiem'=>'search'
			)
		),

		'seo-lang'=>array(

			'vi'=>'Vi',
			'en'=>'En'

		),

		'lang-default'=>'vi',

		'product-type'=>'san-pham',

		'cart-advance'=>false,

		'lang'=>array('vi'=>'Vi','en'=>'En'),

		"faceid"=>"582534979152027",

		'salt'=>'^29#_%z/@$',

		'secret'=>'@287Rzx_^!*95&'

	);

	// firewall

	$fw_conf['firewall']=false;

	$fw_conf['htaccess']='.htaccess';

	$fw_conf['email_admin']='kythuat.iweb@gmail.com';

	$fw_conf['max_connect']=15;

	$fw_conf['time_limit']=10;

	$fw_conf['max_lockcount']=15;

	$fw_conf['time_wait']=15;

	$fw_conf['ip_allow']='';

	/* Error reporting */

	error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);



	/* Cấu hình base */

	require_once _lib.'checkSSL.php';



	$check_ssl = new checkSSL();



	$http = $check_ssl->getProtocol();



	$config_url = $config['website']['server-name'].$config['website']['url'];



	$https_config = $http.$config_url;

	$array_allowed = array('htgh','pttt','cau-hoi','giao-hang','ho-tro');

	// cấu hình upload

	require_once _lib."constant.php";

?>