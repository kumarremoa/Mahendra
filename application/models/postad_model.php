<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Postad_model extends CI_Model{
       public function postad_creat(){
             /*AD type business or consumer*/
                    $cur_date = date("Y")."".date("m");
                        if($this->input->post('checkbox_toggle') == 'Yes'){
                                $ad_type = 'business';
                                
                                $target_dir = "./pictures/business_logos/";
                            
                        // $target_file = $target_dir . basename($_FILES["file"]["name"]);
                        // $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                    if ($_FILES["file"]["name"] != '') {
                                       $new_name = explode(".", $_FILES["file"]["name"]);
                            $business_logo = "buslogo_".time().".".end($new_name);
                            move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."buslogo_".time().".".end($new_name));
                                    }
                                    else{
                                        $business_logo = '';
                                    }
                    
                        }
                        else{
                            $ad_type = 'consumer';
                            $business_logo = '';
                        }

                        /*is free or not*/
                        if (($this->input->post('package_type') == 1) && $this->input->post('package_urgent') == 0) {
                            $isfree = 1;
                            $payment = 1;
                        }
                        else{
                            $isfree = 0;
                            $payment = 0;
                        }
                         /*web-link for free */
              if ($this->input->post('package_type') == 1) {
                            $url = "";
                        }
                        
                        /*web-link for gold*/
              if ($this->input->post('package_type') == 2) {
                            $url = $this->input->post("gold_weblink");
                        }
                        /*web-link for platinum*/
              if ($this->input->post('package_type') == 3) {
                            $url = $this->input->post("platinum_weblink");
                        }


                        $data = array('ad_prefix' => $cur_date,
                                    'login_id'  => $this->input->post('login_id'),
                                    'package_type'=> $this->input->post('package_type'),
                                    'urgent_package' => $this->input->post('package_urgent'),
                                    'package_name' => $ad_type."_".$this->input->post('package_name'),
                                    'deal_tag'    => $this->input->post('dealtag'),
                                    'deal_desc'   =>$this->input->post('dealdescription'),
                                     'currency'   =>$this->input->post('checkbox_toggle1'),
                                    'service_type'=> $this->input->post('typeservice'),
                                    'services'    => $this->input->post('checkbox_services'),
                                    'price_type'  => $this->input->post('price_type'),
                                    'price'       => $this->input->post('priceamount'),
                                    'web_link'    => $url,
                                    'category_id' => $this->input->post('category_id'),
                                    'sub_cat_id'  => $this->input->post('sub_id'),
                                    'sub_scat_id' => $this->input->post('sub_sub_id'),
                                    'ad_type'     => $ad_type,
                                    'created_on'   => date('d-m-Y h:i:s'),
                                    'updated_on'   => date('d-m-Y h:i:s'),
                                    'terms_conditions' =>$this->input->post('terms_condition'),
                                    'payment_status' => $payment,
                                    'ad_status'     => 0,
                                    'is_free' => $isfree
                                    );
                // echo "<pre>"; print_r($data); exit;
                    $this->db->insert('postad', $data);

                       $insert_id = $this->db->insert_id();
                       $this->session->set_userdata("last_insert_id", $insert_id);
                       /*location map*/
                    $loc = array('ad_id' => $insert_id,
                                'loc_name' => $this->input->post('location'),
                                'latt' => $this->input->post('lattitude'),
                                'longg' => $this->input->post('longtitude'),
                                'loc_city' => $this->input->post('loc_city'),
                                'location_name' => $this->input->post('location_name')
                                );
                        $this->db->insert("location", $loc);

                         /*platinum package*/
                    if ($this->input->post('package_type') == 3) {
                       $plat_data = array('ad_id' => $insert_id,
                                            'marquee'=>$this->input->post('marquee_title'),
                                            'ad_validfrom' => date("d-m-Y H:i:s"),
                                            'ad_validto' => date('d-m-Y H:i:s', strtotime("+30 days")),
                                            'status' => 1,
                                            'posted_date' => date("d-m-Y H:i:s")
                                    );
                       $this->db->insert('platinum_ads', $plat_data);
                    }



                     /*image upload*/
                     if ($this->input->post('pic_hide')) {
                             $i=1;
                       foreach($this->input->post('pic_hide') as $rawData){ 
                                $filteredData = explode(',', $rawData);
                            $unencoded = base64_decode($filteredData[1]);
                            //Create the image 
                            $fp = fopen('./pictures/'.time().$i.'.jpg', 'w');
                            $plat_img = array('ad_id' => $insert_id,
                                        'img_name' => time().$i.'.jpg',
                                        'img_time' => date('d-m-Y H:i:s'),
                                        'status' => 1,
                                        'bus_logo' => $business_logo
                                    );
                        $this->db->insert("ad_img", $plat_img);
                            fwrite($fp, $unencoded);
                            fclose($fp); 
                            $i++;
                       }
                     }

                       /*video upload platinum*/
                       if($this->input->post('file_video_platinum')){
                   $plat_video = array('ad_id' => $insert_id,
                                    'video_name' => $this->input->post('file_video_platinum'),
                                    'uploaded_time' => date('d-m-Y H:i:s')
                                );
                    $this->db->insert("videos", $plat_video);
                                }
                           

                
                    
                            

                    /*contact info*/
                    if ( $ad_type == 'consumer') {
                        $plat_cont = array('ad_id' => $insert_id,
                                    'contact_name' => $this->input->post('conscontname'),
                                    'email' => $this->input->post('consemail'),
                                    'mobile' => $this->input->post('conssmblno')
                                );
                        $this->db->insert("contactinfo_consumer", $plat_cont);
                    }

                    /*contact info*/
                    if ( $ad_type == 'business') {
                        $plat_cont = array('ad_id' => $insert_id,
                                    'bus_name' => $this->input->post('busname'),
                                    'contact_person' => $this->input->post('buscontname'),
                                    'email' => $this->input->post('busemail'),
                                    'mobile'=>$this->input->post('bussmblno')
                                );
                        $this->db->insert("contactinfo_business", $plat_cont);
                    }

                    
                    if ($insert_id != '') {
                        $this->session->set_userdata("postad_success","Ad Posted Successfully!!");
                        $this->session->set_userdata("postad_time",time());
                       }
            }


            public function getloc_details($pid){
                $this->db->select();
                $this->db->from("uk_postcodes");
                $this->db->where("postcode", $pid);
                $this->db->or_where("town", $pid);
                $this->db->group_by("town");
                return $this->db->get()->result();
            }

            /*coaching and training*/
            public function busconcount_profcoach(){
                $data = date("Y-m-d H:i:s");
                $this->db->select("(SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND ad_status = 1 AND expire_data >='$data' AND(ad_type = 'business' || ad_type = 'consumer')) AS allbustype,
                (SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND ad_status = 1 AND expire_data >='$data' AND ad_type = 'business') AS business,
                (SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND ad_status = 1 AND expire_data >='$data' AND ad_type = 'consumer') AS consumer");
                $rs = $this->db->get();
                return $rs->result();
            }
            public function sellerneeded_profcoach(){
                $date = date("Y-m-d H:i:s");
                $this->db->select("(SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND services = 'service_provider' AND ad_status = 1 AND expire_data >='$date') AS provider,
                (SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND services = 'service_needed' AND ad_status = 1 AND expire_data >='$date') AS needed");
                $rs = $this->db->get();
                return $rs->result();
            }
            public function deals_pck_profcoach(){
                $data = date("Y-m-d H:i:s");
                $this->db->select("(SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND urgent_package != '0'  AND ad_status = 1 AND expire_data >='$data') AS urgentcount,
                (SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND package_type = 3 AND urgent_package = '0'  AND ad_status = 1 AND expire_data >='$data') AS platinumcount,
                (SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND package_type = 2 AND urgent_package = '0'  AND ad_status = 1 AND expire_data >='$data') AS goldcount,
                (SELECT COUNT(*) FROM postad WHERE category_id = '2' AND sub_cat_id = 9 AND sub_scat_id = 25 AND package_type = 1 AND urgent_package = '0'  AND ad_status = 1 AND expire_data >='$data') AS freecount");
                $rs = $this->db->get();
                return $rs->result();
            }
            public function count_profcoach_view(){
                $this->db->select("ad.*, img.*, COUNT(`img`.`ad_id`) AS img_count, loc.*, lg.*");
                $this->db->select("DATE_FORMAT(STR_TO_DATE(ad.created_on,
                '%d-%m-%Y %H:%i:%s'), '%Y-%m-%d %H:%i:%s') as dtime", FALSE);
                $this->db->from("postad AS ad");
                $this->db->join("ad_img AS img", "img.ad_id = ad.ad_id", "join");
                $this->db->join('location as loc', "loc.ad_id = ad.ad_id", 'join');
                $this->db->join('login as lg', "lg.login_id = ad.login_id", 'join');
                $this->db->where("ad.category_id", "2");
                $this->db->where("ad.sub_cat_id", "9");
                $this->db->where("ad.sub_scat_id", "25");
                $this->db->where("ad.ad_status", "1");
                $this->db->where("ad.expire_data >= ", date("Y-m-d H:i:s"));
                $this->db->group_by(" img.ad_id");
                $this->db->order_by('dtime', 'DESC');
                $m_res = $this->db->get();

                return $m_res->result();
                
            }

            public function profcoach_view($data){
                $this->db->select("ad.*, img.*, COUNT(`img`.`ad_id`) AS img_count, loc.*, lg.*");
                $this->db->select("DATE_FORMAT(STR_TO_DATE(ad.created_on,
                '%d-%m-%Y %H:%i:%s'), '%Y-%m-%d %H:%i:%s') as dtime", FALSE);
                //$this->db->from("postad AS ad");
                $this->db->join("ad_img AS img", "img.ad_id = ad.ad_id", "join");
                $this->db->join('location as loc', "loc.ad_id = ad.ad_id", 'join');
                $this->db->join('login as lg', "lg.login_id = ad.login_id", 'join');
                $this->db->where("ad.category_id", "2");
                $this->db->where("ad.sub_cat_id", "9");
                $this->db->where("ad.sub_scat_id", "25");
                $this->db->where("ad.ad_status", "1");
                $this->db->where("ad.expire_data >= ", date("Y-m-d H:i:s"));
                $this->db->group_by(" img.ad_id");
                $this->db->order_by('dtime', 'DESC');
                $m_res = $this->db->get('postad AS ad', $data['limit'],$data['start']);
                // echo $this->db->last_query(); exit;

                if($m_res->num_rows() > 0){
                    return $m_res->result();
                }
                else{
                    return array();
                }
            }

            public function count_profcoach_search(){
            $profpop = array_merge($this->session->userdata('prof_service'),$this->session->userdata('pop_service'));
            $search_bustype = $this->session->userdata('search_bustype');
            $dealurgent = $this->session->userdata('dealurgent');
            $dealtitle = $this->session->userdata('dealtitle');
            $dealprice = $this->session->userdata('dealprice');
            $recentdays = $this->session->userdata('recentdays');
            $location = $this->session->userdata('location');
            $seller = $this->session->userdata('seller_deals');
            $this->db->select("ad.*, img.*, COUNT(`img`.`ad_id`) AS img_count, loc.*, lg.*");
            $this->db->select("DATE_FORMAT(STR_TO_DATE(ad.created_on,
            '%d-%m-%Y %H:%i:%s'), '%Y-%m-%d %H:%i:%s') as dtime", FALSE);
            $this->db->from("postad AS ad");
            $this->db->join("ad_img AS img", "img.ad_id = ad.ad_id", "left");
            $this->db->join('location as loc', "loc.ad_id = ad.ad_id", 'left');
            $this->db->join('login as lg', "lg.login_id = ad.login_id", 'join');
            $this->db->where("ad.category_id", "2");
            $this->db->where("ad.sub_cat_id", "9");
            $this->db->where("ad.sub_scat_id", "25");
            $this->db->where("ad.ad_status", "1");
            if (!empty($profpop)) {
                $this->db->where_in('ad.sub_scat_id', $profpop);
            }
            if ($search_bustype) {
                if ($search_bustype == 'business' || $search_bustype == 'consumer') {
                    $this->db->where("ad.ad_type", $search_bustype);
                }
            }
            /*package search*/
            if (!empty($dealurgent)) {
                $pcklist = [];
                if (in_array("0", $dealurgent)) {
                    $this->db->where('ad.urgent_package !=', '0');
                }
                else{
                    $this->db->where('ad.urgent_package =', '0');
                }
                if (in_array("3", $dealurgent)){
                    array_push($pcklist, '3');
                }
                if (in_array("2", $dealurgent)){
                    array_push($pcklist, '2');
                }
                if (in_array("1", $dealurgent)){
                    array_push($pcklist, '1');
                }
                if (!empty($pcklist)) {
                    $this->db->where_in('ad.package_type', $pcklist);
                }
                
            }

            /*seller search*/
            if (!empty($seller)) {
                $this->db->where_in('ad.services', $seller);
            }

            /*deal posted days 24hr/3day/7day/14day/1month */
            if ($recentdays == 'last24hours'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-1 day"))));
            }
            else if ($recentdays == 'last3days'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-3 days"))));
            }
            else if ($recentdays == 'last7days'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-7 days"))));
            }
            else if ($recentdays == 'last14days'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-14 days"))));
            }   
            else if ($recentdays == 'last1month'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-1 month"))));
            }

            /*location search*/
            if ($location) {
                $this->db->where("(loc.loc_name LIKE '$location%' OR loc.loc_name LIKE '%$location' OR loc.loc_name LIKE '%$location%')");
            }


            $this->db->group_by(" img.ad_id");
                /*deal title ascending or descending*/
                    if ($dealtitle == 'atoz') {
                        $this->db->order_by("ad.deal_tag","ASC");
                    }
                    else if ($dealtitle == 'ztoa'){
                        $this->db->order_by("ad.deal_tag", "DESC");
                    }
                    /*deal price ascending or descending*/
                    if ($dealprice == 'lowtohigh'){
                        $this->db->order_by("CAST(`ad`.`price` AS UNSIGNED)", "ASC");
                    }
                    else if ($dealprice == 'hightolow'){
                        $this->db->order_by("CAST(`ad`.`price` AS UNSIGNED)", "DESC");
                    }
                    else{
                        $this->db->order_by("ad.ad_id", "DESC");
                    }
            $this->db->order_by('dtime', 'DESC');
            $m_res = $this->db->get();
                return $m_res->result();
        }
        public function profcoach_search($data){
            $profpop = array_merge($this->session->userdata('prof_service'),$this->session->userdata('pop_service'));
            $search_bustype = $this->session->userdata('search_bustype');
            $dealurgent = $this->session->userdata('dealurgent');
            $dealtitle = $this->session->userdata('dealtitle');
            $dealprice = $this->session->userdata('dealprice');
            $recentdays = $this->session->userdata('recentdays');
            $location = $this->session->userdata('location');
            $seller = $this->session->userdata('seller_deals');
            $this->db->select("ad.*, img.*, COUNT(`img`.`ad_id`) AS img_count, loc.*, lg.*");
            $this->db->select("DATE_FORMAT(STR_TO_DATE(ad.created_on,
            '%d-%m-%Y %H:%i:%s'), '%Y-%m-%d %H:%i:%s') as dtime", FALSE);
            $this->db->join("ad_img AS img", "img.ad_id = ad.ad_id", "left");
            $this->db->join('location as loc', "loc.ad_id = ad.ad_id", 'left');
            $this->db->join('login as lg', "lg.login_id = ad.login_id", 'join');
            $this->db->where("ad.category_id", "2");
            $this->db->where("ad.sub_cat_id", "9");
            $this->db->where("ad.sub_scat_id", "25");
            $this->db->where("ad.ad_status", "1");
            if (!empty($profpop)) {
                $this->db->where_in('ad.sub_scat_id', $profpop);
            }
            if ($search_bustype) {
                if ($search_bustype == 'business' || $search_bustype == 'consumer') {
                    $this->db->where("ad.ad_type", $search_bustype);
                }
            }
            /*package search*/
            if (!empty($dealurgent)) {
                $pcklist = [];
                if (in_array("0", $dealurgent)) {
                    $this->db->where('ad.urgent_package !=', '0');
                }
                else{
                    $this->db->where('ad.urgent_package =', '0');
                }
                if (in_array(3, $dealurgent)){
                    array_push($pcklist, 3);
                }
                if (in_array(2, $dealurgent)){
                    array_push($pcklist, 2);
                }
                if (in_array(1, $dealurgent)){
                    array_push($pcklist, 1);
                }
                if (!empty($pcklist)) {
                    $this->db->where_in('ad.package_type', $pcklist);
                }
                
            }
            
            /*seller search*/
            if (!empty($seller)) {
                $this->db->where_in('ad.services', $seller);
            }

            /*deal posted days 24hr/3day/7day/14day/1month */
            if ($recentdays == 'last24hours'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-1 day"))));
            }
            else if ($recentdays == 'last3days'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-3 days"))));
            }
            else if ($recentdays == 'last7days'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-7 days"))));
            }
            else if ($recentdays == 'last14days'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-14 days"))));
            }   
            else if ($recentdays == 'last1month'){
                $this->db->where("UNIX_TIMESTAMP(STR_TO_DATE(ad.`created_on`, '%d-%m-%Y %h:%i:%s')) >=", strtotime(date("d-m-Y H:i:s", strtotime("-1 month"))));
            }

            /*location search*/
            if ($location) {
                $this->db->where("(loc.loc_name LIKE '$location%' OR loc.loc_name LIKE '%$location' OR loc.loc_name LIKE '%$location%')");
            }


            $this->db->group_by(" img.ad_id");
                /*deal title ascending or descending*/
                    if ($dealtitle == 'atoz') {
                        $this->db->order_by("ad.deal_tag","ASC");
                    }
                    else if ($dealtitle == 'ztoa'){
                        $this->db->order_by("ad.deal_tag", "DESC");
                    }
                    /*deal price ascending or descending*/
                    if ($dealprice == 'lowtohigh'){
                        $this->db->order_by("CAST(`ad`.`price` AS UNSIGNED)", "ASC");
                    }
                    else if ($dealprice == 'hightolow'){
                        $this->db->order_by("CAST(`ad`.`price` AS UNSIGNED)", "DESC");
                    }
                    else{
                        $this->db->order_by("ad.ad_id", "DESC");
                    }
                    $m_res = $this->db->get('postad AS ad',$data['limit'], $data['start']);
            // echo $this->db->last_query(); exit;
            if($m_res->num_rows() > 0){
                return $m_res->result();
            }
            else{
                return array();
            }
        }


}
?>