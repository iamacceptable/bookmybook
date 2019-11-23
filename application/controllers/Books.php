<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
    }
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
	public function fetch_categories(){
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
					alert('New Category Added Successfully!!!');
					window.location.href='category';
					</script>";
				}
		}
	}
	function file_selected_test(){
	    $this->form_validation->set_message('file_selected_test', 'Please select Image.');
	    if (empty($_FILES['cimg']['name'])) {
            return false;
        }
        else
        {
            return true;
        }
	}
	public function new_book(){
		$dataLoad['categories'] = $this->fetch_categories();
		$dataLoad['header'] ='Add New Book';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/add_new_book',$dataLoad);
	}
	public function add_new_books(){
		$this->form_validation->set_rules('bisbn', 'ISBN','required');
		$this->form_validation->set_rules('btitle', 'Title','required');
		$this->form_validation->set_rules('bauthor', 'Author Name','required');
		$this->form_validation->set_rules('bpublication', 'Publication Name','required');
		$this->form_validation->set_rules('bvolume', 'Volume','required|numeric');
		$this->form_validation->set_rules('byear', 'Year','required|numeric');
		$this->form_validation->set_rules('bedition', 'Edition','required');
		$this->form_validation->set_rules('bbinding', 'Binding','required');
		$this->form_validation->set_rules('bpages', 'No. of Pages','required|numeric');
		$this->form_validation->set_rules('bweight', 'Weight','required');
		$this->form_validation->set_rules('bmrp', 'Price','required');
		$this->form_validation->set_rules('cimg', 'Book Image', 'callback_file_selected_test');
		if($this->form_validation->run() == FALSE){
			$this->new_book();
		}
		else{
	        	$config['upload_path'] = './assets/uploads/books/';
		        $config['allowed_types'] = 'gif|jpg|png|jpeg';
		        $config['overwrite'] = TRUE;
		        $config['max_size'] = 20480000;
		        $this->load->library('upload',$config);
		        if(!$this->upload->do_upload('cimg')){
					$this->category();
		  		}
				else{
					$fu = $this->upload->data();
		    		$path = base_url().'assets/uploads/books/'.$fu['file_name'];
		    		$dataPost = array(
		        		'isbn' => $this->input->post('bisbn'),
		        		'title' => $this->input->post('btitle'),
		        		'category' => $this->input->post('bcategory'),
		        		'author' => $this->input->post('bauthor'),
		        		'publication' => $this->input->post('bpublication'),
		        		'volume' => $this->input->post('bvolume'),
		        		'year' => $this->input->post('byear'),
		        		'edition' => $this->input->post('bedition'),
		        		'binding' => $this->input->post('bbinding'),
		        		'pages' => $this->input->post('bpages'),
		        		'weight' => $this->input->post('bweight'),
		        		'mrp' => $this->input->post('bmrp'),
		        		'img' => $path
		        	);
		        	$this->load->model('Upload_Data');
		        	$this->Upload_Data->add_new_book($dataPost);
		        	echo "<script>
					alert('New Book Added Successfully!!!');
					window.location.href='all_books';
					</script>";
				}
		}
	}
}