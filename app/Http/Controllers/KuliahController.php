<?php

namespace App\Http\Controllers;

use App\Models\Kuliah;
use App\Models\TaskOrigin;
use Illuminate\Http\Request;

class KuliahController extends Controller
{
    public function tampil()
    {
        return "hasil perkuliahan";
    }

    public function kuliahSore()
    {
        $model = new Kuliah();
        return $model->sore();
    }

    public function kuliahPagi($id)
    {
        $model = new Kuliah();
        $data = $model->pagi();
        return "$data bersama $id";
    }

    public function kuliahSiang(Request $request)
    {
        $model = new Kuliah();
        $data = $model->pagi();
        return "{$data} bersama {$request->nama}";
    }

    public function showAllTask()
    {
        $data = TaskOrigin::getAllTask();
        return $data;
    }

    public function insertTask(Request $request)
    {
        $task = new TaskOrigin();
        $task->name = $request->name;
        $task->created_at = $request->created_at;
        $task->updated_at = $request->updated_at;
        $task->insert();
        return json_encode($task);
    }


}
