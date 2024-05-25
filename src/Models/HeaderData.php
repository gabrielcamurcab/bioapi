<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderData extends Model {
    protected $table = 'header_data';
    protected $fillable = ['photo', 'title', 'subtitle'];
}