<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_news extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model('news_model');
		// $this->load->view('adminpanel/addpost_view');
		$data['post_details'] = $this->news_model->getAllPosts();
		//$this->load->view('home',$data);
		$this->load->view('home',$data);
	}

	public function addpost()
	  {

	  	if ($_FILES) {
			//Image is Passed for Upload
			$config['upload_path']          = './assets/upload /';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    die("Error");
                    //$this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

/*                    echo "<pre>";
                    print_r($data);
                    echo $data['upload_data']['file_name'];
*/					
                    $fileurl = "assets/upload/blogimg/".$data['upload_data']['file_name'];
                    $blog_title = $_POST['blog_title'];
                    $desc = $_POST['desc'];

                    $query = $this->db->query("INSERT INTO `articles`( `blog_title`, `blog_desc`, `blog_img`) VALUES ('$blog_title','$desc','$fileurl')");

                    if ($query) {
                    	$this->session->set_flashdata('inserted', 'yes');
                    	redirect('admin/blog/addblog');
                    }
                    else{
                    	$this->session->set_flashdata('inserted', 'no');
                    	redirect('admin/blog/addblog');
                    }
                    //$this->load->view('upload_success', $data);
            }
		}else{
			// Image is not passed
		}

	}
	 //    $this->form_validation->set_rules('title', 'Title', 'required');
		// 	$this->form_validation->set_rules('body', 'Body', 'required');

		// 	if($this->form_validation->run() === FALSE){
		// 		$this->load->view('adminpanel');
		// 	} else {
		// 		// Upload Image
		// 		$config['upload_path'] = './assets/images/posts';
		// 		$config['allowed_types'] = 'gif|jpg|png';
		// 		$config['max_size'] = '2048';
		// 		$config['max_width'] = '2000';
		// 		$config['max_height'] = '2000';

		// 		$this->load->library('upload', $config);

		// 		if(!$this->upload->do_upload()){
		// 			$errors = array('error' => $this->upload->display_errors());
		// 			$post_image = 'noimage.jpg';
		// 		} else {
		// 			$data = array('upload_data' => $this->upload->data());
		// 			$post_image = $_FILES['userfile']['name'];
		// 		}

		// 		$this->post_model->create_post($post_image);

		// 		// Set message
		// 		$this->session->set_flashdata('post_created', 'Your post has been created');

		// 		redirect('posts');
		// 	}
		// }
	  //}

	  public function muundo_wa_shirika()
	  {
	  	$this->load->view('muundo_wa_shirika');
	  }
}
