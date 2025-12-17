<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (!auth()->check()) {
      return redirect()->route('filament.admin.auth.login');
    }

    if (auth()->user()->role !== 'admin') {
      // Redirect ke halaman utama atau halaman pengaduan user
      return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman admin.');
    }
    return $next($request);
  }
}
