<?php 

/**
* 
*/
class c_user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

        // Load librari helper
        $this->load->helper(array('form', 'url'));

        // Load librari form validation
        $this->load->library('form_validation');

        // Load librari session
        $this->load->library('session');

        // Load model
        $this->load->model('m_user');
    }

    public function user_login()
    {
     //   $this->load->view('header');
        $this->load->view('Login');
     //   $this->load->view('footer');
    }
    public function user_login_process() {

        $val_login = array(
                            array(
                                'field' => 'username',
                                'label' => 'Username',
                                'rules' => 'required',
                                 'errors' => array('required' =>'Anda harus mengisi %s.'),
                            ),
                            array(
                                'field' => 'password',
                                'label' => 'Password',
                                'rules' => 'required',
                                'errors' => array('required' =>'Anda harus mengisi %s.'),
                            ),
  
                    );
        $this->form_validation->set_rules($val_login);

        if ($this->form_validation->run() == FALSE) {
                
 //          	$this->load->view('header');
            $this->load->view('login');
 //           $this->load->view('footer');
           
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
                );
            $result = $this->m_user->login($data);
            if ($result == TRUE) {
                $username = $this->input->post('username');
                $result = $this->m_user->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->username,
                        'email' => $result[0]->email,
                        );
                    // Add user data in session
                    $this->session->set_userdata($session_data);
                    $this->load->view('home');
                }
            } else {
                $data = array('message_display' => 'Nama Pengguna atau Password Salah');
                
                $this->session->set_userdata( $data );
                redirect('Login');
            }
        }
    }
    public function user_registration() 
    {
//        $this->load->view('header');
        $this->load->view('Register');
//        $this->load->view('footer');
    }

    // Validasi dan simpan data registrasi ke dalam database
    public function reg_user()
	{
        $val_reg = array(
                            array(
                                'field' => 'username',
                                'label' => 'Username',
                                'rules' => 'required|is_unique[user.username]',
                                 'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'is_unique' => '%s sudah dipakai'),
                            ),
                            array(
                                'field' => 'password',
                                'label' => 'Password',
                                'rules' => 'required|min_length[6]',
                                'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'min_length' => '%s minimal 6 karakter'),
                            ),
                            array(
                                'field' => 'cpassword',
                                'label' => 'Konfirmasi Password',
                                'rules' => 'required|matches[password]',
                                 'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'matches' => '%s tidak sesuai dengan password'),
                            ),
                    
                            array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'required|is_unique[user.email]',
                                 'errors' => array('required' =>'Anda harus mengisi %s.',
                                                    'is_unique' => '%s sudah dipakai'),
                            ),
  
                    );

        $this->form_validation->set_rules($val_reg);


	    if ($this->form_validation->run() == FALSE) {
//	        $this->load->view('header');
	        $this->load->view('Register');
//	        $this->load->view('footer');
	    }else{
	        $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')) ,
                'email' =>$this->input->post('email') 
                ); 

	        $this->m_user->new_user($data);

	        $this->load->view('Login');
	    }
	}
}
 ?>