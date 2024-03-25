<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\paymentGateway\Payment;

class PaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('payment', function () {
            return new Payment();
        });
    }
}
