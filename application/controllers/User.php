<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
		$this->load->model('M_User');

		$user = $this->M_User->getAllUser();

		$data = [
			'title' => 'Halaman User',
			'user'  => $user
		];

		$this->load->view('v_user', $data);
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah User'
		];

		$this->load->view('v_addUser', $data);
	}

	public function store()
	{
		$nama     = $this->input->post('nama', true);
		$username = $this->input->post('username', true);
		$email    = $this->input->post('email', true);

		$data = [
			'nama'     => $nama,
			'username' => $username,
			'password' => password_hash('12345678', PASSWORD_BCRYPT),
			'email'    => $email
		];

		$insert = $this->db->insert('user', $data);

		if ($insert) {
			// berisi pesan
		} else {
			// berisi pesan
		}

		redirect('user', 'refresh');
	}

	public function edit($id)
	{
		$this->load->model('M_User');

		$user = $this->M_User->getOneUser($id);

		$data = [
			'title' => 'Edit User',
			'user'  => $user
		];

		$this->load->view('v_editUser', $data);
	}

	public function update()
	{
		$id = $this->input->post('id', true);
		$nama = $this->input->post('nama', true);
		$username = $this->input->post('username', true);
		$email = $this->input->post('email', true);

		$data = [
			'nama'     => $nama,
			'username' => $username,
			'password' => password_hash('12345678', PASSWORD_BCRYPT),
			'email'    => $email
		];

		$this->db->where('id', $id);
		$update = $this->db->update('user', $data);

		if ($update) {
			// berisi pesan
		} else {
			// berisi pesan
		}

		redirect('user', 'refresh');
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('user');

		if ($delete) {
			// berisi pesan
		} else {
			// berisi pesan
		}

		redirect('user', 'refresh');
	}
}

/* End of file User.php */
