<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    protected $with = [
        'user',
        'mobil',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id', 'id');
    }

    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class, 'peminjam_id', 'id');
    }
}
