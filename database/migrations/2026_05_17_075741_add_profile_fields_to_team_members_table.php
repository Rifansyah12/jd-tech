<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('education')->nullable()->after('phone');
            $table->string('location')->nullable()->after('education');
            $table->text('bio')->nullable()->after('location');
            $table->json('skills')->nullable()->after('bio');
            $table->string('twitter_url')->nullable()->after('linkedin_url');
        });
    }

    public function down(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'education',
                'location',
                'bio',
                'skills',
                'twitter_url'
            ]);
        });
    }
};