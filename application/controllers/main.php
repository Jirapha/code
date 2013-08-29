<?php
class Main extends CI_Controller
{
public function index()
{
$this->load->model('message_model');
$this->message_model->setMessage("Jirapha Prueksa");
$data['displayMessage'] = $this->message_model->getMessage();
$this->load->view('viewpage',$data);
}
}
?>