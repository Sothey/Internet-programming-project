<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;

class ProductTest extends TestCase
{
    /**
     * Test ID: Product-001
     * Description: Verify that the GET /api/products endpoint returns a successful response.
     * Precondition: None
     * Test Steps:
     *  1. Send a GET request to /api/products
     *  2. Assert that the response status is 200
     * Test Data: None
     * Expected Result: The response status should be 200
     * Actual Result: Response returned 200
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_get_products_api(): void
    {
        $request = $this->get('/api/products'); // Send Get Request 

        $request->assertStatus(200); // Check successful
    }

    /**
     * Test ID: Product-002
     * Description: Verify that a new product can be created using the POST /api/products endpoint.
     * Precondition: A valid category should be available in the database
     * Test Steps:
     *  1. Send a POST request with valid product data
     *  2. Assert that the response status is 201
     *  3. Assert that the response contains a success message and correct product details
     * Test Data:
     *          name: test_product_01
     *          pricing: 100
     *          category_id: 2
     * Expected Result: The response status should be 201 and the product should be created
     * Actual Result: Response returned 201 and the product was created
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_create_product_api(): void
    {
        $category = Category::create([
            'name' => 'Electronics',
        ]); // Create a category to database

        
        $response = $this->postJson("/api/products", [
            "name" => "test_product_01",
            "pricing" => 100,
            "category_id" => $category->id,
        ]); // Send Post request to create a product

        $response->assertStatus(201); // Check is it created
        $response->assertJsonFragment(["message" => "Product created successfully"]); // Show a successful message (Use Fragment here because it is Nested data)
        $response->assertJsonFragment(["name" => "test_product_01"]); // Show the name of the created prodduct
    }

    /**
     * Test ID: Product-003
     * Description: Verify that we can retrieve a product by its ID using the GET /api/products/{id} endpoint.
     * Precondition: A product with the specified ID must exist
     * Test Steps:
     *  1. Send a GET request to fetch the product by its ID
     *  2. Assert that the response status is 200 and the correct product details are returned
     * Test Data: id: 1
     * Expected Result: The response status should be 200, and the correct product data should be returned
     * Actual Result: Response returned 200 with the correct product data
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_get_product_by_id_api() {
        $request = $this->get('/api/products/1');

        $request->assertStatus(200)->assertJson(["id" => 1]);
    }

    /**
     * Test ID: Product-004
     * Description: Verify that a product can be updated by its ID using the PATCH /api/products/{id} endpoint.
     * Precondition: A product with the specified ID must exist
     * Test Steps:
     *  1. Send a PATCH request with updated product data
     *  2. Assert that the response status is 200
     *  3. Assert that the updated data is returned in the response
     * Test Data:
     *          name: test_product_01_updated
     *          pricing: 999
     *          category_id: 2
     * Expected Result: The response status should be 200 and the product data should be updated
     * Actual Result: Response returned 200, and the product data was updated successfully
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_update_product_by_id_api() {
        $category = Category::create(['name' => 'Accessories']); // create category to the database
        $product = Product::create([
            'name' => 'Old Product',
            'pricing' => 300,
            'description' => 'Old desc',
            'images' => json_encode(['http://image.jpg']),
            'category_id' => $category->id,
        ]); // create the product with the Category that just added

        $response = $this->patch("/api/products/{$product->id}", [
            "name" => "test_product_01_updated",
            "pricing" => 999,
            "category_id" => $category->id,
        ]); // Send Patch request to the ID and edit the data

        $response->assertStatus(200)->assertJsonFragment([
            "message" => "Product updated successfully",
            "name" => "test_product_01_updated",
            "pricing" => 999,
        ]); // Show the edited data
    }

    /**
     * Test ID: Product-005
     * Description: Verify that a product can be deleted by its ID using the DELETE /api/products/{id} endpoint.
     * Precondition: A product must exist in the database
     * Test Steps:
     *  1. Send a DELETE request to remove the product by its ID
     *  2. Assert that the response status is 200 with a success message
     *  3. Send a GET request to check that the product no longer exists
     * Test Data: id: 1
     * Expected Result: The product is deleted successfully, and a subsequent GET request should return 404
     * Actual Result: Response returned 200 on delete, and 404 on the subsequent GET request
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_delete_product_api() {
        $category = Category::create(['name' => 'Laptops']); // create category to database
        $product = Product::create([
            'name' => 'Delete Me',
            'pricing' => 500,
            'description' => 'Delete desc',
            'images' => json_encode(['http://image.jpg']),
            'category_id' => $category->id,
        ]); // create product

        $delete = $this->delete("/api/products/{$product->id}"); // Send delete request to delete product with the id
        $delete->assertStatus(200)->assertJson([
            'message' => 'Product deleted successfully'
        ]); // Check is it Okay, and show delete message 

        $check = $this->get("/api/products/{$product->id}"); // check true or false for the Url path with the id
        $check->assertStatus(404); // show not found message
    }
}