<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Table_2_Model;

class Table_1_Model extends Model
{
    protected $table      = 'table_1';
    public    $timestamps = false;

    public function table_2()
    {
        // return $this->hasOne('App\Models\Table_2_Model', 'id', 'id');

        return $this->hasOne(Table_2_Model::class, 'id', 'table_2_id');
    }
}
