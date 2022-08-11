<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'userInfo';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'id', 'name'
    ];
}
