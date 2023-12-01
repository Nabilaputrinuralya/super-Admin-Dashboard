<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    use HasFactory;
    protected $table = "cobas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','fullname','jobposition','description','instagramlink','linkedinlink','profilepicture'];
}
