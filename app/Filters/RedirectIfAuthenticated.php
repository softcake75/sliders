<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class RedirectIfAuthenticated implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        // Periksa apakah pengguna telah login
        if (!session()->has('log')) {
            // Jika tidak, redirect ke halaman login
            return redirect()->to(base_url('login'));
        }

        // Periksa role pengguna dan arahkan sesuai
        $allowedRoles = is_array($arguments) ? $arguments : [$arguments];
        $userRole = session()->get('role');

        // Pastikan perbandingan role sebagai string
        if (!in_array((string)$userRole, $allowedRoles)) {
            // Jika peran pengguna tidak diizinkan, arahkan ke halaman yang sesuai
            switch ((string)$userRole) {
                case '1':
                    return redirect()->to(base_url('admin/boking'));
                case '2':
                    return redirect()->to(base_url('user/boking'));
                    // Tambahkan case untuk peran lainnya sesuai kebutuhan
                default:
                    return redirect()->to(base_url('logout'));
            }
        }
    }



    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
