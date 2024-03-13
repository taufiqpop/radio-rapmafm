<?php

namespace App\Models;

use CodeIgniter\Model;

class CrewModel extends Model
{
    protected $table            = 'crew';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
