<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_childs', function (Blueprint $table) {
                $table->increments('id');
            $table->bigInteger('reg_id')->unique();
            $table->bigInteger('parent_id');
              $table->string('email');
            $table->string('full_name');
            $table->string('class');
            $table->string('DOB');
            $table->string('gender');
            $table->string('pickup_token');
            $table->bigInteger('status');
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
        Schema::dropIfExists('user_childs');
    }
}
