
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Noms');
            $table->string('Age_Spirituel');
            $table->string('Ville');
            $table->string('SituationMatrimoniale');
            $table->string('Sexe');
            $table->string('Age');
            $table->string('Competence');
            $table->string('Cursus');
            $table->string('Photo');
            $table->string('Matricule');
            $table->string('PaysOrigine');
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
        Schema::dropIfExists('students');
    }
}

