
<?php
    require_once 'ajaxConfig.php';
    $mail = array(
        'ho-tro'=>'Hỗ trợ tư vấn',
        'nhan-tin'=>'Đăng ký nhận tin',
        'ten_vi'=>'Họ tên',
        'email'=>'Email',
        'dienthoai'=>'Số điện thoại',
        'noidung'=>'Ghi chú'
    );
    if($func->isAjax()){
        @$data = $_POST['data'];
        @$check = $_POST['check'];
        $body = "";
        foreach($data as $key => $value){
            $body .= "<p>".$mail[$key].": ".$value."</p>";
        }
        if(isset($_POST['check'])){
            foreach($check as $key => $value){
                $data[$key] = json_encode($value);
            }
        }
        $data['ngaytao']=time();
        $data['hienthi']=1;
        $insert=$db->insert('newsletter',$data);
        $func->sendMailAjax($row_setting['email'],$mail[$data['type']],$body,array($row_setting['email']),null,null);
        if($insert){
            $response['status']=200;
            $response['error']='success';
            $response['message']='Thêm dữ liệu thành công';
        }else{
            $response['status']=201;
            $response['error']='error';
            $response['message']='Thêm dữ liệu không thành công';
        }
        echo json_encode($response);
    }
?>