<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai konvensi plural Laravel (misalnya bukan "feedbacks")
    protected $table = 'feedback';

    // Kolom-kolom yang boleh diisi secara massal
    protected $fillable = [
        'nama',
        'status',
        'email',
        'pesan',
    ];
}
