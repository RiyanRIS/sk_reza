<?php

class Arsip extends Controller {
	public function __construct()
	{	
		cekLogin();
	} 

	public function index()
	{
		$data['judul'] = 'Data Arsip';
		view('arsip/index', $data);
	}

	public function add()
	{
		$data['judul'] = 'Tambah Arsip';
		view('arsip/add', $data);
	}

	public function edit()
	{
		$data['judul'] = 'Edit Arsip';
		view('arsip/edit', $data);
	}

	public function delete()
	{
		$data['judul'] = 'Delete Arsip';
		view('arsip/delete', $data);
	}

}