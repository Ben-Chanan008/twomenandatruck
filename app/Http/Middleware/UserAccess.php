<?php

namespace App\Http\Middleware;

use App\Models\Module;
use App\Models\RoleAccess;
use App\Models\Route as WebRoute;
use App\Models\SubModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;
use Closure;
use Str;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    private $modules = ['create_user', 'jobs'];

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user_role_id = $user->roles()->first()->getOriginal('pivot_role_id');

            $incoming_request = URL::to($request->path());
            $role_accesses = RoleAccess::where(['role_id' => $user_role_id])->get();

            foreach ($role_accesses as $access) {
                $submodules = SubModule::where(['id' => $access->sub_module_id])
                    ->with('routes')
                    ->get();

                foreach ($submodules as $submodule) {
                    $routes = $submodule->routes->all();
                    foreach ($routes as $route) {
                        if (URL::to(path: $route->source) === $incoming_request) {
                            return $next($request);
                        }

                        /* Uncomment for debugging purposes */
                        // dd(URL::to(path: $route->source));
                    }
                }
            }

            return redirect()
                ->to(URL::previous() === URL::current() ? route('home') : URL::previous())
                ->with('showPopup', "You don't have access to this route");
        }

        return redirect()->route('signin.view');
    }
}
