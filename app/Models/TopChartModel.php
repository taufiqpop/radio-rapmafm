<?php

namespace App\Models;

use CodeIgniter\Model;

class TopChartModel extends Model
{
    protected $table            = 'topchart';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('topchart')->like('value', $keyword);
    }
}
