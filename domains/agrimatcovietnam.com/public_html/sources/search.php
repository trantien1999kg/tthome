<?php 



	$keywords = (isset($_GET['keywords'])) ? htmlspecialchars($_GET['keywords']) : "";



	if(!empty($keywords)){



		$where .= " and (ten_$lang like '%".$keywords."%' or tenkhongdau_vi like '%".$keywords."%' or tenkhongdau_en like '%".$keywords."%')";



		$url_page .= '&keywords='.$keywords;



	}

	if(!empty($sortby)){



		$ex_sort_by = str_replace('-', ' ', $sortby);



		$order_by = ' order by '.$ex_sort_by;



		$url_page .= '&sortby='.$sortby;



	}else{



		$order_by = ' order by stt asc, id desc';



	}



	$per_page = $row_setting['page_sp'];



    $startpoint = ($page * $per_page) - $per_page;



    $limit = ' limit '.$startpoint.','.$per_page;



  	$sql = "SELECT *,tenkhongdau_$lang as tenkhongdau from #_baiviet where type='san-pham' and hienthi=1 $where $order_by ".$limit;

  	

    $tintuc = $db->rawQuery($sql);



    $sqlq = "SELECT COUNT(*) as `numb` from #_baiviet where type='san-pham' and hienthi=1 $where $order_by";



    $count = $db->rawQueryOne($sqlq);



   	$total = $count['numb'];



    $url = $func->getCurrentPageURL();



	$paging = $func->pagination($total,$per_page,$page,$url);



	$title = _have.$total._resultfound;



	/* SEO */

	$seo->setSeo('h1',$title);



	$str_breadcrumbs =$breadcrumbs->getUrl(_home,array(array('alias'=>$func->getCom('tim-kiem').$url_page,'name'=>_resultsearch)));



?>