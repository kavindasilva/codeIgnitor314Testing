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
		$data=1;
		//echo "<div style='background-color: yellow;'> ".__CLASS__." : ".__FUNCTION__." </div>"; //working
		//$this->load->view('view2'); // ok
		//$this->load->view('view2'); // 
		$this->load->view('view2', $data); // 
	}
}

?>