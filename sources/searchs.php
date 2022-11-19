<?php

    $alias = (isset($_REQUEST['alias'])) ? addslashes($_REQUEST['alias']) : "";

    $sortby = (isset($_REQUEST['sortby'])) ? addslashes($_REQUEST['sortby']) : "";

    $show = (isset($_REQUEST['show'])) ? addslashes($_REQUEST['show']) : "";

    $is_brand = (isset($_REQUEST['is_brand'])) ? addslashes($_REQUEST['is_brand']) : "";

    $is_price = (isset($_REQUEST['is_price'])) ? addslashes($_REQUEST['is_price']) : "";

    $is_gender = (isset($_REQUEST['is_gender'])) ? addslashes($_REQUEST['is_gender']) : "";

    $is_option = (isset($_REQUEST['is_option'])) ? addslashes($_REQUEST['is_option']) : "";

    $is_circle = (isset($_REQUEST['is_circle'])) ? addslashes($_REQUEST['is_circle']) : "";

    $is_size = (isset($_REQUEST['is_size'])) ? addslashes($_REQUEST['is_size']) : "";

    $is_item = (isset($_REQUEST['is_item'])) ? addslashes($_REQUEST['is_item']) : "";

    $is_capacity = (isset($_REQUEST['is_capacity'])) ? addslashes($_REQUEST['is_capacity']) : "";

    $is_concent = (isset($_REQUEST['is_concent'])) ? addslashes($_REQUEST['is_concent']) : "";

    $is_skin = (isset($_REQUEST['is_skin'])) ? addslashes($_REQUEST['is_skin']) : "";

    $keywords = (isset($_REQUEST['keywords'])) ? addslashes($_REQUEST['keywords']) : "";

    $url_page='';

    if($_GET['href']){



        $get_link=base64_decode($_GET['href']);



        $ex=explode('/',$get_link);



        $com_tag=$ex[count($ex)-2];



        $alias_tag=$ex[count($ex)-1];



    }

    if(!empty($alias_tag) && $alias_tag!=$type){



        $row_list=$db->rawQueryOne("select id from #_baiviet_list where hienthi=1 and tenkhongdau_$lang=? and type=?",array($alias_tag,$type));



        if($row_list){



            $where=' and id_list='.$row_list['id'];



        }
        
        
        $row_cat=$db->rawQueryOne("select id from #_baiviet_cat where hienthi=1 and tenkhongdau_$lang=? and type=?",array($alias_tag,$type));



        if($row_cat){



            $where=' and id_cat='.$row_cat['id'];



        }else{



            $row_item=$db->rawQueryOne("select id from #_baiviet_item where hienthi=1 and tenkhongdau_$lang=? and type=?",array($alias_tag,$type));



            if($row_item){



                $where=' and id_item='.$row_item['id'];



            }



        }



        



    }

    if(!empty($keywords)){



        $where .= " and (ten_$lang like '%".$keywords."%' or masp like '%".$keywords."%')";



        $url_page .= '&keywords='.$keywords;

    }

    if($is_brand!=''){



        $where .= " and id_thuonghieu in ({$is_brand})";



        $url_page .= '&is_brand='.$is_brand;

    }

    if($is_size!=''){



        $arr_option = explode(',',$is_size);



        $where .= " and (";



        foreach($arr_option as $key => $vstr){



            if($key==0){

                $where .= " find_in_set($vstr,id_size)";

            }else{



                $where .= " or find_in_set($vstr,id_size)";



            }

            

        }


        $where .= ")";


        $url_page .= '&is_size='.$is_size;


    }



    if($is_price!=''){

        $arr_option = explode(',',$is_price);

        $where .= " and (";

        foreach($arr_option as $key=>$vstr){

            $gia_s=$db->rawQueryOne("select max,min from #_baiviet where type=? and id=?",array('gia-ban',$vstr));

            if($key==0){

                $where .= " giaban between {$gia_s['min']} and {$gia_s['max']}";

            }else{

                $where .= " or giaban between {$gia_s['min']} and {$gia_s['max']}";

            }
        }


        $where .= ")";


        $url_page .= '&is_price='.$is_price;

    }

    if($is_gender!=''){



        $where .= " and gioitinh in('{$is_gender}')";



        $url_page .= '&is_gender='.$is_gender;

    }

    if($is_option!=''){



        $arr_option = explode(',',$is_option);



        $where .= " and (";



        foreach($arr_option as $key=>$vstr){



            if($key==0){



                $where .= " find_in_set('$vstr', chungloai )";



            }else{



                $where .= " or find_in_set('$vstr', chungloai )";



            }

            

        }

        

        $where .= ")";



        $url_page .= '&is_option='.$is_option;



    }



    if($is_circle!=''){



        $arr_circle = explode(',',$is_circle);



        $where .= " and (";



        foreach($arr_circle as $key=>$vstr){



            if($key==0){



                $where .= " find_in_set('$vstr', duongkinh )";



            }else{



                $where .= " or find_in_set('$vstr', duongkinh )";



            }

            

        } 

        $where .= ")";



        $url_page .= '&is_circle='.$is_circle;

    }

    if($is_item!=''){



        $where .= " and loaimathang in({$is_item})";



        $url_page .= '&is_item='.$is_item;

    }

    if($is_capacity!=''){



        $arr_capacity = explode(',',$is_capacity);



        $where .= " and (";



        foreach($arr_capacity as $key=>$vstr){



            if($key==0){



                $where .= " find_in_set('$vstr', dungtich )";



            }else{



                $where .= " or find_in_set('$vstr', dungtich )";



            }

            

        }

        $where .= ")";



        $url_page .= '&is_capacity='.$is_capacity;

    }

    if($is_concent!=''){



        $arr_concent = explode(',',$is_concent);



        $where .= " and (";



        foreach($arr_concent as $key=>$vstr){



            if($key==0){



                $where .= " find_in_set('$vstr', nongdo )";



            }else{

                $where .= " or find_in_set('$vstr', nongdo )";

            }

            

        }

        $where .= ")";



        $url_page .= '&is_concent='.$is_concent;

    }

    if($is_skin!=''){



        $arr_skin = explode(',',$is_skin);



        $where .= " and (";



        foreach($arr_skin as $key=>$vstr){



            if($key==0){



                $where .= " find_in_set('$vstr', loaida )";



            }else{



                $where .= " or find_in_set('$vstr', loaida )";



            }

            

        }

        $where .= ")";



        $url_page .= '&is_skin='.$is_skin;

    }





    if(!empty($sortby)){



        if($sortby == 'is_newest'){



            $where.=' and moi=1';



            $url_page .= '&sortby='.$sortby;



        }else{



            $ex_sort_by = str_replace('-', ' ', $sortby);



            $order_by = ' order by '.$ex_sort_by;



            $url_page .= '&sortby='.$sortby;

        }



    }else{



        $order_by = ' order by stt asc, id desc';



    }



    if(!empty($show)){



        $per_page=$show;



    }else{



        $per_page = $row_setting['page_sp'];



    }



    $startpoint = ($page * $per_page) - $per_page;



    $limit = ' limit '.$startpoint.','.$per_page;



    $sql = "SELECT * from #_baiviet where type='{$type}' {$where} {$order_by} ".$limit;



    $tintuc = $db->rawQuery($sql);

    

    $sqlq = "SELECT COUNT(*) as `numb` from #_baiviet where type=? {$where} {$order_by}";



    $count = $db->rawQueryOne($sqlq,array($type));



    $total = $count['numb'];

       

    if($func->isAjax()){

        

        $url = base64_decode($_GET['href']).'?'.ltrim($url_page,'&');



        $paging = $func->pagination_ajax_s($total,$per_page,$page,$url);

        $khuyenmai = '';
        $tragop='';
        $giacu ='';
        $giaban='';
        $output='';
        $quatang='';


        $html['resx'] = $_GET;

        foreach($tintuc as $key=>$val){

            if($func->percentPrice($val["giacu"],$val["giaban"])>0){

                $khuyenmai='<div class="home-product__header-sale">

                        <span class="home-product__header-sale-percent">'.$func->percentPrice($val["giacu"],$val["giaban"]).'</span>

                        <span class="home-product__header-sale-status">GIẢM</span>

                    </div>';

            }

            if($val["tragop"]==1){

                $tragop ='<span class="label-installment">

                            <img src="./assets/images/tragop.png" alt="Label trả góp">

                            </span>';
            }

           

                if($val["giacu"]!=0){

                    $giacu ='<del class="col-8 w-100-m">'.$func->changeMoney($val["giacu"],$lang).'</del>';
                }

           

             if($val["id_quatang"]!=0){ 

               $quatang =  '<span class="label-present">

                    <img src="./assets/images/quatang.png" alt="Label trả góp">

                </span>';

             }


            if($val["giaban"]!=0){
                $giaban = '<span class="wrap-category__index-boxproduct-price">'.$func->changeMoney($val["giaban"],$lang).'</span>';
            }else{
                $giaban = '<span class="wrap-category__index-boxproduct-price">Liên hệ</span>';
            }

            $output.= '<div class="col4 l-3 m-3 c-6 mb8">
                                    
            <div class="wrap-category__index-boxproduct wrap-category__index-boxproduct--modifiers">

                <div class="wrap-category__index-boxproduct-img wrap-category__index-boxproduct-img--modifiers p-relative">

                    <a href="'.$val["type"].'/'.$val["tenkhongdau_$lang"].'" title="'.$val["ten_$lang"].'" class="d-block hover-left">

                        <img loading="lazy" src="resize1/183x183/1/'._upload_baiviet_l.$val["photo"].'" alt="'.$val["ten_$lang"].'" '.$func->errorImg().'>

                    </a>
                    '.$tragop.'
                    '.$quatang.'
                </div>

                <div class="wrap-category__index-boxproduct-content">

                    <h3 class="wrap-category__index-boxproduct-content-title line-2">

                        <a href="'.$val["type"].'/'.$val["tenkhongdau_$lang"].'" class="wrap-category__index-boxproduct-content-link" title="'.$val["ten_$lang"].'">'.$val["ten_$lang"].'</a>

                    </h3>

                    '.$giaban.'
                    <div class="wrap-category__index-boxproduct-content-bottom d-flex align-item-center flex-wrap">

                        '.$giacu.'

                        <span class="col-4 w-100-m t-right"><i class="fas fa-eye"></i>'.$val["luotxem"].'</span>

                    </div>

                </div>

            </div>

             </div>';

        
        }
       


        
        
        $html['page'] = $paging;

        $html['col'] = $output;

        $html['show'] = $show;

        $html["link"] = $sql;



        echo json_encode($html);


    }else{



        $url = $func->getCurrentPageURL();



        $paging = $func->pagination($total,$per_page,$page,$url);



        $title = _ketqua.' '._co.' '.$total.' '.'sản phẩm được tìm thấy!';



    }



    $arr=array(array('alias'=>'tim-kiem'.$url_page,'name'=>'kết quả tìm kiếm'));



    $str_breadcrumbs =$breadcrumbs->getUrl('Trang chủ',$arr);



?>