<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
	function __construct() {
		parent::__construct();
		$this -> load -> model('registration');
		//$this -> load -> helper(array('form', 'url'));
		$this -> load -> database();
		
	}

	function index()
	{
		if(!($this->session->userdata('user_data'))){
		$default = array(
                   'login_status'  => 'FALSE'
               );
        $this->session->set_userdata($default);

        $data['login_status'] = 'FALSE';
        $data['login_info'] = 'You are not logged in. ';
		}else{
			$data['login_status'] = 'TRUE';
			$data['user_name'] =  $this->session->userdata('user_data');
			$data['login_info'] = $this->session->userdata('login_info');

		}


		$sess_data = $this->session->all_userdata();
		$session_id = $this->session->userdata('session_id');
		// echo $session_id."</br></br>";
		//$this->session->sess_destroy();

		// echo "<pre>"; print_r($sess_data);echo "</pre>";exit;
		// uncomment this to view session data
		// exit;
        $this->load->view('new_home',$data);
	}

	public function log_in_status(){

	}
	public function reg_home(){
		$this->load->view('member_registration');
	}

	public function member_registration(){
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $onames = $_POST['onames'];
        $dob = $_POST['dob'];
        $email =  $_POST['email'];
        $user_name =  $_POST['user_name'];
        $pwd = $_POST['pwd'];
        $pwd =  md5($pwd);
		
    	$this->registration->member_reg($fname,$sname,$onames,$dob,$email,$user_name,$pwd);
	}

	public function login(){
		$result = $this->registration->verification();
		if ($result == 'VERIFICATION_ERROR') {
			$default = array(
                   'login_status'  => 'FALSE'
               );
        $this->session->set_userdata($default);
        $data['login_status'] = 'FALSE';
        $data['login_info'] = "The password you entered is invalid. ";
        $this->load->view('homepage',$data);
		}elseif ($result == 'UNREGISTERED') {
			$result = $this->registration->verification();
			$default = array(
                   'login_status'  => 'FALSE'
               );
        $this->session->set_userdata($default);
        $data['login_status'] = 'FALSE';
        $data['login_info'] = "You seem not to be registered in our system. Please click on the register button ";
        $this->load->view('new_home',$data);
		}
	}

	public function logout(){
		$this ->session->sess_destroy();

			redirect("home");
		
	}

	public function contact()
	{
		echo "This is done";
	}

}