<?php



	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$logo= $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$logom= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-mobile'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$bgfooter= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg-footer'));

	// $bocongthuong= $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bocongthuong'));
	// photo
	$mangxahoi = $db->rawQuery("select photo_$lang as photo,link_$lang as link,ten_$lang as ten from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('mangxahoi'));
	$hotlines= $db->rawQuery("select ten_$lang as ten,phone from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('hotline'));
	
	//Company
	$footer = $db->rawQueryOne("select mota_$lang as mota from #_company where type=?",array('footer'));
	$timework = $db->rawQueryOne("select mota_$lang as mota from #_company where type=?",array('timework'));

	//Baiviet
	$chinhsach = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('chinh-sach'));
	$aboutus = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and find_in_set(?,status) and hienthi=1 order by stt asc,id desc",array('ve-chung-toi','footer'));

	// danh mục cấp

	$pro_c1 = $db->rawQuery("select id,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array("san-pham"));
	$dichvu_c1 = $db->rawQuery("select id,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array("dich-vu"));

?>