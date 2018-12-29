<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Forms

	$this->form_validation->set_rules('username', 'Username', 'required');
	par1=The field name - the exact name you’ve given the form field.
	par2=A “human” name for this field, which will be inserted into the error message. For example, if your field is named “user” you might give it a human name of “Username”.
	par3=The validation rules for this form field.
	par4=(optional) Set custom error messages on any rules given for current field. If not provided will use the default one.

*/
class Cnt3 extends CI_Controller{

	public function f1(){
		echo "<div style='background-color: yellow;'> ".__CLASS__." : ".__FUNCTION__." </div>";
	}

	public function index2(){
		$this->load->view('meta/header', $data); // 
		$this->load->view('view2', $data); // 
		$this->load->view('meta/footer', $data); // 
	}

	public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        // validations
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('forms/form1');
        }
        else
        {
                $this->load->view('forms/fs1');
        }
    }
}

?>