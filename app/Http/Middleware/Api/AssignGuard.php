<?php
namespace App\Http\Middleware\Api;
use Closure;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use \Tymon\JWTAuth\Exceptions\TokenExpiredException;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
class AssignGuard extends BaseMiddleware {
    use GeneralApiTrait;
    public function handle($request, Closure $next, $guard = null) {
        /*if($guard != null)
            auth()->shouldUse($guard);
        return $next($request);*/
        if($guard != null) {
            auth()->shouldUse($guard);
            $token = $request->header('auth_token');
            $request->headers->set('auth_token', $token, true);
            $request->headers->set('Authorization', 'Bearer ' . $token, true);
            try {
                $user = JWTAuth::parseToken()->authenticate(); // User Authenticated Checked
            } catch (TokenExpiredException $ex) {
                return $this->returnErrorMessage('401',__('api/errors_msg.unauthenticated_user'));
            } catch (JWTException $ex) {
                return $this->returnErrorMessage('',__('api/errors_msg.invalid_token'), $ex->getMessage());
            }
        }
        return $next($request);










    }
}