<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    'name' => env('APP_NAME', 'Laravel'),
    'env' => env('APP_ENV', 'production'),
    'debug' => (bool) env('APP_DEBUG', false),
    'url' => env('APP_URL', 'http://localhost'),
    'asset_url' => env('ASSET_URL'),
    'timezone' => 'Asia/Jakarta', // Sesuaikan dengan kebutuhan Anda
    'locale' => 'id', // Menggunakan Bahasa Indonesia
    'fallback_locale' => 'en',
    'faker_locale' => 'id_ID', // Menggunakan locale Indonesia

    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',

    'maintenance' => [
        'driver' => 'file',
        // 'store' => 'redis',
    ],

    'providers' => ServiceProvider::defaultProviders()->merge([
        Yajra\DataTables\DataTablesServiceProvider::class,
        // Pastikan Intervension Image terinstall dengan benar
        Intervention\Image\ImageServiceProvider::class,
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    'aliases' => Facade::defaultAliases()->merge([
        'DataTables' => Yajra\DataTables\Facades\DataTables::class,
        // Pastikan bahwa alias Image sudah benar
        'Image' => Intervention\Image\Facades\Image::class,
    ])->toArray(),
];
