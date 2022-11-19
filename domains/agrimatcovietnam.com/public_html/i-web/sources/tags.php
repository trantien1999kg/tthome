<?php if(!defined('_source')) die("Error");

$folder=_upload_baiviet;

$folder_img=_upload_hinhanh;

$table = $GLOBAL[$com][$type];

switch($act){
	#===================================================
	case "man":
		$apiProduct->getMans();
		$template = "tags/items";
		break;
	case "add":
		$template = "tags/item_add";
		break;
	case "edit":
		$apiProduct->getMan();
		$template = "tags/item_add";
		break;
	case "save":
		$apiProduct->saveMan();
		break;
	case "delete":
		$apiProduct->deleteMan();
		break;
	default:
		$template = "index";
}
?>
