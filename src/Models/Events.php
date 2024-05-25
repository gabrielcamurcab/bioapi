<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model {
    protected $table = 'events';
    protected $fillable = ['name', 'image', 'datetime', 'url'];
}