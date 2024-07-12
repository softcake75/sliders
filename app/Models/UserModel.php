<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id_users';
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama', 'alamat', 'email', 'password', 'no_hp', 'role'];

    public function login($email, $password)
    {
        return $this->db->table('users')->where([
            'email' => $email,
            'password' => $password,
            ])->get()->getRowArray();

    }

    public function getUserById($idUsers)
    {
        return $this->where('id_users', $idUsers)->first();
    }
}
