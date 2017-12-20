<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19 0019
 * Time: 下午 02:09
 */

class Article_model extends CI_model {
	/*
	 * 根据传入的$id查询一篇文章返回，同时每点击一次，点击数加1
	 * $id为整数，文章编号，
	 */
	public function getArticlebyId ($id){
		$articledata=$this->db->from('article')
			->where('articleid',$id)
			->get();
		$data = $articledata->result(); //$data是一个对象
		$data[0]->hits += 1;
		$this->db->where('articleid', $id)
			->replace('article', $data[0]);
		return $data[0]; //return出去的数据是一个对象
	}

}