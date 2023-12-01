<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{
    use HasFactory;
    protected $table = "user_management";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','userproject','userid','username','email','phone','prfoilepicture'];
}
