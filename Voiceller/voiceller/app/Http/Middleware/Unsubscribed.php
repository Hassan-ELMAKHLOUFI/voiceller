<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Unsubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (optional($request->user())->hasActiveSubscription()) {
            return redirect()->route('user.tts')->with('success', 'You already have active subscription plan');
        }
        return $next($request);
    }
}
