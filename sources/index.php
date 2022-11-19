<?php  if(!defined('_source')) die("Error");
    $bgtieuchi=$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_tieuchi'));
    
    // $list_nb = $db->rawQuery("select id, ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,icon,banner,links,type from #_baiviet_list where hienthi=1 and noibat<>0 and type=? order by stt asc,id desc",array('san-pham'));	
    
    // $combo_nb = $db->rawQuery("select id, ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,giaban,giacu,photo,type from #_baiviet where hienthi=1 and noibat<>0 and combo=1 and type=? order by stt asc,id desc limit 0,6",array('san-pham'));
    
    // $quangcaos=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('quang-cao'));
    /* SEO */

    $moTaGioiThieuThanhXuan =$db->rawQueryOne("select ten_$lang as ten,mota_$lang as mota , noidung_$lang as noidung , photo , type,chuky_$lang as chuky from #_info where hienthi=1 and type=? limit 0,1",array('gioi-thieu'));

    $tktc1 = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota, type ,  photo from #_baiviet_list where noibat=1 and hienthi=1 and type=? order by id desc",array('thiet-ke-thi-cong'));

	$pros = $db->rawQuery("select ten_$lang,photo,photo1,tenkhongdau_$lang as tenkhongdau,type,id,id_list from #_baiviet where hienthi=1 and noibat=1 and type=? order by id desc",array("san-pham"));

	$tintuc = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota, type , ngaytao, photo from #_baiviet where hienthi=1 and type=? order by id desc",array('tin-tuc'));

	$tktc = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota, type ,  photo from #_baiviet where hienthi=1 and type=? order by id desc",array('thiet-ke-thi-cong'));

    $sumenh=$db->rawQuery("select ten_$lang as ten,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('thong-tin-chung'));

    $videos=$db->rawQueryOne("select id, ten_$lang as ten, links,photo from #_video where noibat=1 and type=? order by stt asc,id desc",array('video'));

    $seoDB = $seo->getSeoDB(0,'setting','capnhat','');

    $seopageIndex = $db->rawQueryOne("select mota_$lang from #_seopage where type = ? limit 0,1",array('dich-vu'));

    if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('h1',$seoDB['title_'.$seolang]);

    if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);

    if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);

    if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);

    $seo->setSeo('url',$func->getCurrentPageURL());

    $seo->setSeo('type',$obj_type);

    $seo->setSeo('dichvu',$seopageIndex['mota_'.$lang]);

    $img_json_bar = (isset($seoPage['options']) && $seoPage['options'] != '') ? json_decode($seoPage['options'],true) : null;

    if($img_json_bar == null || ($img_json_bar['p'] != $seoPage['photo_'.$lang]))

    {

        $img_json_bar = $func->getImgSize($seoPage['photo_'.$lang],_upload_hinhanh_l.$seoPage['photo_'.$lang]);

        $seo->updateSeoDB(json_encode($img_json_bar),'photo',$seoPage['id']);

    }

    if(count($img_json_bar) > 0)

    {

        $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_hinhanh_l.$seoPage['photo_'.$lang]);

        $seo->setSeo('photo:width',$img_json_bar['w']);

        $seo->setSeo('photo:height',$img_json_bar['h']);

        $seo->setSeo('photo:type',$img_json_bar['m']);

    }



?>