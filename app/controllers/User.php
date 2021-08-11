<?php

class User extends Controller {
	public function __construct()
	{	
		cekLogin();
	} 

	public function index()
	{
		$data['judul'] = 'Data User';
		view('user/index', $data);
	}

	public function add()
	{
		$data['judul'] = 'Tambah User';
		view('user/add', $data);
	}

	public function edit()
	{
		$data['judul'] = 'Edit User';
		view('user/edit', $data);
	}

	public function delete()
	{
		$data['judul'] = 'Delete User';
		view('user/delete', $data);
	}

}