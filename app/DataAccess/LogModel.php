<?php

namespace App\DataAccess;

use App\Core\DataAccess\BaseModel;
use App\Models\Log;

class LogModel extends BaseModel
{
    protected $model = Log::class;
}
