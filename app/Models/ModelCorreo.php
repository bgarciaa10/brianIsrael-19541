<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCorreo extends Model
{
    protected $table = "correo";

    public $timestamps = false;

    protected $fillable = [
        "id", "name", "email", "phone", "subject", "message"
    ];

    protected $primaryKey = "id";
}
