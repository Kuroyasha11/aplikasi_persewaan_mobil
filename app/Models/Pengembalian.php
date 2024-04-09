<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    protected $with = [
        'user',
        'mobil',
        'peminjam',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id', 'id');
    }

    public function peminjam()
    {
        return $this->belongsTo(Peminjam::class, 'peminjam_id', 'id');
    }
}
