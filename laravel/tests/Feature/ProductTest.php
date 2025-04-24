<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; // Import the Validator class

class ProductTest extends TestCase
{
    use RefreshDatabase;

    private $categoryElectronics;
    private $categoryAccessories;
    private $categoryLaptops;
    private $categoryBooks;

    public function setUp(): void
    {
        parent::setUp();

        $this->categoryElectronics = Category::create(['name' => 'Electronics']);
        $this->categoryAccessories = Category::create(['name' => 'Accessories']);
        $this->categoryLaptops = Category::create(['name' => 'Laptops']);
        $this->categoryBooks = Category::create(['name' => 'Books']);
    }

    public function test_if_we_can_access_get_products_api(): void
    {
        $response = $this->get('/api/products');

        $response->assertStatus(200);
    }

    public function test_if_we_can_access_create_product_api(): void
    {
        $response = $this->postJson("/api/products", [
            "name" => "test_product_01",
            "pricing" => 100,
            "category_id" => $this->categoryElectronics->id,
        ]);

        $response->assertStatus(201);
        $response->assertJsonFragment(["message" => "Product created successfully"]);
        $response->assertJsonFragment(["name" => "test_product_01"]);
    }

    public function test_if_we_can_access_get_product_by_id_api()
    {
        $product = Product::create([
            'name' => 'The Lord of the Rings',
            'pricing' => 25,
            'description' => 'A classic fantasy novel',
            'images' => json_encode(['http://lotr.jpg']),
            'category_id' => $this->categoryBooks->id,
        ]);

        $response = $this->get("/api/products/{$product->id}");

        $response->assertStatus(200);
        $response->assertJson(['id' => $product->id]);
    }

    public function test_if_we_can_access_update_product_by_id_api()
    {
        $product = Product::create([
            'name' => 'Old Product',
            'pricing' => 300,
            'description' => 'Old desc',
            'images' => json_encode(['http://image.jpg']),
            'category_id' => $this->categoryAccessories->id,
        ]);

        $response = $this->patch("/api/products/{$product->id}", [
            "name" => "test_product_01_updated",
            "pricing" => 999,
            "category_id" => $this->categoryAccessories->id,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            "message" => "Product updated successfully",
            "name" => "test_product_01_updated",
            "pricing" => 999,
        ]);
    }

    public function test_if_we_can_access_delete_product_api()
    {
        $product = Product::create([
            'name' => 'Delete Me',
            'pricing' => 500,
            'description' => 'Delete desc',
            'images' => json_encode(['http://image.jpg']),
            'category_id' => $this->categoryLaptops->id,
        ]);

        $delete = $this->delete("/api/products/{$product->id}");
        $delete->assertStatus(200)->assertJson([
            'message' => 'Product deleted successfully'
        ]);

        $check = $this->get("/api/products/{$product->id}");
        $check->assertStatus(404);
    }
   

    public function test_delete_non_existent_product(): void
    {
        $response = $this->delete("/api/products/999"); // Use a non-existent ID

        $response->assertStatus(404);
        $response->assertJson(['message' => 'Product not found']);
    }
}