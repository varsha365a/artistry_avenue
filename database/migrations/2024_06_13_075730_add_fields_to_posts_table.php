<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->string('image')->nullable();
    });
}

public function down()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn(['name', 'price', 'image']);
    });
}
};
