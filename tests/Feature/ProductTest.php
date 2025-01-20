<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase {
  use RefreshDatabase; // Ensures the database is refreshed after each test

  /** @test */
  public function it_returns_a_list_of_products() {

    // Make the GET request to the /products endpoint
    $response = $this->getJson('/products');

    // Assert the response status is 200
    $response->assertStatus(200);

    // Assert that the response contains the 'status' and 'data' keys
    $response->assertJsonStructure([
      'data' => [
        '*' => [ // Each product in the list should contain these attributes
          'id',
          'name',
          'price',
          'category',
          'created_at',
          'updated_at',
        ]
      ]
    ]);
  }
}
