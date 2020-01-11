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
	public function books_not_found(){
		$dataLoad['books'] = $this->fetch_books_not_found();
		$dataLoad['header'] ='Filter Not found';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/bnf',$dataLoad);
	}
	public function fetch_books_not_found(){
		$this->load->model('Fetch');
		return $this->Fetch->fetch_books_not_found();
	}
	public function add_multiple_book(){
		$dataLoad['header'] ='Add Multiple Book';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/add_multiple_book',$dataLoad);
	}
	// import excel data
    public function upload_excel_data() {
        $this->load->library('excel');
        $path = './assets/uploads/booksExcelData/';
        
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'xlsx|xls';
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('booksExcel')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        
        if (!empty($data['upload_data']['file_name'])) {
            $import_xls_file = $data['upload_data']['file_name'];
        } else {
            $import_xls_file = 0;
        }
        $inputFileName = $path . $import_xls_file;
        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                    . '": ' . $e->getMessage());
        }
        $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        
        $arrayCount = count($allDataInSheet);
        $flag = 0;
        $createArray = array('isbn','title','author','publication', 'volume', 'year', 'edition', 'reprint', 'binding', 'pages','weight','mrp','category','img','flag');
        $makeArray = array('isbn' => 'isbn',
        					'title' => 'title',
        					'author' => 'author',
        					'publication' => 'publication',
        					'volume' => 'volume',
        					'year' => 'year',
        					'edition' => 'edition',
        					'reprint' => 'reprint',
        					'binding' => 'binding',
        					'pages' => 'pages',
        					'weight' => 'weight',
        					'mrp' => 'mrp',
        					'category' => 'category',
        					'flag' => 'flag'
        				);
        $SheetDataKey = array();
        foreach ($allDataInSheet as $dataInSheet) {
            foreach ($dataInSheet as $key => $value) {
                if (in_array(trim($value), $createArray)) {
                    $value = preg_replace('/\s+/', '', $value);
                    $SheetDataKey[trim($value)] = $key;
                } else {
                    
                }
            }
        }
        $data = array_diff_key($makeArray, $SheetDataKey);
       
        if (empty($data)) {
            $flag = 1;
        }
        if ($flag == 1) {
            for ($i = 2; $i <= $arrayCount; $i++) {
                $isbn = $SheetDataKey['isbn'];
                $title = $SheetDataKey['title'];
                $author = $SheetDataKey['author'];
                $publication = $SheetDataKey['publication'];
                $volume = $SheetDataKey['volume'];
                $year = $SheetDataKey['year'];
                $edition = $SheetDataKey['edition'];
                $reprint = $SheetDataKey['reprint'];
                $binding = $SheetDataKey['binding'];
                $pages = $SheetDataKey['pages'];
                $weight = $SheetDataKey['weight'];
                $mrp = $SheetDataKey['mrp'];
                $category = $SheetDataKey['category'];
                $flag = $SheetDataKey['flag'];
                $isbn = filter_var(trim($allDataInSheet[$i][$isbn]), FILTER_SANITIZE_STRING);
                $title = filter_var(trim($allDataInSheet[$i][$title]), FILTER_SANITIZE_STRING);
                $author = filter_var(trim($allDataInSheet[$i][$author]), FILTER_SANITIZE_STRING);
                $publication = filter_var(trim($allDataInSheet[$i][$publication]), FILTER_SANITIZE_STRING);
                $volume = filter_var(trim($allDataInSheet[$i][$volume]), FILTER_SANITIZE_STRING);
                $year = filter_var(trim($allDataInSheet[$i][$year]), FILTER_SANITIZE_STRING);
                $edition = filter_var(trim($allDataInSheet[$i][$edition]), FILTER_SANITIZE_STRING);
                $reprint = filter_var(trim($allDataInSheet[$i][$reprint]), FILTER_SANITIZE_STRING);
                $binding = filter_var(trim($allDataInSheet[$i][$binding]), FILTER_SANITIZE_STRING);
                $pages = filter_var(trim($allDataInSheet[$i][$pages]), FILTER_SANITIZE_STRING);
                $weight = filter_var(trim($allDataInSheet[$i][$weight]), FILTER_SANITIZE_STRING);
                $mrp = filter_var(trim($allDataInSheet[$i][$mrp]), FILTER_SANITIZE_STRING);
                $category = filter_var(trim($allDataInSheet[$i][$category]), FILTER_SANITIZE_STRING);
                $flag = filter_var(trim($allDataInSheet[$i][$flag]), FILTER_SANITIZE_STRING);
                $fetchData[] = array('isbn' => $isbn,
        					'title' => $title,
        					'author' => $author,
        					'publication' => $publication,
        					'volume' => $volume,
        					'year' => $year,
        					'edition' => $edition,
        					'reprint' => $reprint,
        					'binding' => $binding,
        					'pages' => $pages,
        					'weight' => $weight,
        					'mrp' => $mrp,
        					'category' => $category,
        					'flag' => $flag
        				);
            }           
            $this->load->model('Upload_data','import');
            $this->import->add_multiple_books($fetchData);
            echo "	<script>
				alert('".($arrayCount-1)." Books Added!!!');
				window.location.href='';
			</script>";
        } else {
            echo "	<script>
				alert('Please import Correct File!!!');
				window.location.href='';
			</script>";
        }
    }
    public function download_sample(){
    	$this->load->helper('download');
    	$fileName = 'sample.xlsx';
    	$file = './assets/uploads/booksExcelData/'.$fileName;
	    // check file exists    
	    if (file_exists ( $file )) {
	     // get file content
	    $data = file_get_contents ( $file );
	     //force download
	    force_download ( $fileName, $data );
    	}
    }
}