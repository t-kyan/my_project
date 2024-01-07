<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです。";

        // 追加
        //$insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'sample2@sample.com','user2','pass2')");
        //dd($insertResult);
        
        //更新
        //$updateResult = DB::connection("mysql")->update("update users set email = 'sample4@sample.com', name = 'user4', password = 'pass4' where id = 4");
        //dd($updateResult);

        // 削除
        $deleteResult = DB::connection("mysql")->delete("delete from users where name = 'user3'");
        dd($deleteResult);
        
        return view("sample/index" , [ "sampleValue" => $sampleValue ]);
    }
}