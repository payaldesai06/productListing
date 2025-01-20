<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductService {

  /**
   * Get product list
   * @param $request
   * @return array
   */
  public function getProductList($request) {

    $sortBy = $request->sort ?? 'asc';
    // Start a query to fetch all products
    $query = Product::query();

    // Filter by category
    if ($request->has('category') && $request->category != '') {
      $query->where('category', 'like', '%' . $request->category . '%');
    }

    // Search by name
    if ($request->has('search') && $request->search != '') {
      $query->where('name', 'like', '%' . $request->search . '%');
    }

    // Sort products (optional)
    if ($request->has('sort') && in_array($request->sort, ['asc', 'desc'])) {
      $query->orderBy('price', $sortBy);
    }

    // Paginate the products
    return $query->paginate(10);
  }
}
