<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_dana;
class Home extends BaseController
{
	public function menu()
	{
		if(session()->get('level')>''){
		$model = new M_dana;
		$data['darren'] = $model->join3s('donasi','program','user','donasi.id_program=program.id_program','donasi.id_user=user.id_user');
		echo view('header');
		echo view('menu',$data);
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function login()
	{
		echo view ('header');
		echo view('login');
		
	}

	public function aksi_login()

	{

		$name = $this->request->getPost('username');
		$pw = $this->request->getPost('password');

		$where = array(

			'username'=>$name,
			'password'=>$pw,
		);
		
		$model = new M_dana();
		$check = $model -> getWhere('user',$where);
		
			if ($check>0) {
				session()->set('username',$check->username);
				session()->set('id',$check->id_user);
				session()->set('level',$check->level);
			return redirect()->to('home/menu');
		}else{
			return redirect()->to('home/login');
		

		}
	}

	public function register()
{
	
	$model = new M_dana;
	$data['darren'] = $model->tampil('user');
	echo view ('header');
	echo view('register'); 

}

public function aksi_register()
{
	$username = $this->request->getPost('username');
	$password = $this->request->getPost('password');
	$level = $this->request->getPost('status');
	
		
	$tabel=array(
		'username'=>$username,
		'password'=>$password,
		'level'=>$level

	);

	$model=new M_dana;
	$model->tambah('user', $tabel);
	return redirect()->to('home/login');

}

public function donasi()
	{
		if(session()->get('level')>''){
		$model=new M_dana;
		$data['darren'] = $model->tampil('program');
		echo view('header');
		echo view('donasi',$data);
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_donasi()
	{
		$model=new M_dana;
		session()->start();
		$id_user=$_SESSION['id'];
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date("H:i:s");
		$program = $this->request->getPost('program');	
		$nominal = $this->request->getPost('nominal');
		$pembayaran = $this->request->getPost('jenis_pembayaran');
		$tanggal = $this->request->getPost('tanggal');
		$pesan = $this->request->getPost('pesan');
		
	$tabel=array(
		'id_user'=>$id_user,
		'id_program'=>$program,
		'jumlah_donasi'=>$nominal,
		'jenis_pembayaran'=> $pembayaran,
		'tanggal'=> $tanggal,
		'waktu'=> $waktu,
		'pesan'=>$pesan

	);
// print_r($tabel);
	$model=new M_dana;
	$model->tambah('donasi', $tabel);
	return redirect()->to('home/history2/'.$program);
	}
	
	public function logout()
{
	session()->destroy();
	return redirect()->to('home/login');
}

public function history()
{
	if(session()->get('level')>''){
	$model=new M_dana;
	$where = array('id_user' => session()->get('id'));
	$data['darren'] = $model->joinWhererr('donasi','program','donasi.id_program=program.id_program',$where);
	echo view ('header');
	echo view('history',$data);
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

public function addprogram()
{
	if(session()->get('level')>''){
	echo view ('header');
	echo view('tambahprogram');
	echo view('footer');
	}else{
	return redirect()->to('home/login');
}
}

public function addprogram1()
{
	$model=new M_dana;
		$nama = $this->request->getPost('nama');	
		$mulai = $this->request->getPost('mulai');
		$selesai = $this->request->getPost('selesai');
		$target = $this->request->getPost('target');
		$uploadedFile = $this->request->getFile('foto');
		$foto = $uploadedFile->getName();
		
	$tabel=array(
		'nama_program'=>$nama,
		'tanggal_mulai'=>$mulai,
		'tanggal_selesai'=>$selesai,
		'target'=> $target,
		'foto'=> $foto,
		'donasi_terkumpul'=> '0'

	);

	$model=new M_dana;
	// print_r($tabel);
	$model->upload($uploadedFile);
	$model->tambah('program', $tabel);
	return redirect()->to('home/listprogram');
}

public function history2($id_program)
{
    if (session()->get('level') > '') {
        $model = new M_dana;
        $where = array('donasi.id_program' => $id_program);
        $data['darren'] = $model->join3('donasi', 'program', 'user', 'donasi.id_program = program.id_program', 'donasi.id_user = user.id_user', $where);
        echo view('header');
        echo view('history2', $data);
        echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
}


public function detailprogram($id)
{
	if(session()->get('level')>''){
	$model = new M_dana;
	$where = array('id_program'=>$id);
	$data['user']= $model->getWhere('program',$where);

	echo view ('header');
	echo view('detailprogram',$data);
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

public function listprogram()
{
	if(session()->get('level')>''){
	$model = new M_dana;
   $data['darren'] = $model->tampil('program');
	echo view ('header');
	echo view('listprogram',$data);
	echo view('footer');
}else{
	return redirect()->to('home/login');
}
}

public function profile()
{
	if(session()->get('level')>''){
		$model = new M_dana;

	$where = array('id_user' => session()->get('id'));
	$data['user'] = $model->getWhere('user', $where);
	echo view('header');
	echo view('profile',$data); 
	echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
}

public function editfoto()
{
    $model = new M_dana();
    $userData = $model->getById(session()->get('id'));

    if ($this->request->getFile('foto')) {

        $file = $this->request->getFile('foto');
        $newFileName = $file->getRandomName(); 
        $file->move(ROOTPATH . 'public/img', $newFileName);

        if ($userData['foto'] && file_exists(ROOTPATH . 'public/img/' . $userData['foto'])) {
            unlink(ROOTPATH . 'public/img/' . $userData['foto']);
        }
        $userId = ['id_user' => session()->get('id')];
        $userData = ['foto' => $newFileName];
        $model->edit('user', $userData, $userId);
    }

    return redirect()->to('home/profile');
}



public function editprofile()
{
	if(session()->get('level')>''){
		$model = new M_dana;

	$where = array('id_user' => session()->get('id'));
	$data['user'] = $model->getWhere('user', $where);
	echo view('header');
	echo view('editprofile',$data); 
	echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
}

public function editprofile1()
{
	$model = new M_dana; 
	$a = $this->request->getPost('name');
	$b = $this->request->getPost('email');
	$c = $this->request->getPost('nohp');
	$where = array('id_user' => session()->get('id'));

	$isi = array(
		'username'=> $a,
		'email'=> $b,	
		'nohp'=> $c,			
	);
	$model->edit('user',$isi, $where);
	return redirect()->to('home/profile');
}
}
