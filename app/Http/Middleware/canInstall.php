<?php

namespace App\Http\Middleware;

use Closure;

class canInstall
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
        if (!$this->alreadyInstalled())
        {
            $installedRedirect = config('installer.installedAlreadyAction');
            switch ($installedRedirect) {
                case 'route':
                    $routeName = config('installer.installed.redirectOptions.route.name');
                    $data = config('installer.installed.redirectOptions.route.message');
                    return redirect()->route($routeName)->with(['data' => $data]);
                    break;
                case 'abort':
                    abort(config('installer.installed.redirectOptions.abort.type'));
                    break;
                case 'dump':
                    $dump = config('installer.installed.redirectOptions.dump.data');
                    dd($dump);
                    break;
                case '404':
                case 'url':
                    return redirect('/install');
                default:
                    abort(404);
                    break;
            }
        }
        // return $next($request);
        return $next($request);
    }

    public function alreadyInstalled()
    {
        return file_exists(storage_path('installed'));
    }
}
