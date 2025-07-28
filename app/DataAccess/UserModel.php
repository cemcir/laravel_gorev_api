<?php

namespace App\DataAccess;

use App\Core\DataAccess\BaseModel;
use App\Models\User;

class UserModel extends BaseModel
{
    protected $model=User::class;
}
