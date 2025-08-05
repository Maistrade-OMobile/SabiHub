<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatorFieldsToWaitingListTable extends Migration
{
    public function up()
    {
        Schema::table('waiting_lists', function (Blueprint $table) {
            $table->string('platform')->nullable()->after('contact_person_contact');
            $table->string('profile_link')->nullable()->after('platform');
            $table->string('content_area')->nullable()->after('profile_link');
        });
    }

    public function down()
    {
        Schema::table('waiting_lists', function (Blueprint $table) {
            $table->dropColumn(['platform', 'profile_link', 'content_area']);
        });
    }
}

