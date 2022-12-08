<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        dd('test');

        // Eloquent(エロクアント)
        $valuse = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get();

        //クエリビルダ
        $queryBuilder = DB::table('tests')
            ->where('text', '=', 'bbb')
            ->select('id', 'text')
            ->get();

        dd($valuse, $count, $first, $whereBBB, $queryBuilder);

        return view('tests.test' , ['values'=>$valuse]);
    }

}