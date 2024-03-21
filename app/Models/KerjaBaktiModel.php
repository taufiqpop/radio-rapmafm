<?php

namespace App\Models;

use CodeIgniter\Model;

class KerjaBaktiModel extends Model
{
    protected $table            = 'kerjabakti';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('kerjabakti')->like('value', $keyword);
    }

    public function jumlahKerjaBakti()
    {
        return $this->table('kerjabakti')->get()->getNumRows();
    }
}
