<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        //
        Password::defaults(function() {
            $rule = Password::min(8);
            
            return $this->app->isProduction() 
                ? $rule->mixedCase()->symbols()->uncompromised(3) 
                : $rule->mixedCase()->symbols();
        });

        Response::macro('error', function ($error){
            return response()->json(['message' => 'An Error Occured!', 'error' => $error], 500);
        });

        Response::macro('success', function (?string $message, array|object|null $data){
            return response()->json(['message' => $message ?? 'Request was a success', 'data' => $data], 200);
        });
    }
}