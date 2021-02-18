<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegFormDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('applicantName');
            $table->string('applicantContact');
            $table->string('applicantEmail');
            $table->longText('applicantAddress');
            $table->string('guardianName');
            $table->string('guardianRelation');
            $table->string('guardianContact');
            $table->string('guardianEmail');
            $table->longText('guardianAddress');
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
        Schema::dropIfExists('reg_form_data');
    }
}
