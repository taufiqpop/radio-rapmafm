<?php

namespace App\Models;

use CodeIgniter\Model;

class LiveReportModel extends Model
{
    protected $table            = 'livereport';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('livereport')->like('value', $keyword);
    }

    public function jumlahLiveReport()
    {
        return $this->table('livereport')->get()->getNumRows();
    }
}
