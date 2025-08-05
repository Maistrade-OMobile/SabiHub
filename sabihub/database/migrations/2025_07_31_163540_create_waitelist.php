<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waiting_list', function (Blueprint $table) {
            $table->id();
            $table->enum('user_type', ['student', 'parent', 'teacher', 'school', 'creator']);
            $table->string('firstname');
            $table->string('othername')->nullable();
            $table->string('phone')->nullable();
            $table->string('school')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('school_name')->nullable();
            $table->string('contact_person')->nullable();
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
        Schema::dropIfExists('waiting_list');
    }
};
