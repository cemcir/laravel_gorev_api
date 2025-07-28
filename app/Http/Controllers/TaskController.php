<?php

namespace App\Http\Controllers;

use App\DataAccess\TaskModel;
use App\Http\Requests\Task\TaskAddRequest;
use App\Http\Requests\Task\TaskUpdateRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskModel $taskModel;

    function __construct(TaskModel $taskModel)
    {
        $this->taskModel = $taskModel;
    }


    public function Add(TaskAddRequest $request)
    {
        try {
            $task = $request->all();
            $this->taskModel->Add($task);
            return response()->json(['status'=>200,'msg'=>'Görev Başarıyla Eklendi'],200,[],JSON_UNESCAPED_UNICODE);
        }
        catch (\Exception $e) {
            return response()->json(['status' => 400, 'msg' => $e->getMessage()],400,[],JSON_UNESCAPED_UNICODE);
        }
    }

    public function Update(TaskUpdateRequest $request):object
    {
        try {
            $task = $request->all();
            $this->taskModel->Update($task,$task['taskId']);
            return response()->json(['status'=>200,'msg'=>'Görev Başarıyla Güncellendi'],200,[],JSON_UNESCAPED_UNICODE);
        }
        catch (\Exception $e) {
            return response()->json(['status' => 400, 'msg' =>$e->getMessage()],400,[],JSON_UNESCAPED_UNICODE);
        }
    }

    public function GetAll():object
    {
        $tasks = $this->taskModel->GetAll();
        return response()->json(['status'=>200,'data'=>$tasks],200,[],JSON_UNESCAPED_UNICODE);
    }

    public function Get(Request $request)
    {
        if($request->query('taskId') && $request->query('taskId')!=null) {
            $task = $this->taskModel->Get([['taskId','=',$request->query('taskId')]]);
            if($task) {
                return response()->json(['status'=>200,'data'=>$task],200,[],JSON_UNESCAPED_UNICODE);
            }
        }
        return response()->json(['status'=>404,'data'=>[]],404,[],JSON_UNESCAPED_UNICODE);
    }

    public function Delete(Request $request)
    {
        try {
            $this->taskModel->Delete($request->taskId);
            return response()->json(['status' => 200, 'msg' => 'Görev Kaydı Başarıyla Silindi'], 200, [], JSON_UNESCAPED_UNICODE);
        }
        catch (\Exception $e) {
            return response()->json(['status' => 400, 'msg' => $e->getMessage()], 400, [], JSON_UNESCAPED_UNICODE);
        }
    }

}
