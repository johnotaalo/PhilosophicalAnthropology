<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function member_reg($fname,$sname,$onames,$dob,$email,$user_name,$pwd){
        $mem_data = array();
        $user_info = array();
        // $fname = $_POST['fname'];
        // $sname = $_POST['sname'];
        // $onames = $_POST['onames'];
        // $dob = $_POST['dob'];
        // $email =  $_POST['email'];
        // $user_name =  $_POST['user_name'];
        // $pwd =  $_POST['pwd'];

        $user_data=array('user_name' =>$user_name,'pwd' => $pwd,'email' => $email);
        array_push($user_info,$user_data);

        $this -> db -> insert_batch('users', $user_info);
        
        $new_user_id = $this -> db -> insert_id();

        $member_data=array('fname' => $fname, 'sname' => $sname, 'onames' => $onames, 'dob' => $dob, 'email' => $email, 'user_id' => $new_user_id);
        array_push($mem_data,$member_data);

        $result = $this -> db -> insert_batch('members', $mem_data);

        if($result = TRUE){
        $full_name = $fname.' '.$sname;
        $login_msg = 'You are logged in as: '.$user_name;
        //echo $login_msg;exit;
        $user_email = $email;
            $newdata = array(
                   'username'  => $user_name,
                   'email'     => $user_email,
                   'login_status' => 'TRUE',
                   'user_data' => $user_name,
                   'login_info' => $login_msg,
                   'full_name' => $full_name

               );

        $this->session->set_userdata($newdata);
        
        }else{
            echo "REGISTER FOR WHO?";exit;
        };

        redirect('home/index');
        /*
        
        */
    }
    function verification($username,$password){
       // $username = $_POST['username'];
       // $password = $_POST['password'];
        // echo $username . ' ' . $password;
        $user_table = array();
        $u_table = $this->db->get('users');

        $results = $u_table->result_array();

        // print_r($results); die();
 
        foreach ($results as $user_details) {
            // print_r($user_details);
            if(($user_details['email'] == $username )|| ($user_details['user_name'] == $username))
            {
                if ($user_details['pwd'] == $password) {
                    echo "SUCCESSFUL LOGIN";
                    if ($user_details['user_type'] == 'student') {
                       $details_user = $this->registration->getvaluesby('members',  array('user_id' => $user_details['id']));
                       // echo"<pre>";print_r($details_user);die;
                       $fname = $details_user[0]['fname'];
                       $lname = $details_user[0]['sname'];
                       $email = $details_user[0]['email'];
                       $full_name = $fname . ' ' . $lname;
                       // echo $full_name;die;
                        $login_status = array(
                        'login_status' => 'TRUE',
                        'user_data' => $username,
                        'login_info' => 'Logged in as: '. $username,
                        'fname' => $fname,
                        'lname' => $lname,
                        'full_name' => $full_name,
                        'email' =>$email
                        );
                    $this->session->set_userdata($login_status);
                    redirect('home/index');
                    }
                    else if($user_details['user_type'] == 'instructor')
                    {
                        $details_user = $this->registration->getvaluesby('instructors',  array('user_id' => $user_details['id']));
                        $fname = $details_user[0]['first_name'];
                       $lname = $details_user[0]['second_name'];
                       $email = $details_user[0]['email'];
                       $fullname = $fname . ' ' . $lname;
                        $login_status = array(
                        'login_status' => 'TRUE',
                        'user_data' => $username,
                        'login_info' => 'Logged in as: '. $username,
                        'fname' => $fname,
                        'lname' => $lname,
                        'full_name' => $fullname,
                        'email' =>$email
                        );
                    $this->session->set_userdata($login_status);
                    redirect('instructor');

                         
                    }

                    else if ($user_details['user_type'] == 'admin')
                    {
                        $details_user = $this->registration->getvaluesby('administrators',  array('user_id' => $user_details['id']));
                        $fname = $details_user[0]['first_name'];
                       $lname = $details_user[0]['second_name'];
                       $email = $details_user[0]['email'];
                       $fullname = $fname . ' ' . $lname;
                       $login_status = array(
                        'login_status' => 'TRUE',
                        'user_data' => $username,
                        'login_info' => 'Logged in as: '. $username,
                        'fname' => $fname,
                        'lname' => $lname,
                        'full_name' => $fullname,
                        'email' =>$email
                        );
                    $this->session->set_userdata($login_status);
                    redirect('admin');

                    }

                    else
                    {
                        echo "There is a problem with Logging In";
                    }
                }
                else {
                    echo "PASSWORD WRONG";
                    break;
                }
            }
            else
            {
                echo "Error during Login";
            }
        //echo "<pre>";print_r($user_details);echo "</pre>";
           
        }//die;
    }

}