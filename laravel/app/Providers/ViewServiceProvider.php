<?php

namespace App\Providers;
use App\Models\MenuAdmin;
use App\Models\Menu;
use App\Models\MainPage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('Admin.Layouts.sidebar', function($view) {
            $MenuAdmin = MenuAdmin::where('parent','0')
            ->where('panel','admin')
            ->where('view','1')
            ->orderby('tartib')
            ->get();

            $view->with([
                'MenuAdmin' => $MenuAdmin,
            ]);
        });
        View::composer('front.layouts.header', function($view) {
            $Menu = Menu::where('parent','0')
            ->where('view','1')
            ->where('type','header')
            ->orderby('tartib')
            ->get();

            $view->with([
                'Menu' => $Menu,
            ]);
        });
        View::composer('front.layouts.footer', function($view) {
            $Menu = Menu::where('parent','0')
            ->where('view','1')
            ->where('type','footer')
            ->orderby('tartib')
            ->get();

            $view->with([
                'Menu' => $Menu,
            ]);
        });
        View::composer('front.layouts.footer', function($view) {
            $mainpage =  MainPage::first();
            $view->with([
                'mainpage' => $mainpage,
            ]);
        });
        View::composer('front.layouts.header', function($view) {
            $mainpage =  MainPage::first();
            $view->with([
                'mainpage' => $mainpage,
            ]);
        });
    }
}
