<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $primaryKey = 'numeroVuelo';
    public $incrementing = false;
    public $timestamps = false;
    use HasFactory;
}
