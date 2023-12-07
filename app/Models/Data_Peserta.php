<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Peserta extends Model
{
    use HasFactory;
    protected $table = 'data_peserta';
    protected $guarded = ['_token', 'simpan'];
    protected $primaryKey = 'id_peserta';
}
