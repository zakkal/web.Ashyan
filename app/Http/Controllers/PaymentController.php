<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    /**
     * Handle Scalev Payment Request
     * 
     * In a real scenario, this would interact with Scalev API
     * to create a checkout session and return the URL.
     */
    public function handleScalev(Request $request)
    {
        $plan = $request->input('plan');
        $url = '';

        switch ($plan) {
            case 'basic':
                $url = 'https://zakkal-store.myscalev.com/p/paket-product'; // Link Paket Product (Basic)
                break;
            case 'standard':
                $url = 'https://zakkal-store.myscalev.com/p/paket-standard'; // Link Paket Standard
                break;
            case 'premium':
                // Premium usually redirects to WhatsApp for custom consulting
                return response()->json([
                    'status' => 'success',
                    'checkout_url' => 'https://wa.me/6281234567890?text=Halo%20IoT%20Craft,%20saya%20ingin%20konsultasi%20proyek%20IoT%20Premium.'
                ]);
            default:
                return response()->json(['error' => 'Invalid plan'], 400);
        }

        return response()->json([
            'status' => 'success',
            'checkout_url' => $url,
            'message' => 'Silakan lanjutkan ke pembayaran.'
        ]);
    }

    public function success()
    {
        return view('payment_success');
    }
}
