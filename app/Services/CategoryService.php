<?php

namespace App\Services;

use LaravelEasyRepository\Service;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryService extends Service
{

  protected $categoryRepository;

  public function __construct(CategoryRepositoryInterface $categoryRepository)
  {
    $this->categoryRepository = $categoryRepository;
  }

  public function list()
  {
    return $this->categoryRepository->all();
  }
}
