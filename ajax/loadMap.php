<?php 
	require_once 'ajaxConfig.php';
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$content = $db->rawQueryOne("select iframe_map from #_map where id=?",array($id));
	}else{
		$content = $db->rawQueryOne("select iframe_map from #_setting",array($id));
	}
	
	echo htmlspecialchars_decode($content['iframe_map']);
?>