<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModel extends Model
{
    protected $table            = 'suratkeluar';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('suratkeluar')->like('value', $keyword);
    }

    public function jumlahSuratKeluar()
    {
        return $this->table('suratkeluar')->get()->getNumRows();
    }
}
