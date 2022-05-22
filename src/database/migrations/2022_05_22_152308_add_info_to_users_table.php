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
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable()->after('name');
            $table->integer('age')->nullable()->after('surname');
            $table->unsignedSmallInteger('gender')->nullable()->after('age');
            $table->string('address')->nullable()->after('gender');
            $table->bigInteger('phone')->nullable()->after('address');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('phone');

            $table->dropSoftDeletes();
        });
    }
};
