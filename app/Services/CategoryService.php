<?php
namespace App\Services;

use Iivannov\Larasquare\Facade\Larasquare;

class CategoryService
{
  
  
  /**
   * 
   * @return array $venues
   */
  public function getCategories()
  {
    $venues = Larasquare::request(config('foursquare.routes.list'));
    return $venues;
  }
  
  
  /**
   * Get a single category
   * 
   * @param string $name
   * @param string $city
   * @return array $category
   */
  public function getCategory($name, $city = 'valetta')
  {
    $category = Larasquare::request(config('foursquare.routes.one'),['near'=>$city,'query'=>$name]);
    return $category;
  }
  
}
