<?php

class Auth extends Controller {
	public function __construct()
	{	
		
	}

	public function index()
	{
		$data = [
      'title' => "Halaman Login"
    ];

		view('auth/login', $data);
	}

  function aksi_login()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $data = model("UserModel")->getByUsername($username);

      if(password_verify($password, $data['password'])){
        setMsg("Aktivitas masuk berhasil.");
        
        $_SESSION['log_id'] = $data['id'];
        $_SESSION['log_username'] = $username;
				$_SESSION['log_status'] = 1;

        header('location: '. site_url('home'));
        die();
        
      }else{
        setMsg("Kombinasi username dan password masih belum tepat.", "error");
      }
    }
    header('location: '. site_url('auth'));
  }

  function aksi_logout()
  {
    setMsg("Aktivitas keluar berhasil.");
    $_SESSION['log_id'] = null;
    $_SESSION['log_username'] = null;
    $_SESSION['log_status'] = 0;
    header('location: '. site_url('auth'));
  }

}