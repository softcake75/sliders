<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function __construct()
    {
        session()->start();
    }

        public function index()
    {
        $model = new UserModel();

        // Mengambil informasi sesi
        $nama = session()->get('nama');
        $role = session()->get('role');
        $idUsers = session()->get('log');

        // Inisialisasi data untuk dikirim ke view
        $data = [];

        if ($role == 1) {
            // Jika peran adalah 1, ambil semua data pengguna
            $data['users'] = $model->findAll();
        } elseif ($role == 2) {
            // Jika peran adalah 2, ambil data pengguna berdasarkan id_users
            $user = $model->getUserById($idUsers);

            // Periksa apakah data pengguna ditemukan
            if ($user) {
                $data['users'] = [$user]; // Mengubah menjadi array agar sesuai dengan struktur data di view
            } else {
                // Handle jika data pengguna tidak ditemukan
                // Misalnya, dapat mengarahkan pengguna atau menampilkan pesan kesalahan
                // Sesuaikan dengan kebutuhan aplikasi Anda
                // Contoh: redirect(base_url('halaman_error'));
                // atau set flashdata('error', 'Data pengguna tidak ditemukan');
            }
        }

        return view('user/index', $data);
    }

}
