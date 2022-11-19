<?php  if(!defined('_source')) die("Error");

	

	@$id =  htmlspecialchars($_GET['id']);

	if($id!=''){

		$row_detail = $db->rawQueryOne("select * from #_video where hienthi=1 and type='".$type_com."' and tenkhongdau='".$id."'");

		$title_cat = $row_detail["ten_$lang"];

		$title_bar .= $row_detail["ten_$lang"];

		$title = $row_detail["ten_$lang"];

		$tintuc_khac = $db->rawQuery("select * from #_video where hienthi=1 and type='".$type_com."' and id<>'".$id."' limit 0,6");

	}else{

		$per_page = 6; // Set how many records do you want to display per page.

		$startpoint = ($page * $per_page) - $per_page;

		$limit = ' limit '.$startpoint.','.$per_page;

		$where = " #_video where type='video' and hienthi>0 order by stt,id desc";

		$sql="select * from $where $limit";

		$videos=$db->rawQuery($sql);

		$url = $func->getCurrentPageURL();

		$paging = $func->pagination($where,$per_page,$page,$url);

		/* SEO */
		$seoDB = $seo->getSeoDB(0,'info','capnhat',$type);
		if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('h1',$seoDB['title_'.$seolang]);
		if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);
		if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);
		if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);
	
	   
		$seo->setSeo('url',$func->getCurrentPageURL());
		$img_json_bar = (isset($row_detail['options']) && $row_detail['options'] != '') ? json_decode($row_detail['options'],true) : null;
		if($img_json_bar == null || ($img_json_bar['p'] != $row_detail['photo']))
		{
			$img_json_bar = $func->getImgSize($row_detail['photo'],_upload_hinhanh_l.$row_detail['photo']);
			$seo->updateSeoDB(json_encode($img_json_bar),'photo',$row_detail['id']);
		}
		if(count($img_json_bar) > 0)
		{
			$seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_hinhanh_l.$row_detail['photo']);
			$seo->setSeo('photo:width',$img_json_bar['w']);
			$seo->setSeo('photo:height',$img_json_bar['h']);
			$seo->setSeo('photo:type',$img_json_bar['m']);
		}
	
		$str_breadcrumbs =$breadcrumbs->getUrl('Trang chủ',array(array('alias'=>'video','name'=>'Video clip')));

		if(count($videos)==0) $title_cat="Nội Dung Đang Cập Nhật...";

	}

?>