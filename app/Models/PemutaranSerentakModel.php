<?php

namespace App\Models;

use CodeIgniter\Model;

class PemutaranSerentakModel extends Model
{
    protected $table            = 'pemutaranserentak';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('pemutaranserentak')->like('value', $keyword);
    }

    public function jumlahPemutaranSerentak()
    {
        return $this->table('pemutaranserentak')->get()->getNumRows();
    }
}
