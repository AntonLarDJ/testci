<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['name', 'email', 'password'];

    protected $useTimestamps = false;

    protected $beforeInsert = ['hashPassword'];


    public function hashPassword($data)
    {
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }


    public function AddUser($data)
    {
        $this->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);
    }

    public function CheckUser($data)
    {
        $userData = $this->where('email', $data['email'])->first();
        if (is_array($userData) && password_verify($data['password'], $userData['password'])) {
            return true;
        }
        return false;
    }
}
