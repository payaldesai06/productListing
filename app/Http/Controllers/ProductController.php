<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\Product\ProductService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller {
  private $productService;

  public function __construct(ProductService $productService) {
    $this->productService = $productService;
  }
  /**
   * Get Product List
   * @return JsonResponse|mixed
   * @throws Exception
   */
  public function index(Request $request) {
    try {
      // Define the validation rules
      $validator = Validator::make($request->all(), [
        'category' => ['nullable', 'string', 'max:255'],  // Category should be a string, max 255 characters
        'search' => ['nullable', 'string', 'max:255'],    // Search should be a string, max 255 characters
        'sort' => ['nullable', Rule::in(['asc', 'desc'])],  // Sort should be either 'asc' or 'desc'
      ], [
        'category.string' => 'The category field must be a valid string.',
        'category.max' => 'The category name cannot exceed 255 characters.',
        'search.string' => 'The search term must be a valid string.',
        'search.max' => 'The search term cannot exceed 255 characters.',
        'sort.in' => 'The sort field must be either "asc" or "desc".',
      ]);

      // Check if validation fails
      if ($validator->fails()) {
        return response()->json([
          'status' => 'error',
          'errors' => $validator->errors(),
        ], 422); // HTTP Status 422 Unprocessable Entity
      }
      return $this->productService->getProductList($request);
    } catch (Exception $exception) {
      return $exception->getMessage();
    }
  }
}
