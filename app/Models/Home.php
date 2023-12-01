<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "homes";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','websiteimage','websitelogo','greetingsword','websitedescription'];
}

