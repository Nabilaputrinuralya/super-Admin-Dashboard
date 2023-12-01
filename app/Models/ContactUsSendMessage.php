<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsSendMessage extends Model
{
    use HasFactory;
    protected $table = "contact_us_send_messages";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','fullname','email','phonenumber','subject','message'];
}
