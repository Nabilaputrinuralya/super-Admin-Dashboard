<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDescription extends Model
{
    use HasFactory;
    protected $table = "about_descriptions";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','description' ];
}
