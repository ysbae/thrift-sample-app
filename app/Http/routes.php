<?php

use App\Services\DeliveryService;
use Mesh\Delivery\DeliveryServiceProcessor;
use Mesh\Thrift\ThriftResponse;
use Illuminate\Http\Request;

Route::post('delivery/{protocol}', function (Request $request, $protocol) {
    $service = new DeliveryService();
    $processor = new DeliveryServiceProcessor($service);
    return ThriftResponse::make($request, $processor, $protocol);
});

Route::get('/', function () {
    return View::make('demo');
});