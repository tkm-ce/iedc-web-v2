<?php
class Report_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function ecellInfo($companyType)
  {
    $this->db->select('companyHead,imageLink,companyData');
    $query = $this->db->get_where('eCell', array('companyType' => $companyType));
    return $query->result_array();
  }

  public function upcomingEvents()
  {
    $query = $this->db->get('upcomingEvents');
    return $query->result_array();
  }

  public function execomInfo()
  {
    $query = $this->db->get('execom');
    return $query->result_array();
  }
  public function execomYear()
  {
    $query = $this->db->get('execomYear');
    return $query->result_array();
  }
  public function web_team_info()
  {
    $query = $this->db->get('web_team');
    return $query->result_array();
  }
  public function webYear()
  {
    $query = $this->db->get('web_team_years');
    return $query->result_array();
  }

  public function messages($data)
  {
    $this->db->insert('contacts', $data);
  }
  public function registration_innovate4tkm($data)
  {
    $this->db->insert('users_innovate_4_tkm', $data);
  }
  public function registration_ai_ml($data)
  {
    $this->db->insert('users_ai_ml', $data);
  }

  public function execom_reg($data)
  {
    $configss['allowed_types'] = 'pdf';
    $configss['max_filename'] = '255';
    $configss['overwrite'] = TRUE;
    $configss['max_size'] = '10240';
    $configss['upload_path'] = 'assets/uploads/execom_reg/';
    $temp = $_FILES["coverletter"]['name'];
    $file_name = $data['phone'].".".pathinfo($temp,PATHINFO_EXTENSION);
    $configss['file_name'] = $file_name;    
    $this->load->library('upload', $configss);
    if (!$this->upload->do_upload('coverletter')) {
      $error = array('error' => $this->upload->display_errors());
      // print_r($error);exit;
      $this->session->set_flashdata('fail', 'Some error while uploading file / Check your file type. !!');
      redirect(base_url() . "application-for-excom-20-21");
    } else {
      $url = base_url("assets/uploads/execom_reg/");
      $data['coverletter'] = $url.$file_name;
      $this->db->insert('execom_reg', $data);
      return 201;
    }
  }

  public function google_recaptcha($recaptcha){
    $recaptchaResponse = trim($recaptcha);
    // $userIp=$this->input->ip_address();
    $secret = '';
    $credential = array(
      'secret' => $secret,
      'response' => $recaptcha
    );
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
    curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    return $response;
  }
}
