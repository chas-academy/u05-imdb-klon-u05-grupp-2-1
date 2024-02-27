<?php

use App\Models\Watchlist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('watchlists', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Watchlist');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('media_id')->default(0);
            $table->string('media_type')->default('Type');
            $table->timestamps();
            $table->index('user_id');
            $table->index(['media_id', 'media_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watchlists');
    }
};
