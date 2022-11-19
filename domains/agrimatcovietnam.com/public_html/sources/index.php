<?php  if(!defined('_source')) die("Error");
    $about=$db->rawQueryOne("select ten_$lang as ten, mota_$lang as mota,photo from #_info where type=? limit 0,1",array('gioi-thieu'));

    $desc_quytrinh=$db->rawQueryOne("select mota_$lang from #_company where type=? limit 0,1",array('quy-trinh'));
    $quytrinh=$db->rawQuery("select id, ten_$lang,mota_$lang,photo,ngaytao from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,6",array('quy-trinh'));
    $taisao=$db->rawQuery("select id, ten_$lang from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('tai-sao'));
    /* SEO */
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

    // Company
    $descglobal = $db->rawQueryOne("select mota_$lang as mota from #_company where type=?",array('desc-global'));
    $descbooking = $db->rawQueryOne("select mota_$lang as mota from #_company where type=?",array('desc-booking'));
   
    //INFO
    $about = $db->rawQueryOne("select ten_$lang as ten,mota_$lang as mota, photo from #_info where type=?",array('gioi-thieu'));
    $trungtam = $db->rawQueryOne("select ten_$lang as ten,mota_$lang as mota, photo from #_info where type=?",array('trung-tam-khao-nghiem'));

    //Bannerqc 
    $bgabout = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array('bg-about'));
    $img_global = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array('img-global'));
    $bgtrungtam = $db->rawQueryOne("select photo_$lang as photo,link from #_bannerqc where hienthi=1 and type=?",array('trung-tam'));
    $logocungcap = $db->rawQueryOne("select photo_$lang as photo,link from #_bannerqc where hienthi=1 and type=?",array('logo-cungcap'));
    
    // Article   
    $newsindex = $db->rawQuery("select photo,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,ngaytao,type,mota_$lang as mota from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array("tin-tuc"));
    $productsindex = $db->rawQuery("select photo,ten_$lang,tenkhongdau_$lang as tenkhongdau,mota_$lang,icon,type from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc limit 0,6",array("san-pham"));
    
    // LIST

    //Photo
    $cungcaps = $db->rawQuery("select ten_$lang as ten,photo_$lang as photo,link_$lang as link from #_photo where type=? order by stt asc,id desc limit 0,4",array('cung-cap'));
    $aboutics = $db->rawQuery("select ten_$lang as ten,photo_$lang as photo,count from #_photo where type=? order by stt asc,id desc limit 0,5",array('aboutic'));

    //Videos
    
?>