<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use App\Models\MetaTag;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        View::composer('*', function ($view) {
            $segments = array_pad(Request::segments(), 5, 'na');
    
            $meta = MetaTag::where('slug1', $segments[0] ?? 'na')
                ->where('slug2', $segments[1] ?? 'na')
                ->where('slug3', $segments[2] ?? 'na')
                ->where('slug4', $segments[3] ?? 'na')
                ->where('slug5', $segments[4] ?? 'na')
                ->first();
    
            // Fallback to homepage meta if no exact match
            if (!$meta) {
                $meta = MetaTag::where('page_name', 'Home')->first();
            }
    
            // Share $meta to all views
            $view->with('meta', $meta);
        });
    }
}
