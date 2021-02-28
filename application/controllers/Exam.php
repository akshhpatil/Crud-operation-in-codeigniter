<?php 

class Exam extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('exam_model');


	  }


       //save data 
	   public function index()
	 {
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('phone', 'phone', 'required|integer|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('address', 'address', 'required');
		if($this->form_validation->run()==FALSE) 
		{
			$this->load->view('register');
		}
		 else {
			      $this->load->helper('url');
		          $this->load->view('register');
	              if($this->input->post('submit'))
		          {
		
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$phone=$this->input->post('phone');
		$address=$this->input->post('address');

		$this->exam_model->insert($name,$email,$password,$phone,$address);
		redirect('Exam/display');
 	               }		

 
               }
    }


    /*Display*/
	public function display()
	{
	$result['data']=$this->exam_model->display_records();
	$this->load->view('examshow',$result);
	}

     //delete
     public function deletedata()
	{
	    $this->load->helper('url');

		$id=$this->input->get('id');
		$this->exam_model->deleterecords($id);
		redirect('Exam/display');
		// echo "Date deleted successfully !";
    }

    //update
    public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->exam_model->displayrecordsById($id);
	$this->load->helper('url');
	$this->load->view('up',$result);
	
		if($this->input->post('update'))
		{
			
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$phone=$this->input->post('phone');
		$address=$this->input->post('address');
		$this->exam_model->update_records($name,$email,$password,$phone,$address,$id);
		redirect('exam/display');
		echo "Date updated successfully !";
		}
	}

      

      //view_page
      public function viewpage()
	{
	   $id=$this->input->get('id');
	   $result['data']=$this->exam_model->displayrecordsById($id);
	   $this->load->helper('url');
	   $this->load->view('show_page',$result);

    $name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$phone=$this->input->post('phone');
		$address=$this->input->post('address');

		if($this->input->post('back'))
		{
		  redirect('exam/display');
		}

    }



}
?>
