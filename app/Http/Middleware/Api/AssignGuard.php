<?php
namespace App\Http\Middleware\Api;
use Closure;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use \Tymon\JWTAuth\Exceptions\TokenExpiredException;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
class AssignGuard {
    public function handle($request, Closure $next, $guard = null) {
        if($guard != null)
            auth()->shouldUse($guard);
        return $next($request);
    }
}
