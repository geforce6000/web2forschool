<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19 0019
 * Time: 下午 02:47
 */
  class Article extends CI_Controller {

  	public function test() {
  		echo "Hello World!";
	  }

	  public function id() { //根据articleid调取一条记录并返回给article视图显示
		  $this->load->model('Article_model','article');
		  //调用模型，Article_model是article_model.php中的类名，后面的article是调用后形成的别名，方便控制器使用
		  $data=$this->article->getArticlebyId($this->uri->segment(3));
		  //调用模型中的getArticlebyId方法，传递一个参数，返回结果是一个对象，不是数组
		  if($this->db->affected_rows()==0) {
			  $res['found']=false; //affected_rows()==0 表示没有查询到数据
		  } else {
			  $res['found']=true;
			  $res['data']=$data; //把查询到的数据传到$res数组中
		  }
		  return $data;
	  }

  }