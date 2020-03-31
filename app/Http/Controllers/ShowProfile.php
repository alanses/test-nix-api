<?php

namespace App\Http\Controllers;

use App\Http\Service\LiqPay;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShowProfile extends Controller
{
    public function testPayment()
    {
        $liqPay = new LiqPay(
            env('LIQ_PAY_PUBLIC_KEY', 'sandbox_i58514766679'),
            env('LIQ_PAY_PRIVATE_KEY', 'sandbox_JLIW2EiLyZiVCVdKao14s5keozi7HVjkMJGRRUpY')
        );

        $signature = $liqPay->cnb_form([
            'action'         => 'pay',
            'amount'         => 150,
            'currency'       => 'UAH',
            'description'    => 'test',
            'order_id'       => Str::random(15),
            'version'        => '3',
            'language'       => 'en',
            'server_url'     => env('SERVER_URL'),
            'result_url'     => env('TEST')
        ]);

        return view('test', ['signature' => $signature]);
    }

    public function confirm(Request $request)
    {
        info('data', $request->all());
    }
}
