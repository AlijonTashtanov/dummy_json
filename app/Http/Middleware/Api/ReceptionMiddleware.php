<?php

namespace App\Http\Middleware\Api;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReceptionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return JsonResponse|RedirectResponse|Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user()->isApiReception() && !auth()->user()->isApiAdmin()) {

            return response()->json([
                'status' => false,
                'message' => 'You are not an Reception',
                'statusCode' => 405,
                'data' => null
            ], 405);

        } else {
            return $next($request);
        }
    }
}
