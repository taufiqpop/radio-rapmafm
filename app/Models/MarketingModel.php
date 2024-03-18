<?php

namespace App\Models;

use CodeIgniter\Model;

class MarketingModel extends Model
{
    protected $table            = 'marketing';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('marketing')->like('value', $keyword);
    }

    public function jumlahMarketing()
    {
        return $this->table('marketing')->get()->getNumRows();
    }
}
