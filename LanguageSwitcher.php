<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

use Illuminate\Support\Facades\Log;


class LanguageSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        App::setLocale(  $request->session()->has('locale') ? $request->session()->get('locale') : Config::get('app.locale')   );

        return $next($request);
    }
}
