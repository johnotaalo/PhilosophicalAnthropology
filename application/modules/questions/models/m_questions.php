<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_questions extends MY_Model {

    public $sanitizedanswer;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function getAllQuestions()
    {
        try
        {
            $this->questions = $this->em->createQuery('SELECT q.questionCode, q.question,q.choices, q.answer, q.questionCategory FROM models\Entities\Questions q ORDER BY q.questionCode ASC');
            $this->questions = $this->questions->getResult();
            echo json_encode($this->questions);
        }
        catch(exception $ex)
        {
            die($ex->getMessage());
            return false;
        }
    }

    function gq()
    {
        try
        {
            $this->questions = $this->em->createQuery('SELECT q.questionCode, q.question,q.choices, q.answer, q.questionCategory FROM models\Entities\Questions q ORDER BY q.questionCode ASC');
            $this->questions = $this->questions->getResult();
            foreach ($this->questions as $key => $value) {
            $question[][$value['questionCode']] = $value;
        }

       // echo "<pre>"; print_r($question);
            return $question;
        }
        catch(exception $ex)
        {
            die($ex->getMessage());
            return false;
        }
    }
    function getSantizedAnswer()
    {
        $answers = $this->gq();
        foreach ($answers as $value) {
            $this->sanitizedanswer[$value['questionCode']] = '';
            $this->sanitizedanswer[$value['questionCode']] .= $value['answer'];
        }

        // print_r($this->sanitizedanswer);die;

        return $this->sanitizedanswer;
    }
    function addQuestions()
    {
        $this->elements=array();
        $count = $finalCount = 1;
        $lk = $this->getLargestPrimaryKey('questions');
    	$questions = $this->input->post();
    	foreach ($questions as $key => $val) {
    		if (strpos($key, 'set') !== FALSE) {

                $this->frags = $key;
                $this->id = $count;
                $this->attr = $this->frags;

    			if (is_array($val)) {
    				$val = implode(';', $val);
    			}

                if ($this->attr == 'setanswer') {
                    $finalCount = $count;
                    $count++;
                }


    			if (!empty($val)) {
    				$this->elements[$this->id][$this->attr] = htmlentities($val);
    			}
                else
                {
                    $this->elements[$this->id][$this->attr] = '';
                }
    		}
    	}
        // print_r($this->elements);die;
        //close foreach ($questions as $key => $val)
        // get the highest value of the array that will control the number of inserts to be done
        $this->noOfInsertsBatch = $finalCount;

        for ($i=1; $i <= $this->noOfInsertsBatch; $i++) { 
            $this->theForm = new \models\Entities\Questions();
            
            //go ahead and persist data posted

            //create an object of the model

            (array_key_exists('setcategory', $this->elements[$i])) ? $this->theForm->setQuestionCategory($this->elements[$i]['setcategory']) : $this->theForm->setQuestionCategory('n/a');
            (array_key_exists('setquestion', $this->elements[$i])) ? $this->theForm->setQuestion($this->elements[$i]['setquestion']) : $this->theForm->setQuestion('n/a');
            (array_key_exists('setchoice', $this->elements[$i])) ? $this->theForm->setChoices($this->elements[$i]['setchoice']) : $this->theForm->setChoices('n/a');
            (array_key_exists('setanswer', $this->elements[$i])) ? $this->theForm->setAnswer($this->elements[$i]['setanswer']) : $this->theForm->setAnswer('n/a');

            $this->theForm->setQuestionCode('Q'.$this->elements[$i]['setcategory'].$lk+=1);
            $this->theForm->setCreatedBy('1');
            $this->theForm->setCreatedOn(new DateTime());

            /*timestamp option*/
            $this->em->persist($this->theForm);

            //now do a batched insert, default at 5
            $this->batchSize = 5;

            if ($i % $this->batchSize == 0) {
                try {

                    $this->em->flush();
                    $this->em->clear();

                    //detaches all objects from doctrine
                    //return true;

                }
                catch(Exception $ex) {

                    die($ex->getMessage());
                    return false;

                    /*display user friendly message*/
                }
                 //end of catch


            }
            else if ($i < $this->batchSize || $i > $this->batchSize || $i == $this->noOfInsertsBatch && $this->noOfInsertsBatch - $i < $this->batchSize) {

                //total records less than a batch, insert all of them
                try {

                    $this->em->flush();
                    $this->em->clear();

                    //detactes all objects from doctrine
                    //return true;

                }
                catch(Exception $ex) {

                    die($ex->getMessage());
                    return false;

                    /*display user friendly message*/
                }
                 //end of catch

                //on the last record to be inserted, log the process and return true;
                if ($i == $this->noOfInsertsBatch) {

                    //die(print $i);
                    // $this->writeAssessmentTrackerLog();
                    echo "true";
                    return true;
                }
            }

            //end of batch condition
        }

        // print_r($this->theForm);die;

    }

    function addAnswered()
    {
        // print_r($this->input->post());
        $this->elements=array();
        $answered = $this->input->post();
        $user = $answered['useremail'];
        // echo"<pre>";print_r($answered);die;
        $count = $finalCount = 1;
        foreach ($answered as $key => $val) {
            if (strpos($key, 'answered') !== FALSE) {
                $this->frags = explode("_", $key);
                $this->id = $count;
                $this->attr = $this->frags[0];
                if ($this->attr == 'answeredquestionCode') {
                    $finalCount = $count;
                    $count++;
                }

                if (!empty($val)) {
                    $this->elements[$this->id][$this->attr] = htmlentities($val);
                }
                else
                {
                    $this->elements[$this->id][$this->attr] = '';
                }
            }
        }

        // echo "<pre>";print_r($this->elements);die;
        $this->noOfInsertsBatch = $finalCount;

        for ($i=1; $i <= $this->noOfInsertsBatch; $i++) { 
            $this->theForm = new \models\Entities\PublicAnswers();
            
            //go ahead and persist data posted

            //create an object of the model

            (array_key_exists('answeredquestionCode', $this->elements[$i])) ? $this->theForm->setQuestionCode($this->elements[$i]['answeredquestionCode']) : $this->theForm->setQuestionCode('n/a');
            (array_key_exists('answeredfreedom', $this->elements[$i])) ? $this->theForm->setQuestionResponse($this->elements[$i]['answeredfreedom']) : $this->theForm->setQuestionResponse('n/a');
            $this->theForm->setEmailaddress($user);
            $this->theForm->setTime(new DateTime());

            /*timestamp option*/
            $this->em->persist($this->theForm);

            //now do a batched insert, default at 5
            $this->batchSize = 5;

            if ($i % $this->batchSize == 0) {
                try {

                    $this->em->flush();
                    $this->em->clear();

                    //detaches all objects from doctrine
                    //return true;

                }
                catch(Exception $ex) {

                    die($ex->getMessage());
                    return false;

                    /*display user friendly message*/
                }
                 //end of catch


            }
            else if ($i < $this->batchSize || $i > $this->batchSize || $i == $this->noOfInsertsBatch && $this->noOfInsertsBatch - $i < $this->batchSize) {

                //total records less than a batch, insert all of them
                try {

                    $this->em->flush();
                    $this->em->clear();

                    //detactes all objects from doctrine
                    //return true;

                }
                catch(Exception $ex) {

                    die($ex->getMessage());
                    return false;

                    /*display user friendly message*/
                }
                 //end of catch

                //on the last record to be inserted, log the process and return true;
                if ($i == $this->noOfInsertsBatch) {

                    //die(print $i);
                    // $this->writeAssessmentTrackerLog();
                    return true;
                }
            }

            //end of batch condition
        }
    }

    public function getsanitizedquestions()
    {
        $query = "SELECT * FROM questions";
        $result = $this->db->query($query);
        $all_questions = $result->result_array();
        
        return $all_questions;
    }

    public function getUserAnswers($userdetails)
    {
       $query = $this->db->get_where('public_answers', $userdetails);
        $result = $query->result_array();
        return $result;

    }
}