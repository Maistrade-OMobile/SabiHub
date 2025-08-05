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
   public function up(): void
    {
        Schema::table('waiting_lists', function (Blueprint $table) {
            $table->string('contact_person_contact')->nullable()->after('contact_person');
          
        });
    }

    public function down(): void
    {
        Schema::table('waiting_lists', function (Blueprint $table) {
            $table->dropColumn(['contact_person_contact']);
        });
    }
};
