<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Resend\Laravel\Facades\Resend;

class MailController extends Controller
{
    /**
     * Ship the given order.
     */
    public function store(Request $request): RedirectResponse
    {
        dd($request);

        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);

        Resend::emails()->send([
            'from' => 'AdoptMe <noreply@adoptme.com>',
            'to' => $request->pets->user()->email,
            'subject' => `Olá, você tem uma nova mensagem sobre {$request->pets->name}`,
            'html' => ($validated['message'])->render(),
        ]);

        return redirect('/');
    }
}
