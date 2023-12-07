<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Pelatihan extends Model
{
    use HasFactory;
    protected $table = 'data_pelatihan';
    protected $guarded = ['_token', 'simpan'];
    protected $primaryKey = 'id';
}
