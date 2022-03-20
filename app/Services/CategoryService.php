<?php

namespace App\Services;

use LaravelEasyRepository\Service;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryService extends Service {

     /**
     * don't change $this->mainInterface variable name
     * because used in extends service class
     */
     protected $mainInterface;

    public function __construct(CategoryRepositoryInterface $mainInterface)
    {
      $this->mainInterface = $mainInterface;
    }

    // Define your custom methods :)
}
