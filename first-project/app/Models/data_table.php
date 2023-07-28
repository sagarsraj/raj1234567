<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_table extends Model
{
    public $table = 'data';
    public $primarykey='name';
    public $incrimenting=true;
    public $timestamps=false;
     
}
