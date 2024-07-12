<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table = 'sliders';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'image', 'title', 'description',
        'created_at', 'updated_at', 'deleted_at',
        'created_by', 'updated_by', 'deleted_by'
    ];

    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';
}
?>
