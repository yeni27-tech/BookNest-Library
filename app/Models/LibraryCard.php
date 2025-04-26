<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryCard extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'barcode', 'issued_date', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
