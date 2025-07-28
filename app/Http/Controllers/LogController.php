<?php

namespace App\Http\Controllers;

use App\DataAccess\LogModel;
use Illuminate\Http\Request;

class LogController extends Controller
{
    private LogModel $logModel;

    function __construct(LogModel $logModel)
    {
        $this->logModel = $logModel;
    }


}
