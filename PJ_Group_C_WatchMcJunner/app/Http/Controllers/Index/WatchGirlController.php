<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WatchGirlController extends Controller
{
    public function index()
    {
        $data = DB::table('Products')
            ->get();
        return view('index.watch_girl', ['data' => $data]);
    }


}
