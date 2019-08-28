<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('questions');
	}

	function process_form(){
		$answers = array();
		if(isset($_POST['Question1'])){
			array_push($answers,$_POST['Question1']);
		}
		if(isset($_POST['Question2'])){
			array_push($answers,$_POST['Question2']);
		}
		if(isset($_POST['Question3'])){
			array_push($answers,$_POST['Question3']);
		}
		if(isset($_POST['Question4'])){
			array_push($answers,$_POST['Question4']);
		}
		if(isset($_POST['Question51'])){
			array_push($answers,$_POST['Question51']);
		}
		if(isset($_POST['Question52'])){
			array_push($answers,$_POST['Question52']);
		}
		if(isset($_POST['Question53'])){
			array_push($answers,$_POST['Question53']);
		}
		if(isset($_POST['Question54'])){
			array_push($answers,$_POST['Question54']);
		}
		if(isset($_POST['Question61'])){
			array_push($answers,$_POST['Question61']);
		}
		if(isset($_POST['Question62'])){
			array_push($answers,$_POST['Question62']);
		}
		if(isset($_POST['Question63'])){
			array_push($answers,$_POST['Question63']);
		}
		if(isset($_POST['Question64'])){
			array_push($answers,$_POST['Question64']);
		}
		if(isset($_POST['Question7'])){
			array_push($answers,$_POST['Question7']);
		}
		if(isset($_POST['Question8'])){
			array_push($answers,$_POST['Question8']);
		}
		if(isset($_POST['Question9'])){
			array_push($answers,$_POST['Question9']);
		}
		if(isset($_POST['Question10'])){
			array_push($answers,$_POST['Question10']);
		}
		
		$stringAnswers = implode(",",$answers);
		var_dump($stringAnswers);

		$noP = substr_count($stringAnswers,"p");
		$noQ = substr_count($stringAnswers,"q");
		$noA = substr_count($stringAnswers,"a");
		$noB = substr_count($stringAnswers,"b");

		echo '<pre>';
		var_dump("The number of p's are ".$noP);
		var_dump("The number of q's are ".$noQ);
		var_dump("The number of a's are ".$noA);
		var_dump("The number of b's are ".$noB);
		echo '</pre>';

		if($noP>$noQ){
			$final = "p";
		}else{
			$final = "q";
		}

		if($noA>$noB){
			$final = $final."a";
		}else{
			$final = $final."b";
		}
	
		if($final === "pa"){
			$tribe = "Tagu Tribe";
		}else if($final === "pb"){
			$tribe = "Zatura Tribe";
		}else if($final === "qa"){
			$tribe = "Kurwu Tribe";
		}else if($final === "qb"){
			$tribe = "Ayande Tribe";
		}

		echo '<pre>';
		var_dump("The final tribe is ".$tribe);
		echo '</pre>';

		$data = array('success' => true, 'msg'=> 'The final tribe is '.$tribe);
		echo json_encode($data);
	}
}
