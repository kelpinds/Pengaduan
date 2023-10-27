<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = "tanggapans";

    protected $primaryKey = "id";
    public $incrementing="false";
    protected $keyType = "string";
    protected $guarded=[];
}
