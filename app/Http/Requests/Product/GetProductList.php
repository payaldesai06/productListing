<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GetProductList extends FormRequest {
  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'category' => ['nullable', 'string', 'max:255'],  // Category should be a string, max 255 characters
      'search' => ['nullable', 'string', 'max:255'],    // Search should be a string, max 255 characters
      'sort' => ['nullable', Rule::in(['asc', 'desc'])],  // Sort should be either 'asc' or 'desc'
    ];
  }

  public function messages() {
    return [
      'category.string' => 'The category field must be a valid string.',
      'category.max' => 'The category name cannot exceed 255 characters.',
      'search.string' => 'The search term must be a valid string.',
      'search.max' => 'The search term cannot exceed 255 characters.',
      'sort.in' => 'The sort field must be either "asc" or "desc".',
    ];
  }
}
