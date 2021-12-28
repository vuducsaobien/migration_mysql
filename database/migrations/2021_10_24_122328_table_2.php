<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Table_2_Model as MainModel;

class Table2 extends Migration
{
    private $table_db = 'table_2';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_db, function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('email');
        });

        MainModel::insert([
            [
                'phone' => 'phone_1', 'email' => 'email_1'
            ],[
                'phone' => 'phone_2', 'email' => 'email_2'
            ],[
                'phone' => 'phone_3', 'email' => 'email_3'
            ],[
                'phone' => 'phone_4', 'email' => 'email_4'
            ],[
                'phone' => 'phone_5', 'email' => 'email_5'
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
        Schema::dropIfExists($this->table_db);
    }
}
