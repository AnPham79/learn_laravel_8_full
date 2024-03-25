<?php

namespace App\paymentGateway;
use Illuminate\Support\Facades\Facade;

class PaymentFacede extends Facade {
    protected static function getFacedeAccessor() {
        return 'payment';
    }
}