<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;

class CategoriesController extends Controller
{
  
  
  /**
   * Service instance for API requests
   *
   * @var CategoryService
   */
  protected $service;
  
  
  public function __construct(CategoryService $service) 
  {
    $this->service = $service;
  }
  
  
  /**
   *
   * Returns Subcategories by Parent Category Name
   * @param string $name
   * @return array 
   */
  
  
  public function getOne($name)
  {
    $category = $this->service->getCategory($name);
    return $category->response->groups;
  }
  
  
  /**
   *
   * Returns list of categories
   * @return array
   */
  public function getList()
  {
    $categories = $this->service->getCategories();
    return  $categories->response->categories;
  }
}
