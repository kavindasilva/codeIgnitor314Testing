<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Cnt2 extends CI_Controller{

	public function f1(){
		echo "<div style='background-color: yellow;'> ".__CLASS__." : ".__FUNCTION__." </div>";
	}

	public function f2(){
		$data['disp']=1;
		//echo "<div style='background-color: yellow;'> ".__CLASS__." : ".__FUNCTION__." </div>"; //working
		//$this->load->view('view2'); // ok
		//$this->load->view('view2'); // 
		//$this->load->helper('url');
		$this->load->view('meta/header', $data); // 
		$this->load->view('view2', $data); // 
		$this->load->view('meta/footer', $data); // 
	}
}

?>