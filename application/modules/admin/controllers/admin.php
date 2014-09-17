
<?php if (! defined("BASEPATH")) exit("No direct access script allowed");
/**
* 
*/
class Admin extends MY_Controller
{
	public $data = array();
	public $noofusers, $noofquestions, $noofmembers, $noofinstructor, $nooferrors;

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$this->noofusers = $this->getallcounts('users');
		$this->noofquestions = $this->getallcounts('questions');
		$this->noofmembers = $this->getallcounts('members');
		$this->noofinstructors = $this->getallcounts('instructors');
		$data['no_errors'] = $this->errorreports();
		$data['errorlistsection'] = $this->createAdminErrorListSection(5);
		$data['no_users'] = $this->noofusers;
		$data['no_questions'] = $this->noofquestions;
		$data['no_members'] = $this->noofmembers;
		$data['no_instructors'] = $this->noofinstructors;

		$this->load->view('admin_home', $data);

	}
	
	public function instructors()
	{
		
		$data['instructors'] = $this->admin_model->get_instructors();
		// $get = $this->admin_model->get_instructors();
		
		$this->load->view('instructors_view', $data);

	}

	public function members()
	{
		$data['members'] = $this->admin_model->get_members();

		$this->load->view('members_view', $data);
	}

	public function mail_box($value='')
	{
		$data['mails'] 	 = $this->admin_model->get_mails();
		$data['inbox'] 	 = $this->admin_model->errors();
		$data['deleted'] = $this->admin_model->deleted_errors();
		
		$this->load->view('mail_box', $data);
	}

	function users()
	{
		$data['logs'] = $this->admin_model->get_logs();
		
		$this->load->view('users_view', $data);
	}

	
	public function add_instructor()
	{
		$default_password = $this->my_hash($this->config->item('instructors_default'));
		
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('second_name', 'Second Name', 'trim|required');
		$this->form_validation->set_rules('other_name', 'Other Name', 'trim|required');
		$this->form_validation->set_rules('DOB', 'Date of Birth', 'trim|required');
		$this->form_validation->set_rules('institution', 'Institution', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            $this->instructors();
		} else 
		{
			// echo "The form validation was very successfull";
            
			$this->admin_model->add_Instructors($default_password);
			
			$this->instructors();
				
		}
		//echo "Ndio kufika sasa";
		// $this->load->view('instructors_view');
	}

	public function edit_instructor()
	{
		
	}

	public function email_details()
	{
		$recipient 	= $this->input->post('recipient');
		$subject 	= $this->input->post('subject');
		$message 	= $this->input->post('message');

		// print_r($this->input->post());die;

		$this->send_email($recipient, $subject, $message);
	}

	public function send_email($recipient, $subject, $message)
	{
		$time=date('Y-m-d');
		
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => "chrisrichrads@gmail.com",
			'smtp_pass' => "joshuaSUN"
			);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('chrisrichrads@gmail.com', 'PHILOSOPHICAL ANTHROPOLOGY');
		$this->email->to($recipient);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_mailtype("html");
		
		
		if($this->email->send())
			{	
				$this->admin_model->store_sent_email($recipient, $subject, $message, $time);
				$this->index();
				
			} else 
			{
				show_error($this->email->print_debugger());
			}
		
	}
	function getallcounts($tablename)
	{
		$number = $this->count_all($tablename);
		return $number;
	}

	function errorreports()
	{
		$errors = 0;
		$errors = $this->admin_model->getErrors();

		return $errors;
	}

	function getUnreadErrors($number)
	{
		$unreaderrors = $this->admin_model->getUnreadErrors();
		$first_n = array();
		$counter = 0;
		if ($number) {
			$first_n = array_slice($unreaderrors, 0, $number);
		}
		else
		{
			$first_n = $unreaderrors;
		}

		return $first_n;
	}

	function createAdminErrorListSection($number)
	{
		$errorlist = $this->getUnreadErrors($number);
		$errorlistSection = '';
		foreach ($errorlist as $value) {
			$errorlistSection .= '<li><a href="#" onclick = "getMessage('.$value['error_id'].');"><div class="pull-left"><img src="'.base_url().'assets/images/img/portrait-1.jpg" class="img-circle" alt="User Image"/></div><h4>'.$value['user_id'].'<small><i class="fa fa-clock-o"></i> 5 mins</small></h4><p>'.$value['message'].'</p></a></li>';
		}
		
		return $errorlistSection;
	}


public function logout(){
		$this ->session->sess_destroy();

			redirect("/home");
		
		}
	}
?>



