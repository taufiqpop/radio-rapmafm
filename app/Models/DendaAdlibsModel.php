<?php

namespace App\Models;

use CodeIgniter\Model;

class DendaAdlibsModel extends Model
{
    protected $table            = 'dendadlibs';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('dendadlibs')->like('value', $keyword);
    }

    public function jumlahDendaAdlibs()
    {
        return $this->table('dendadlibs')->get()->getNumRows();
    }
}
