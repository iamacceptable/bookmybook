<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sliders extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
        $this->load->model('Sliders_model');
    }
	public function index(){
        $dataLoad['sliders'] = $this->getSliders();
        $dataLoad['header'] ='Sliders';
        $dataLoad['sidebar'] = 'Sliders';
        $this->load->view('Sliders/sliders',$dataLoad);
    }
    public function getSliders(){
        return $this->Sliders_model->fetch_all_sliders();
    }
    public function activate_slide($slideId){
        $this->Sliders_model->change_slide_flag($slideId, '1');
        echo "<script>
            alert('Slider Image Activated!!!');
            window.location.href='..';
            </script>";
    }
    public function delete_slide($slideId){
        $this->Sliders_model->change_slide_flag($slideId, '0');
        echo "<script>
            alert('Slider Image Removed');
            window.location.href='..';
            </script>";
    }
    public function updateSlideImage($slideId, $img){
        $this->Sliders_model->update_slide($slideId, $img);
    }
    public function add_new_image(){
        $config['upload_path'] = './assets/uploads/sliders/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 20480000;
        $config['file_name'] = $this->input->post('sno');
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('simg')){
            echo "<script>
            alert('".$this->upload->display_errors()."');
            window.location.href='./';
            </script>";
        }
        else{
            $fu = $this->upload->data();
            $path = base_url().'assets/uploads/sliders/'.$fu['file_name'];
            $this->updateSlideImage($this->input->post('sno'),$path);
            echo "<script>
            alert('Slider Image Updated Successfully!!!');
            window.location.href='./';
            </script>";
        }
    }
}