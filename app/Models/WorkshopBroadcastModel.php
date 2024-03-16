<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkshopBroadcastModel extends Model
{
    protected $table            = 'workshopbroadcast';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('workshopbroadcast')->like('value', $keyword);
    }

    public function jumlahWorkshopBroadcast()
    {
        return $this->table('workshopbroadcast')->get()->getNumRows();
    }
}
