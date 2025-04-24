<?php

namespace Tests\Unit;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use App\Models\Category;


class CategoryTest extends TestCase
{
    /**
     * Test ID: Category-001
     * Description: Verify that the GET /api/categories endpoint returns a successful response.
     * Precondition: None
     * Test Steps:
     *  1. Send a GET request to /api/categories
     *  2. Assert that the response status is 200
     * Test Data: None
     * Expected Result: The response status should be 200
     * Actual Result: Response returned 200
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_get_all_categories_api(): void
    {
        $response = $this->get('/api/categories'); // Get Request to the URL
        $response->assertStatus(200); // Check HTTP response code, meaning "Okay, successful)
    }

    /**
     * Test ID: Category-002
     * Description: Verify that we can create new categories using the POST /api/categories endpoint.
     * Precondition: None
     * Test Steps:
     *  1. Send a POST request with a valid category name
     *  2. Assert that the response status is 201
     *  3. Assert that the correct success message and category name is returned
     * Test Data:
     *          1. name: test_category_01
     *          2. name: test_category_02
     *          3. name: test_category_03
     * Expected Result: The response status should be 201 and the category should be created
     * Actual Result: Response returned 201 and the category was created
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_create_category_api(): void
    {
        $response = $this->postJson('/api/categories', [
            "name" => "test_category_01"
        ]); // Set Post Request with Json body
        $response->assertStatus(201); // Check that is it created? 201 = Created
        $response->assertJson(["message" => "Category created successfully"]); // Display successful message
        $response->assertSee("test_category_01"); // Check "test_category_01" appear in Json body

        $response = $this->postJson('/api/categories', [
            "name" => "test_category_02"
        ]);
        $response->assertStatus(201);
        $response->assertJson(["message" => "Category created successfully"]);
        $response->assertSee("test_category_02");

        $response = $this->postJson('/api/categories', [
            "name" => "test_category_03"
        ]);
        $response->assertStatus(201);
        $response->assertJson(["message" => "Category created successfully"]);
        $response->assertSee("test_category_03");
    }

    /**
     * Test ID: Category-003
     * Description: Verify that we can retrieve a specific category by its ID using the GET /api/categories/{id} endpoint.
     * Precondition: A category must exist in the database
     * Test Steps:
     *  1. Create a category
     *  2. Send a GET request with the category ID
     *  3. Assert that the response status is 200 and contains the correct category data
     * Test Data: name: CategoryToGet
     * Expected Result: The response should contain the created category with status 200
     * Actual Result: Response returned 200 and contained correct category data
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_get_a_category_by_id_api(): void
    {
        $category = Category::create([
            'name' => 'CategoryToGet'
        ]); // Add a category to database
    
        $response = $this->get("/api/categories/{$category->id}"); // Get the category my ID
        $response->assertStatus(200)->assertJson([
            "id" => $category->id,
            "name" => "CategoryToGet"
        ]); // Check is it successful, and show the category
    }

    /**
     * Test ID: Category-004
     * Description: Verify that a category can be updated by its ID using the PATCH /api/categories/{id} endpoint.
     * Precondition: A category with ID 2 should exist
     * Test Steps:
     *  1. Send a PATCH request to update the category
     *  2. Assert that the response status is 200
     *  3. Verify that the returned data includes the updated name
     * Test Data: name: test_category_updated
     * Expected Result: Status should be 200 and data should reflect the update
     * Actual Result: Response returned 200 and data was updated
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_update_a_category_by_id_api(): void
    {
        $response = $this->patch('/api/categories/2', ["name" => "test_category_updated"]); // Send Patch request to category with ID=2
        $response->assertStatus(200)->assertSee([
            "id" => 2,
            "name" => "test_category_updated"
        ]); // Check is it successful, and show the updated category
    }

    /**
     * Test ID: Category-005
     * Description: Verify that a category can be deleted by its ID using the DELETE /api/categories/{id} endpoint.
     * Precondition: A category must exist in the database
     * Test Steps:
     *  1. Create a category
     *  2. Send a DELETE request to remove it
     *  3. Assert that the response status is 200 with a success message
     *  4. Try deleting and retrieving the category again to ensure it's removed
     * Test Data: name: CategoryToDelete
     * Expected Result: The category is deleted, and subsequent operations return 404
     * Actual Result: Delete returned 200 and second delete/get returned 404
     * Status: PASSED
     * Remark: None
     */
    public function test_if_we_can_access_delete_a_category_by_id_api(): void
    {
        $category = Category::create([
            'name' => 'CategoryToDelete'
        ]); // Create a category to database (Using it for deleting)
    
        $response = $this->delete("/api/categories/{$category->id}"); // Send Delete request to delete The just created category
        $response->assertStatus(200)->assertJson([
            "message" => 'Category deleted successfully'
        ]); // Show delete message 
    
        // Try deleting again
        $request = $this->delete("/api/categories/{$category->id}"); // Try delete the category with the id again
        $request->assertStatus(404)->assertJson([
            "message" => 'Category not found'
        ]); // Show not found message
    
        // Try fetching deleted category
        $request = $this->get("/api/categories/{$category->id}"); // Send get request to the id again
        $request->assertStatus(404); // Show 404 not found
    }

    /**
     * Test ID: Category-006
     * Description: Verify that creating a category with an invalid name (empty) fails using the POST /api/categories endpoint.
     * Precondition: None
     * Test Steps:
     *  1. Send a POST request with an empty category name
     *  2. Assert that the response status is 422 (Unprocessable Entity)
     *  3. Verify that the response contains a validation error message
     * Test Data: name: ""
     * Expected Result: The response status should be 422 with a validation error
     * Actual Result: To be determined
     * Status: PENDING
     * Remark: Assumes name field is required in the API validation
     */
    public function test_if_creating_category_with_empty_name_fails(): void
    {
        $response = $this->postJson('/api/categories', [
            "name" => ""
        ]); // Send POST request with empty name
        $response->assertStatus(422); // Check for validation failure (422 Unprocessable Entity)
        $response->assertJsonValidationErrors(['name']); // Verify validation error for 'name' field
    }

    /**
     * Test ID: Category-007
     * Description: Verify that retrieving a non-existent category by ID returns a 404 using the GET /api/categories/{id} endpoint.
     * Precondition: No category with the specified ID exists
     * Test Steps:
     *  1. Send a GET request with a non-existent category ID
     *  2. Assert that the response status is 404
     *  3. Verify that the response contains an error message
     * Test Data: id: 9999
     * Expected Result: The response status should be 404 with an error message
     * Actual Result: To be determined
     * Status: PENDING
     * Remark: Assumes the API returns 404 for non-existent resources
     */
    public function test_if_retrieving_non_existent_category_fails(): void
    {
        $response = $this->get('/api/categories/9999'); // Send GET request for a non-existent category
        $response->assertStatus(404); // Check for 404 Not Found
        $response->assertJson([
            "message" => 'Category not found'
        ]); // Verify error message
    }

    /**
     * Test ID: Category-008
     * Description: Verify that updating a non-existent category by ID returns a 404 using the PATCH /api/categories/{id} endpoint.
     * Precondition: No category with the specified ID exists
     * Test Steps:
     *  1. Send a PATCH request to update a non-existent category
     *  2. Assert that the response status is 404
     *  3. Verify that the response contains an error message
     * Test Data: id: 9999, name: NonExistentCategoryUpdate
     * Expected Result: The response status should be 404 with an error message
     * Actual Result: To be determined
     * Status: PENDING
     * Remark: Assumes the API returns 404 for non-existent resources
     */
    public function test_if_updating_non_existent_category_fails(): void
    {
        $response = $this->patch('/api/categories/9999', [
            "name" => "NonExistentCategoryUpdate"
        ]); // Send PATCH request for a non-existent category
        $response->assertStatus(404); // Check for 404 Not Found
        $response->assertJson([
            "message" => 'Category not found'
        ]); // Verify error message
    }

    /**
     * Test ID: Category-009
     * Description: Verify that the GET /api/categories endpoint returns all created categories.
     * Precondition: Multiple categories must exist in the database
     * Test Steps:
     *  1. Create multiple categories
     *  2. Send a GET request to /api/categories
     *  3. Assert that the response status is 200 and contains all created categories
     * Test Data: names: ListCategory1, ListCategory2, ListCategory3
     * Expected Result: The response should return all categories with status 200
     * Actual Result: To be determined
     * Status: PENDING
     * Remark: Assumes the API returns a list of categories
     */
    public function test_if_get_all_categories_returns_all_created_categories(): void
    {
        // Create multiple categories
        Category::create(['name' => 'ListCategory1']);
        Category::create(['name' => 'ListCategory2']);
        Category::create(['name' => 'ListCategory3']);

        $response = $this->get('/api/categories'); // Send GET request to retrieve all categories
        $response->assertStatus(200); // Check for successful response
        $response->assertJsonFragment(['name' => 'ListCategory1']); // Verify first category
        $response->assertJsonFragment(['name' => 'ListCategory2']); // Verify second category
        $response->assertJsonFragment(['name' => 'ListCategory3']); // Verify third category
    }

    /**
     * Test ID: Category-010
     * Description: Verify that creating a category with a duplicate name fails using the POST /api/categories endpoint.
     * Precondition: A category with the same name must exist
     * Test Steps:
     *  1. Create a category with a specific name
     *  2. Attempt to create another category with the same name
     *  3. Assert that the response status is 422 with a validation error
     * Test Data: name: DuplicateCategory
     * Expected Result: The response status should be 422 with a validation error
     * Actual Result: To be determined
     * Status: PENDING
     * Remark: Assumes the Category model has a unique constraint on the name field
     */
    public function test_if_creating_duplicate_category_fails(): void
    {
        // Create a category with a specific name
        Category::create(['name' => 'DuplicateCategory']);

        // Attempt to create another category with the same name
        $response = $this->postJson('/api/categories', [
            "name" => "DuplicateCategory"
        ]);
        $response->assertStatus(422); // Check for validation failure (422 Unprocessable Entity)
        $response->assertJsonValidationErrors(['name']); // Verify validation error for 'name' field
    }
}