<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form', 'session');
        $this->UserModel = new UserModel;

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        //menampilkan halaman login
        return view('/auth/login');
    }

    public function cek_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required',
                'msg' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'msg' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong !!!'
                ]
            ],
        ])) {
            // jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->UserModel->login($email, $password);

            if ($cek) {
                // jika data cocok
                session()->set('log', $cek['id_users']);
                session()->set('nama', $cek['nama']);
                session()->set('email', $cek['email']);
                session()->set('role', $cek['role']);
                $role = session()->get('role');
                if($role=='1'){
                  return redirect()->to(base_url('admin/boking'));
                }elseif($role=='2'){
                    return redirect()->to(base_url('user/user'));
                } else {

                }
               
               
            } else {
                // jika data tidak cocok
                session()->setFlashdata('pesan', 'Login Gagal, silahkan cek email dan password');
                return redirect()->to(base_url('login'));
            }
        } else {
            // Handle kasus ketika validasi tidak berhasil
        }
    }

    public function register()
    {
        //menampilkan halaman register
        return view('/auth/register');
    }

    public function valid_register()
    {
        // Tangkap data dari form 
        $data = $this->request->getPost();

        // Jalankan validasi
        $this->validation->run($data, 'register');

        // Cek error
        $errors = $this->validation->getErrors();

        // Jika ada error, kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('register');
        }

        // Jika tidak ada error 

        // Buat salt
        $salt = uniqid('', true);

        // Simpan data ke database dengan password mentah (plaintext)
        $this->UserModel->save([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => $data['password'], // Simpan password mentah
            'alamat' => $data['alamat'], // Simpan password mentah
            'no_hp' => $data['no_hp'], // Simpan password mentah
            'salt' => $salt,
            'role' => 2
        ]);

        // Arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to(base_url('login'));
    }

    public function logout()
{
    // Hancurkan semua data sesi
    session()->destroy();
    return redirect()->to(base_url('login'));
}
}
