<?php



	$idl=addslashes($_GET['idl']);



	$per_page=$row_setting['page_sp'];



	$startpoint = ($page * $per_page) - $per_page;


    $sql="select *, tenkhongdau_$lang as tenkhongdau from table_baiviet where hienthi=1 and combo=1 and type='san-pham' order by stt asc limit $startpoint,$per_page";

    $tintuc=$db->rawQuery($sql);



    $sql="select count(*) as num from table_baiviet where hienthi=1 and combo1 and type='san-pham' order by stt asc";



    $count = $db->rawQuery($sql);

        

    $c=$db->rawQueryOne($sql);

    $total = $c['num'];

    

    $url = $func->getCurrentPageURL();
    

    $paging = $func->pagination($total,$per_page,$page,$url);



    $data['breadcrumbs'][0] = array('alias'=>'combo-sieu-chat','name'=>'Combo siêu chất');



    $data['breadcrumbs'][1] = $func->getArray($row_brand);



    $str_breadcrumbs =$breadcrumbs->getUrl('Trang chủ',$data['breadcrumbs']);



    // $seoDB = $seo->getSeoDB($row_brand['id'],'baiviet','man_list',$row_brand['type']);



    $seo->setSeo('h1','Combo siêu chất');



    $seo->setSeo('subject',$row_brand['mota_'.$lang]);



    $seo->setSeo('content',$row_brand['noidung_'.$lang]);



    if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);



    else $seo->setSeo('title','Combo siêu chất');



    if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);



    if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);



    $seo->setSeo('url',$url);



    $img_json_bar = (isset($row_brand['options']) && $row_brand['options'] != '') ? json_decode($row_brand['options'],true) : null;



    if($img_json_bar == null || ($img_json_bar['p'] != $row_brand['photo']))



    {

        $img_json_bar = $func->getImgSize($row_brand['photo'],_upload_baiviet_l.$row_brand['photo']);



        $seo->updateSeoDB(json_encode($img_json_bar),'baiviet_list',$row_brand['id']);



    }

    if(count($img_json_bar) > 0)

    {

        $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_baiviet_l.$row_brand['photo']);



        $seo->setSeo('photo:width',$img_json_bar['w']);



        $seo->setSeo('photo:height',$img_json_bar['h']);



        $seo->setSeo('photo:type',$img_json_bar['m']);



    }
	

?>