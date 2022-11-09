<?php

namespace App\Http\Controllers;

use App\Models\TaskOrigin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskOriginController extends Controller
{
    public function semua()
    {
        $task = new TaskOrigin();
        $hasil = $task->getAllTask();
        return $hasil;
        // return DB::select('select * from tasks');
    }
}
