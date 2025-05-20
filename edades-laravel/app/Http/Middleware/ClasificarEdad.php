<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\AgeRouterService;
use App\Models\Edad;

class ClasificarEdad
{
    public function handle(Request $request, Closure $next)
    {
        $edad = $request->input('edad');

        if (!is_numeric($edad) || $edad < 0 || $edad > 120) {
            return redirect()->route('error.edad');
        }

        Edad::create(['valor' => $edad]);

        return redirect(AgeRouterService::getRouteForAge($edad));
    }
}
