<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\ModelActivityObserver;
use App\Models\Order;
// use App\Models\Category;
// use App\Models\Product;
// use App\Models\Customer;
// use App\Models\Cart;
// use App\Models\Wishlist;
// use App\Models\Payment;
// use App\Models\OrderProduct;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Order::observe(ModelActivityObserver::class);
    

        // Category::observe(ModelActivityObserver::class);
        // Product::observe(ModelActivityObserver::class);
        // Customer::observe(ModelActivityObserver::class);
        // Cart::observe(ModelActivityObserver::class);
        // Wishlist::observe(ModelActivityObserver::class);
        // Order::observe(ModelActivityObserver::class);
        // Payment::observe(ModelActivityObserver::class);
        // OrderProduct::observe(ModelActivityObserver::class);
    }
}
