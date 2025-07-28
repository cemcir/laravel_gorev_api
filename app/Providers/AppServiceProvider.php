<?php

namespace App\Providers;

use App\Business\Abstract\ICustomCategoryService;
use App\Business\Abstract\IDashboardService;
use App\Business\Abstract\ILicenceService;
use App\Business\Abstract\ILogService;
use App\Business\Abstract\IMainCategoryService;
use App\Business\Abstract\IAdminService;
use App\Business\Concrete\CustomCategoryManager;
use App\Business\Concrete\DashboardManager;
use App\Business\Concrete\LicenceManager;
use App\Business\Concrete\LogManager;
use App\Business\Concrete\MainCategoryManager;
use App\Business\Concrete\AdminManager;
use App\Business\Constants\Abstract\IMessage;
use App\Business\Constants\Concrete\TurkishMessage;
use App\DataAccess\Abstract\IAdminDal;
use App\DataAccess\Abstract\ICustomCategoryDal;
use App\DataAccess\Abstract\ILicenceDal;
use App\DataAccess\Abstract\ILogDal;
use App\DataAccess\Abstract\IMainCategoryDal;
use App\DataAccess\Concrete\Eloquent\ElAdminDal;
use App\DataAccess\Concrete\Eloquent\ElCustomCategoryDal;
use App\DataAccess\Concrete\Eloquent\ElLicenceDal;
use App\DataAccess\Concrete\Eloquent\ElLogDal;
use App\DataAccess\Concrete\Eloquent\ElMainCategoryDal;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // dependency injection
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }

}
