<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Table_1_Model;

class IndexController extends Controller
{

    public function index()
    {          
        // 1/ One to One Field id
        // $phone = Table_1_Model::find(2)->table_2;
        // $phone = Table_1_Model::findOrFail(4)->table_2->phone;
        // $phone = Table_1_Model::findOrFail(4)->table_2->toArray();
        // $phone = Table_1_Model::findOrFail(5)->table_2->toArray();

        // 2/ One to One Field table_1_id
        $phone = Table_1_Model::where('table_1_id', '=', 3)->firstOrFail()->table_2->toArray();
        // $phone = Table_1_Model::where('name', '=', 'name_1')->orderByDesc('table_1_id')->firstOrFail()->table_2->toArray();

        echo '<pre style="color:red";>$phone === '; print_r($phone);echo '</pre>';
    }

    

 
}