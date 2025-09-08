<?php

// app/Models/RequestFromOnline.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestFromOnline extends Model
{
    protected $table = 'request_from_online'; // Explicitly define table name

    protected $fillable = [
        'name',
        'mobile',
        'email',
        'message',
        'ip',
        'location',
        'doc_path',
        'token',
        'converted',
    ];
}


