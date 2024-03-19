<?php

namespace App\Http\Controllers;

use App\Models\ProjectType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class Boost extends Controller
{
    use HasFactory;
    protected $table = 'boosts';
    protected $fillable = ['id', 'currentleague', 'targetleague', 'price',];

}
