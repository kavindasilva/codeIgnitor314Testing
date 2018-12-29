<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Cont1 extends CI_Controller
{
	
	function __sconstruct()
	{
		//parent::__construct();
		# code...
		echo __CLASS__.":".__FUNCTION__;
	}

	function index(){ // this should be available. unless 404 page not found
		echo __CLASS__.":".__FUNCTION__;
	}/**/

	public function home(){
		echo __CLASS__.":".__FUNCTION__;
		//$this->load->view("welcome_message");
		//$this->load->view('welcome_message');
		$this->load->view('welcome_message');
	}

	function defaulat(){
		echo __CLASS__.":".__FUNCTION__;
	}
}















?>