<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoticiasAddImg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('noticias',function(Blueprint $table){
           $table->string('imgNombreVirtual')->nullable();
           $table->string('imgNombreFisico')->nullable();
       });
   }
    
    
    public function down() {
        Schema::table('noticias',function(Blueprint $table){
            $table->dropColumn('imgNombreVirtual');
            $table->dropColumn('imgNombreFisico');
    });
    }

   
   
}