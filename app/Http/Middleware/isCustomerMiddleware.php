<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\subdomain;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isCustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $subdomain = $this->getSubdomainOrDomainFromURL();
        $subdomain_id = subdomain::where([
            'name' => $subdomain
        ])->value('id');
        if(!$subdomain_id){
            $subdomain_id = 1;
        }
        if(!auth()->check() || auth()->user()->role_id != 4){
            return abort(403);
        }
        if(auth()->user()->subdomain_id != $subdomain_id){
            return abort (403);
        }
        return $next($request);
    }

    public function getSubdomainOrDomainFromURL() {
        $host = $_SERVER['HTTP_HOST'];
        $domainParts = explode('.', $host);

        // Menghilangkan "www" jika ada
        if ($domainParts[0] === 'www') {
            array_shift($domainParts);
        }

        // Mengambil subdomain pertama atau domain utama
        // $subdomainOrDomain = $domainParts[0];
        $subdomainOrDomain = implode(".", $domainParts);

        return $subdomainOrDomain;
    }
}
