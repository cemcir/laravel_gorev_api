<?php

namespace App\DataAccess;

use App\Core\DataAccess\BaseModel;
use App\Models\Task;

class TaskModel extends BaseModel
{
    protected $model=Task::class;
}
