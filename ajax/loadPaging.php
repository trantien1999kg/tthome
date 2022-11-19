<?php /*

	require_once 'ajaxConfig.php';



	$type=isset($_POST['type']) ? htmlspecialchars($_POST['type']): '';



	$p=isset($_POST['p']) ? htmlspecialchars($_POST['p']): '';



	$item=isset($_POST['item']) ? htmlspecialchars($_POST['item']): '';



	$view=isset($_POST['view']) ? htmlspecialchars($_POST['view']): '';


	list($temp,$pid)=explode("-",$view);



	$page=$p+1;



	$startpoint=($page * $item) - $item;



	$pageNext=$page+1;



	$startpointNext=($pageNext * $item) - $item;

	

	$table='baiviet_list';



	$field="id,id_list,tenkhongdau_$lang as tenkhongdau,ten_$lang,photo,type";



	switch($temp){



		case 'list':



			break;



		case 'cat':



			$where='and id_list='.$pid;

			

			break;



		case 'item':



			$where='and id_cat='.$pid;



			break;



		case 'sub':



			$where='and id_item='.$pid;



			break;



		default:



			break;

	}



	$items=$db->rawQuery("select $field from #_$table where hienthi<>0 $where and type='$type' order by stt asc, id desc limit $startpoint,$item");

	$sql = "select $field from #_$table where hienthi<>0 $where and type='$type' order by stt asc, id desc limit $startpoint,$item";

	$itemsNext=$db->rawQuery("select $field from #_$table where hienthi<>0 $where and type='$type' order by stt asc, id desc limit $startpointNext,$item");

	$result["page"] = $field;

	$result['html']=$func->getTemplateList($items);



	$result['count-list']=count($itemsNext);



	echo json_encode($result);



 */?>
<?php

	require_once 'ajaxConfig.php';



	$type=isset($_POST['type']) ? htmlspecialchars($_POST['type']): '';



	$table=isset($_POST['table']) ? htmlspecialchars($_POST['table']): '';



	$p=isset($_POST['p']) ? htmlspecialchars($_POST['p']): '';



	$item=isset($_POST['item']) ? htmlspecialchars($_POST['item']): '';

	$idlist = isset($_POST["idlist"]) ? htmlspecialchars($_POST["idlist"]):'';



	$page=$p+1;



	$startpoint=($page * $item) - $item;



	if($table=='baiviet'){



		$field="id,tenkhongdau_$lang,ten_$lang,photo,link";



	}

	if($table=='baiviet_list'){



		$field="id,tenkhongdau_$lang,ten_$lang,photo";



	}

	switch($table){



		case 'list':



		case 'cat':



		case 'item':



		case 'sub':



			$field="id,tenkhongdau_$lang,ten_$lang,photo";



			$table='baiviet_'.$table;



			break;



		default:



			$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang,type,id_list,photo,link";



			$table='baiviet';



			break;

	}

		$items= $db->rawQuery("select $field from #_baiviet_list $where and hienthi<>0 and type=? order by stt asc, id desc limit $startpoint,$item",array($type));
		$itemsNext= $db->rawQuery("select $field from #_baiviet_list where hienthi<>0 $where and type='$type' order by stt asc, id desc limit $startpointNext,$item");
		// $result['html']=$func->getTemplateList($items);
		$result['count-list']=count($itemsNext);
		$output = '';
		foreach($items as $key=>$vit){
		$output .= '<div class="item10 col-3 mb20 w-50-m none-border">
						<div class="item-brand">
							<div class="brand-hover o-hidden p-relative mb10 mt10i">
								<a href="'.$vit["type"].'/'.$vit["tenkhongdau"].'"
									title="'.$value["ten_$lang"].'">

									<div class="thumb-brands t-center p-relative">

										<div class="p-relative">

											<img width="190" height="60"
												src="'._thumbs.'/190x60x2/'._upload_baiviet_l.$vit['photo'].'"
												alt="'.$vit["ten_$lang"].'" '.$func->errorImg().' />

										</div>

									</div>
								</a>
							</div>
						</div>

					</div>';
		}
		$result["html"] = $output;

		echo json_encode($result);
?>
