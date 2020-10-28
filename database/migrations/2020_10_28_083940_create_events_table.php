<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->longText('description')->nullable();
            $table->string('link')->nullable();
            $table->dateTime('begin_at')->nullable();
            $table->dateTime('end_at')->nullable();
            $table->decimal('price', 8, 2)->default(0.00);
            $table->unsignedSmallInteger('count_subscriber')->default(0);
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
