<?php

namespace App\Providers;

use App\View\Components\Alerts\Error;
use App\View\Components\Alerts\Success;
use App\View\Components\Breadcrumb;
use App\View\Components\Forms\Checkbox;
use App\View\Components\Forms\Input;
use App\View\Components\Forms\Label;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Blade::directive('IDR', fn($rupiah) => "Rp.<?php echo number_format($rupiah, 0); ?>,-");
        Blade::components([
            'breadcrumb' => Breadcrumb::class,
            'error-alert' => Error::class,
            'success-alert' => Success::class,
            'input-form' => Input::class,
            'label-form' => Label::class,
            'checkbox-form' => Checkbox::class,
        ]);

    }
}
