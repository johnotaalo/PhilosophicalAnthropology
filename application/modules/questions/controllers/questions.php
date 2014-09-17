<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends MX_Controller
{
	public $question;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_questions');
    }
	function index()
	{
		$this->load->view('public_questions');
	}

	function public_questions()
	{
		$this->m_questions->getAllQuestions();
		// print_r($this->data_found);die;
		
		// print_r($this->data_found);die;
		// $freedomQuestions = $sexualityQuestions = '';
		// $question_counter = $freedom_counter = $sexuality_counter = 0;
		// foreach ($this->data_found as $value) {
		// 	$category = $value['questionCategory'];
		// 	$choices = explode(';', $value['choices']);
		// 	if($category == 'freedom')
		// 	{
		// 		++$freedom_counter;
		// 		$freedomQuestions = '<tr><td>'.$value['question'].'</td>';
		// 		$question_counter = 0;
		// 		foreach ($choices as $choice) {
		// 			++$question_counter;
		// 			$freedomQuestions .= '<td><input type = "radio" value = "choice_'.$question_counter.'" name = "answeredfreedom_'.$freedom_counter.'"> <label>'.$choice.'</label></td>';
		// 		}

		// 		$freedomQuestions .= '<input type="hidden"  name="answeredquestionCode_' . $freedom_counter . '" id="questionCode_' . $freedom_counter . '" value="' . $value['questionCode'] . '"">
		// 		<input type="hidden"  name="category_' . $freedom_counter . '" id="category_' . $freedom_counter . '" value="' . $value['questionCategory'] . '""></tr>';
		// 		$data[$category][] = $freedomQuestions;
		// 	}

		// 	else if ($category == 'sexuality') {
		// 		++$sexuality_counter;
		// 		$sexualityQuestions = '<tr><td>'.$value['question'].'</td><td>';
		// 		$question_counter = 0;
		// 		foreach ($choices as $choice) {
		// 			++$question_counter;
		// 			$sexualityQuestions .= '<input type = "radio" value = "choice_'.$question_counter.'" name = "answeredsexuality_'.$sexuality_counter.'"> <label>'.$choice.'</label><br/>';
		// 		}

		// 		$sexualityQuestions .= '</td><input type="hidden"  name="answeredquestionCode_' . $sexuality_counter . '" id="questionCode_' . $sexuality_counter . '" value="' . $value['questionCode'] . '"">
		// 		<input type="hidden"  name="category_' . $sexuality_counter . '" id="category_' . $sexuality_counter . '" value="' . $value['questionCategory'] . '""></tr>';
		// 		$data[$category][] = $sexualityQuestions;
		// 	}
		// }
		// foreach ($data as $key => $value) {
  //           $this->question[$key] = '';
  //           foreach ($value as $val) {
  //               $this->question[$key].= $val;
  //           }
  //       }
		// echo "<pre>";print_r($this->question);die;
	}

	function set_questions()
	{
		$this->load->view('register_questions');
	}

	function add_questions()
	{
		$result = $this->m_questions->addQuestions();
	}

	function addAnswered()
	{
		$result = $this->m_questions->addAnswered();
		// if($result)
		// {
		// 	$questions = $this->m_questions->getSantizedAnswer();
		// }
	}

	function manage_questions()
	{
		$data['questionsection'] = $this->getAllQuestions();
		$this->load->view('managequestions', $data);
	}

	function getAllQuestions()
	{
		$quest = '';
		$all_questions = $this->m_questions->getsanitizedquestions();
		$counter = 0;
		foreach ($all_questions as $key => $question) {
			$counter++;
			$choices = explode(';', $question['choices']);
			$quest .= '<tr><td>'.$counter.'</td><td>'.$question['question'].'</td><td>'.$question['question_category'].'</td><td><div><select class = "form-control">';
			foreach ($choices as $choice) {
				$quest .= '<option>'.$choice.'</option>';
			}
			$quest .= '</select></div></td>';

			$answer = explode('_', $question['answer']);
			$ans_key = $answer[1] - 1;
			$the_answer = $choices[$ans_key];
			$quest .= '<td>'.$the_answer.'</td><td>'.$question['created_on'].'</td><td><center><a href="javascript:void(null);" onclick="edit_question('.$question['question_id'] .')"><span class="glyphicon glyphicon-pencil" style="color: #70D3E9;"></span></a></center></td>';


		}

		return $quest;
	}

	function getAnswers()
	{
		$ans = $this->m_questions->gq();

		$user_answers = $this->m_questions->getUserAnswers('emailaddress = "chrizota@gmail.com"');

		foreach ($ans as $key => $value) {
			if(array_key_exists($v['question_code'], $ans)){
			foreach ($user_answers as $k => $v) {
				if($v['question_response'] == $value[$v['question_code']]['answer'])
				{
					echo "True";
				}
				else
				{
					echo "false";
				}
			}
		}
		}die;

	}
}