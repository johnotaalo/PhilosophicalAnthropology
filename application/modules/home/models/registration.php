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
               'fname' => $fname,
               'lname' => $sname,
               'full_name' => $fname . ' ' . $lname,
               'username'  => $user_name,
               'email'     => $user_email,
               'login_status' => 'TRUE',
               'user_data' => $user_name,
               'login_info' => $login_msg,
               'full_name' => $full_name

               );

        $this->session->set_userdata($newdata);
        
        }else{
            echo "REGISTRATION ERROR";exit;
        };

        redirect('home');
        /*
        
        */
    }

    function verification(){
        $user_table = array();
        $log_data = array();
        $details_user = '';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
        $u_table = $this->db->get('users');

        $results = $u_table->result_array();

        // print_r($results); die();
 
        foreach ($results as $user_details) {
            if(($user_details['email'] == $username )|| ($user_details['user_name'] == $username))
            {   
                // echo $user_details['pwd'];exit;
                if ($user_details['pwd'] == $password) {
                
                   // echo "SUCCESSFUL LOGIN";
                    if ($user_details['user_type'] == 'student') {
                       $details_user = $this->registration->getvaluesby('members',  array('user_id' => $user_details['id']));
                       $fname = $details_user['fname'];
                       $lname = $details_user['lname'];
                       $email = $details_user['email'];
                        $login_status = array(
                        'login_status' => 'TRUE',
                        'user_data' => $username,
                        'login_info' => 'Logged in as: '. $username,
                        'fname' => $fname,
                        'lname' => $lname,
                        'full_name' => $fname . ' ' . $lname,
                        'email' =>$email
                        );
                    
                    $log_data_ = array('user_id' => $user_details['id'] ,'user_email' => $email );
                    array_push($log_data, $log_data_);
                    $this ->db->insert_batch('logs',$log_data);
 
                    $this->session->set_userdata($login_status);
                    redirect('home');
                    }
                    else if($user_details['user_type'] == 'instructor')
                    {
                         $details_user = $this->registration->getvaluesby('instructors',  array('user_id' => $user_details['id']));
                         $fname = $details_user['first_name'];
                       $lname = $details_user['second_name'];
                       $email = $details_user['email'];
                        $login_status = array(
                        'login_status' => 'TRUE',
                        'user_data' => $username,
                        'login_info' => 'Logged in as: '. $username,
                        'fname' => $fname,
                        'lname' => $lname,
                        'full_name' => $fname . ' ' . $lname,
                        'email' =>$email
                        );
                    $this->session->set_userdata($login_status);
                    redirect('instructor');

                         
                    }
                    else if($user_details['user_type'] == 'admin')
                    {
                         $details_user = $this->registration->getvaluesby('members',  array('user_id' => $user_details['id']));
                       //echo "<pre>";print_r($details_user); echo "</pre>";exit;
                       $fname = $details_user[0]['fname'];
                       $lname = $details_user[0]['sname'];
                       $email = $details_user[0]['email'];
                        $login_status = array(
                        'login_status' => 'TRUE',
                        'user_data' => $username,
                        'login_info' => 'Logged in as: '. $username,
                        'fname' => $fname,
                        'lname' => $lname,
                        'email' =>$email
                        );

                    $log_data_ = array('user_id' => $user_details['id'] ,'user_email' => $email );
                    array_push($log_data, $log_data_);
                    $this ->db->insert_batch('logs',$log_data);


                    $this->session->set_userdata($login_status);
                    redirect('admin/index');
                    }

                }
                else {
                    return "VERIFICATION_ERROR";
                    break;
                }
            }
            else {
                    return "UNREGISTERED";
                    break;
                }
        //echo "<pre>";print_r($user_details);echo "</pre>";
           
        }
    }//end of verification

    function data_collection(){
        $collected_data = array();
        $collected_data['total_members'] = $this-> db -> count_all('members');
        $collected_data['total_instructors'] = $this -> db -> count_all('instructors');
        return $collected_data;
    }

}