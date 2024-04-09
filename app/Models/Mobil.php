<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobil extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $guarded = ['id'];

    public function peminjam()
    {
        return $this->hasMany(Peminjam::class, 'mobil_id', 'id');
    }

    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class, 'mobil_id', 'id');
    }
}
