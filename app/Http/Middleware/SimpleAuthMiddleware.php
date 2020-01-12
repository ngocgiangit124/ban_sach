<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DateTime;

use App\Repositories\UserRepository;

class SimpleAuthMiddleware {

  /**
   * The Guard implementation.
   *
   * @var Guard
   */
  protected $auth;
  protected $user_repository;

  /**
   * Create a new filter instance.
   *
   * @param  Guard  $auth
   * @return void
   */
  public function __construct(Guard $auth, UserRepository $user_repository)
  {
    $this->auth = $auth;
    $this->user_repository = $user_repository;
  }

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
        $auth = Auth::user();
        if($auth && $auth->Quyen == "admin") {
            return $next($request);
        }
        if($auth && $auth->Quyen != "admin") {
            return redirect('/404');
        }
      return redirect('/admin/login');
  }
}
