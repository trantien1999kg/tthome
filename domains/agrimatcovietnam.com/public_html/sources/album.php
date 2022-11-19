<?php  if(!defined('_source')) die("Error");
	$per_page=$row_setting['page_ne'];

    if($com == 'san-pham'){
        $per_page = $row_setting['page_sp'];
    }

	$order_by = ' order by stt asc, id desc';

	$page = isset($_POST['page'])?$_POST['page']:1;

	$startpoint = ($page * $per_page) - $per_page;

	$newsql = "select * from #_album where hienthi=1 and type=? $order_by limit $startpoint,$per_page";


	$tintuc=$db->rawQuery($newsql,array($type));

	

	$count=$db->rawQueryOne("select COUNT(*) as `numb` from #_album where hienthi=1 and type=?", array($type));



	$total=$count['numb'];



	$url = $func->getCurrentPageURL();

	$str_breadcrumbs = $breadcrumbs->getUrl('trang chủ',array(array('alias'=>$com,'name'=>$title_seo)));

	$paging = $func->pagination($total,$per_page,$page,$url);
	
	$seopage = $db->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array($com));

	$seo->setSeo('h1',$seopage['title_'.$seolang]);

	$seo->setSeo('subject',$seopage['mota_'.$lang]);

	$seo->setSeo('content',$seopage['noidung_'.$lang]);



	if(!empty($seopage['title_'.$seolang])) $seo->setSeo('title',$seopage['title_'.$seolang]);

	else $seo->setSeo('title',$title_seo);

	if(!empty($seopage['keywords_'.$seolang])) $seo->setSeo('keywords',$seopage['keywords_'.$seolang]);

	if(!empty($seopage['description_'.$seolang])) $seo->setSeo('description',$seopage['description_'.$seolang]);

	$seo->setSeo('url',$func->getCurrentPageURL());

	$img_json_bar = (isset($seopage['options']) && $seopage['options'] != '') ? json_decode($seopage['options'],true) : null;

	if(!empty($seopage['photo']))

	{

		if($img_json_bar == null || ($img_json_bar['p'] != $seopage['photo']))

		{

			$img_json_bar = $func->getImgSize($seopage['photo'],_upload_seopage_l.$seopage['photo']);

			$seo->updateSeoDB(json_encode($img_json_bar),'seopage',$seopage['id']);

		}

		if(count($img_json_bar) > 0)

		{

			$seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_seopage_l.$seopage['photo']);

			$seo->setSeo('photo:width',$img_json_bar['w']);

			$seo->setSeo('photo:height',$img_json_bar['h']);

			$seo->setSeo('photo:type',$img_json_bar['m']);

		}

	}

	
?><?php  if(!defined('_source')) die("Error");
	$per_page=$row_setting['page_ne'];

    if($com == 'san-pham'){
        $per_page = $row_setting['page_sp'];
    }

	$order_by = ' order by stt asc, id desc';

	$page = isset($_POST['page'])?$_POST['page']:1;

	$startpoint = ($page * $per_page) - $per_page;

	$newsql = "select * from #_album where hienthi=1 and type=? $order_by limit $startpoint,$per_page";


	$tintuc=$db->rawQuery($newsql,array($type));

	

	$count=$db->rawQueryOne("select COUNT(*) as `numb` from #_album where hienthi=1 and type=?", array($type));



	$total=$count['numb'];



	$url = $func->getCurrentPageURL();

	$str_breadcrumbs = $breadcrumbs->getUrl('trang chủ',array(array('alias'=>$com,'name'=>$title_seo)));

	$paging = $func->pagination($total,$per_page,$page,$url);
	
	$seopage = $db->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array($type));

	$seo->setSeo('h1',$seopage['title_'.$seolang]);

	$seo->setSeo('subject',$seopage['mota_'.$lang]);

	$seo->setSeo('content',$seopage['noidung_'.$lang]);



	if(!empty($seopage['title_'.$seolang])) $seo->setSeo('title',$seopage['title_'.$seolang]);

	else $seo->setSeo('title',$title_seo);

	if(!empty($seopage['keywords_'.$seolang])) $seo->setSeo('keywords',$seopage['keywords_'.$seolang]);

	if(!empty($seopage['description_'.$seolang])) $seo->setSeo('description',$seopage['description_'.$seolang]);

	$seo->setSeo('url',$func->getCurrentPageURL());

	$img_json_bar = (isset($seopage['options']) && $seopage['options'] != '') ? json_decode($seopage['options'],true) : null;

	if(!empty($seopage['photo']))

	{

		if($img_json_bar == null || ($img_json_bar['p'] != $seopage['photo']))

		{

			$img_json_bar = $func->getImgSize($seopage['photo'],_upload_seopage_l.$seopage['photo']);

			$seo->updateSeoDB(json_encode($img_json_bar),'seopage',$seopage['id']);

		}

		if(count($img_json_bar) > 0)

		{

			$seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_seopage_l.$seopage['photo']);

			$seo->setSeo('photo:width',$img_json_bar['w']);

			$seo->setSeo('photo:height',$img_json_bar['h']);

			$seo->setSeo('photo:type',$img_json_bar['m']);

		}

	}

	
?>