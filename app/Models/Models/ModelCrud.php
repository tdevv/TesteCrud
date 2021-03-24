<?php

namespace App\Models\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCrud extends Model
{

    protected $fillable = [ 'user', 'description', 'date', 'file', 'price'];
}
