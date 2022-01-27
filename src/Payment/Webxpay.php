<?php

namespace Sentech\PaymentWebxpay\Payment;

use Webkul\Payment\Payment\Payment;

class Webxpay extends  Payment
{

    protected $code  = 'webxpay';
    public function getRedirectUrl()
    {
//        return route('webxpay.success');
    }
}
