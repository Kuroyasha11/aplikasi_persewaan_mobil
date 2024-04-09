<?php

use App\Models\Mobil;
use \App\Models\User;
use \App\Models\Peminjam;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Mobil::class, 'mobil_id');
            $table->foreignIdFor(Peminjam::class, 'peminjam_id');
            $table->integer('total_sewa');
            $table->integer('tarif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
