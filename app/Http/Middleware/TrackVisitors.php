<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class TrackVisitors
{
    public function handle(Request $request, Closure $next)
    {
        $today = now()->toDateString();

        Visitor::updateOrCreate(
            ['date' => $today],
            ['count' => DB::raw('count + 1')]
        );

        return $next($request);
    }
}
