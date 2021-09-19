<?php

use App\Models\Petition;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petitions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('info');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
        // Petition::create([
        //     'title' => 'The petition of non petitions',
        //     'info' => 'A petition not about petitions',
        //     'creater' => 'FullStack Test',
        //     'user_id' => '1',
        // ]);

        // Petition::create([
        //     'title' => 'The petition of petitions',
        //     'info' => 'A petition about petitions',
        //     'creater' => 'A Stranger',
        //     'user_id' => '2',
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petitions');
    }
}