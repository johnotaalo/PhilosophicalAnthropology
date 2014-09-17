<?php if (! defined("BASEPATH")) exit("No direct access to script alowed");

/**
* 
*/
class Admin_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_instructors()
	{
		$sql = "SELECT
						'id',
						`first_name`,
						`second_name`,
						`institution`,
						`location`,
						`email`,
						`phone`,
						`status`
				FROM 
					`instructors`";
		$instructors = $this->db->query($sql);
		// print_r($instructors); die();
		return $instructors->result_array();
	}

	public function get_members()
	{
		$sql = "SELECT
						`members`.`fname`,
						`members`.`sname`,
						`members`.`onames`,
						`members`.`dob`,
						`members`.`email`,
						`members`.`user_id`,
						`users`.`id`,
						`users`.`status`
				FROM
						`members`
					LEFT JOIN `users`
						ON `members`.`user_id` = `users`.`id`";

		$members = $this->db->query($sql);
		// $members = $members->result_array();
		// print_r($members); die();
		return $members->result_array();
	}

	public function get_mails()
	{
		$sql = "SELECT 
						`recipients`,
						`subject`,
						`message`,
						`date`
				FROM
						`mailerlog`";

		$mails = $this->db->query($sql);

		return $mails->result_array();
	}

	public function errors()
	{
		$sql = "SELECT
						`ERR`.`subject`,
						`ERR`.`message`,
						`ERR`.`user_id`,
						`ERR`.`date`,
						`ERR`.`looked_at`,
						`ERR`.`status`,
						`USS`.`id`,
						`USS`.`user_name`

				FROM
						`error_reports` AS `ERR`
					LEFT JOIN 
								`users` AS `USS`
						ON 
								`ERR`.`user_id` = `USS`.`id`
				WHERE `ERR`.`status` = 1";

		$errors = $this->db->query($sql);

		return $errors->result_array();
	}

	public function deleted_errors()
	{
		$sql = "SELECT
						`ERR`.`subject`,
						`ERR`.`message`,
						`ERR`.`user_id`,
						`ERR`.`date`,
						`ERR`.`looked_at`,
						`ERR`.`status`,
						`USS`.`id`,
						`USS`.`user_name`

				FROM
						`error_reports` AS `ERR`
					LEFT JOIN 
								`users` AS `USS`
						ON 
								`ERR`.`user_id` = `USS`.`id`
				WHERE `ERR`.`status` = 0";

		$errors = $this->db->query($sql);

		return $errors->result_array();
	}

	public function get_logs()
	{
		$sql = "SELECT
						`logs`.`user_id`,
						`logs`.`user_email`,
						`logs`.`logged_in_at`,
						`users`.`user_name`,
						`users`.`user_type`,
						`users`.`id`
					FROM `logs`
						LEFT JOIN `users`
							ON `logs`.`user_id` = `users`.`id`";
		$logs = $this->db->query($sql);

		return $logs->result_array();
	}

	public function add_Instructors($default_password)
	{
		
		$first_name 	= $this->input->post('first_name');
		$second_name 	= $this->input->post('second_name');
		$other_name		= $this->input->post('other_name');
		$dob 			= $this->input->post('DOB');
		$institution	= $this->input->post('institution');
		$location		= $this->input->post('location');
		$email			= $this->input->post('email');
		$phone			= $this->input->post('phone');
		$username		= $first_name.".".$second_name;
		$password 		= $default_password;

		$new_user_id 	= $this->login_credentials($username, $password,$email);

		$details = "INSERT INTO 
								`instructors`
							VALUES
									(
										'NULL',
										'$first_name',
										'$second_name',
										'$other_name',
										'$dob',
										'$institution',
										'$location',
										'$email',
										'$phone',
										'$new_user_id',
										'1'
									)";

		// echo $details; 
		$insert = $this->db->query($details);
			
	}

	public function login_credentials($username, $password,$email)
	{
			$logins	 = "INSERT INTO
									`users`
								VALUES
										(
											'NULL',
											'$username',
											'$email',
											'instructor',
											'$password',
											'timestamp'
										)";
		$this->db->query($logins);

		$new_user_id = $this -> db -> insert_id();

		return $new_user_id;
	}

	function store_sent_email($recepient, $subject, $message, $tim)
    {
       $emails = array(
			'id' 		   =>   NULL,
			'recipients'   =>   $recepient,
			'subject'      =>   $subject,
			'message'      =>   $message,
			'date'   	   =>   $tim,
			'sent_status'  =>   1
			);

		$insert = $this->db->insert('mailerlog', $emails); 
    }

    function getErrors()
    {
    	$errors = array();

    	$query = $this->db->query("SELECT count(error_id) AS errors FROM error_reports WHERE looked_at = 0 LIMIT 1");
    	$result = $query->result_array();

    	return $result[0]['errors'];
    }

    function getUnreadErrors()
    {
    	$unreadErrors = array();
    	$query = $this->db->query("SELECT * FROM error_reports WHERE looked_at = 0 ORDER BY date DESC");
    	$results = $query->result_array();

    	foreach ($results as $key => $value) {
    		$unreadErrors[$value['error_id']] = $value;
    	}
    	return $unreadErrors;
    }
}
?>