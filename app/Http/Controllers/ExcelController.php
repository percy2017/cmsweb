<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ExcelController extends Controller
{
    
    function import(Request $request)
    {
        switch ($request->tables) {
            case 'users':
                Excel::import(new UserImport, $request->file('file_excel'));
                break;
            
            default:
                # code...
                break;
        }

        DB::table('excels')->insert([
            'name'       => $request->name,
            'table'      => $request->table,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('admin/excels')->with([
            'message'    => 'Importacion Exitosa',
            'alert-type' => 'success',
        ]);
    }
}
