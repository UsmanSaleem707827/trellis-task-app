<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('categories')->insert([
            ['title' => 'Technology', 'slug' => 'technology'],
            ['title' => 'Health', 'slug' => 'health'],
            ['title' => 'Lifestyle', 'slug' => 'lifestyle'],
            ['title' => 'Education', 'slug' => 'education'],
            ['title' => 'Travel', 'slug' => 'travel'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('categories')->whereIn('slug', ['technology', 'health', 'lifestyle', 'education', 'travel'])->delete();
    }
};
