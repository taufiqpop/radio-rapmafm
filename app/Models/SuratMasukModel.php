<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasukModel extends Model
{
    protected $table            = 'suratmasuk';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('suratmasuk')->like('value', $keyword);
    }

    public function jumlahSuratMasuk()
    {
        return $this->table('suratmasuk')->get()->getNumRows();
    }
}
