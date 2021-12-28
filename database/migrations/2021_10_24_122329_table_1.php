<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Table_1_Model as MainModel;

class Table1 extends Migration
{
    private $table_db = 'table_1';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_db, function (Blueprint $table) {
            $table->id('table_1_id');
            
            $table->bigInteger('table_2_id')->unsigned();
            $table->foreign('table_2_id')->references('id')->on('table_2');    

            $table->string('name');
            $table->string('address');
        });

        MainModel::insert([
            [
                'table_2_id' => 4, 'name' => 'name_1', 'address' => 'address_1'
            ],[
                'table_2_id' => 3, 'name' => 'name_2', 'address' => 'address_2'
            ],[
                'table_2_id' => 2, 'name' => 'name_3', 'address' => 'address_3'
            ],[
                'table_2_id' => 1, 'name' => 'name_4', 'address' => 'address_4'
            ]
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table_db, function($table)
        {
            // $table->dropForeign(['table_2_id']);
            // $table->dropColumn('table_2_id');
        });

        Schema::dropIfExists($this->table_db);
    }
}
