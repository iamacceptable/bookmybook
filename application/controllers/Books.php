<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
	public function all_books(){
		$dataLoad['books'] =$this->fetch_all_books();
		$dataLoad['header'] ='All Books';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/all_list',$dataLoad);
	}
	public function fetch_all_books(){
		$this->load->model('Fetch');
		return $this->Fetch->fetch_all_books();
	}
	public function category(){
		$dataLoad['categories'] = $this->fetch_all_categories();
		$dataLoad['header'] ='Add New Category';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/add_new_category',$dataLoad);
	}
	public function fetch_all_categories(){
		$this->load->model('Fetch');
		return $this->Fetch->fetch_all_categories();
	}
	public function delete_category($id){
		$this->load->model('Update');
		$this->Update->delete_category($id);
		redirect('Books/category');
	}
	public function add_new_category(){
		$this->form_validation->set_rules('cname','Category Name','required');
		$this->form_validation->set_rules('cimg', 'Category Image', 'callback_file_selected_test');
		if($this->form_validation->run() == FALSE){
			$this->category();
		}
		else{
	        	$config['upload_path'] = './assets/uploads/category/';
		        $config['allowed_types'] = 'gif|jpg|png|jpeg';
		        $config['overwrite'] = TRUE;
		        $config['max_size'] = 20480000;
		        $this->load->library('upload',$config);
		        if(!$this->upload->do_upload('cimg')){
					$this->category();
		  		}
				else{
					$fu = $this->upload->data();
		    		$path = base_url().'assets/uploads/category/'.$fu['file_name'];
		    		$dataPost = array(
	        		'name' => $this->input->post('cname'),
	        		'img' => $path
		        	);
		        	$this->load->model('Upload_Data');
		        	$this->Upload_Data->add_new_category($dataPost);
		        	echo "<script>
					alert('New Category Added Succefully!!!');
					window.location.href='category';
					</script>";
				}
		}
	}
	function file_selected_test(){
	    $this->form_validation->set_message('file_selected_test', 'Please select Category Image.');
	    if (empty($_FILES['cimg']['name'])) {
            return false;
        }
        else
        {
            return true;
        }
	}
}