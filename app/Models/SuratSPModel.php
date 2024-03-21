<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratSPModel extends Model
{
    protected $table            = 'suratsp';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('suratsp')->like('value', $keyword);
    }

    public function jumlahSuratSP()
    {
        return $this->table('suratsp')->get()->getNumRows();
    }
}
