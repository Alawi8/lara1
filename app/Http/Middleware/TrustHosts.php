<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
    // app/Http/Middleware/TrustHosts.php

    protected $headers = [
        'Content-Security-Policy' => [
            // إضافة سياسة CSP هنا
            'report-uri' => '/csp-report-endpoint',
        ],
    ];

}
