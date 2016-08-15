<?php
/**
 * Created by PhpStorm.
 * User: mahbub-shohag
 * Date: 5/28/2016
 * Time: 12:54 PM
 */

public function get_recent_post(){

    $recent_post = array();
    $this->db->select("*");
    $conditionarray = array(
        'is_act' => '1',
        //'post_display' => 'banner_middle'
    );
    $tablename = '`post`';
    $this->db->where($conditionarray);
    $this->db->order_by("post_date", "DESC");
    $this->db->limit(2, 0);
    //$this->db->limit(6);


    $query = $this->db->get($tablename)->result();

    if(count($query)>0){

        $recent_post['0'] = $query;

    }

    $tablename1 = '`post`';
    $this->db->where($conditionarray);
    $this->db->order_by("post_date", "DESC");
    $this->db->limit(2, 2);
    //$this->db->limit(6);


    $query1 = $this->db->get($tablename1)->result();

    if(count($query1)>0){

        $recent_post['1'] = $query1;

    }

    $tablename2 = '`post`';
    $this->db->where($conditionarray);
    $this->db->order_by("post_date", "DESC");
    $this->db->limit(2, 4);
    //$this->db->limit(6);


    $query2 = $this->db->get($tablename2)->result();

    if(count($query2)>0){

        $recent_post['2'] = $query2;

    }


    if($recent_post)
        return $recent_post;
    else
        return false;
}
?>