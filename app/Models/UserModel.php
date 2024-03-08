<?php

namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    // Nama Tabel
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['firstname', 'lastname', 'username', 'email', 'password', 'instagram','role', 'voucher', 'created_at', 'updated_at', 'deleted_at'];

    public function getUser($id = false)
    {
        $query = $this->select('*');
        // ->where('id', $id);
        if ($id === false) {
            return $query->findAll();
        } else {
            return $query->where(['id' => $id])->first();
        }
    }
    
}
