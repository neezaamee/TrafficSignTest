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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('subject');
            $table->string('name');
            $table->bigInteger('cnic');
            $table->bigInteger('contact')->nullable();
            $table->string('email');
            $table->string('address')->nullable();
            $table->mediumText('organization')->nullable();
            $table->mediumText('complainto');
            $table->longText('complaintext');
            $table->string('status')->nullable();
            $table->string('trackingid');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
};
