<?php

namespace App\Models;

use CodeIgniter\Model;

class InventarisModel extends Model
{
    protected $table            = 'inventaris';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'kode', 'kondisi', 'tahun', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('inventaris')->like('value', $keyword)->orLike('kode')->orLike('kondisi')->orLike('tahun');
    }

    public function jumlahInventaris()
    {
        return $this->table('inventaris')->get()->getNumRows();
    }
}
