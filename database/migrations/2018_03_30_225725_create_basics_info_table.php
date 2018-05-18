<?php

use App\Basic;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics_info', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable(); //usuario que modifica
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('sitio');
            $table->string('link_fb');
            $table->string('link_tw');
            $table->string('link_yt');
            $table->string('email');
            $table->string('address');
            $table->string('telephone');
            $table->string('objective');
            $table->string('about_us');
            $table->string('biography');
            $table->timestamps();
        });

        Basic::create([
            'sitio' => 'Gafette',
            'link_fb' => 'https://www.fb.com',
            'link_tw' => 'https://twitter.com/',
            'link_yt' => 'https://www.youtube.com/',
            'email' => 'Support@Gafette.com',
            'address' => 'Blvd. Marcelino García Barragán #1421, esq. Calz. Olímpica, Guadalajara, Jalisco, México. CP.44430',
            'telephone' => '+52 (33) 1378 5900',
            'objective' => 'Consolidad un estadar de sitios web de negocios emergentes con la finalidad de otorgar un precio asequible y facilitar la presencia de los nuevos straups',
            'about_us' => 'Somos 3 estudiantes de Ing. en Informatica de CUCEI, y este es el producto que estamos desarrollando para la asignatura de administracion de base de datos',
            'biography' => 'Gafette proyecto nacido de azucar, amor y mucho, mucho cafe...',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basics_info');
    }
}
