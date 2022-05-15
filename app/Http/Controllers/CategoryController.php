<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use LaravelEasyRepository\Traits\Response;
use Symfony\Component\HttpFoundation\Response as ResponseCode;

class CategoryController extends Controller
{
    use Response;
    
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function list()
    {
        return $this->responseJson(true, "Get list success !", $this->categoryService->list(), ResponseCode::HTTP_OK);
    }
}
