<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'member';

    protected $primaryKey = 'id';

    protected $fillable  = ['firstname', 'lastname'];
}
