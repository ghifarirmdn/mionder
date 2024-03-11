<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $table = 'santri';
    protected $primaryKey = 'id';
    protected $fillable = ['keluhan', 'riwayat'];
}
