<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Resend\Laravel\Facades\Resend;
use App\Models\Pets;
use Illuminate\Contracts\View\View;

class MailController extends Controller
{
    /**
     * Ship the given order.
     */
    public function contact($id): View
    {
        $pet = Pets::find($id);
        return view('petMessage.formMessage')->with('pet', $pet);
    }

    public function formMessage(Request $request, $id): RedirectResponse
    {
        $pet = Pets::find($id);

        $validated = $request->validate([
            'message' => 'required|string|max:300'
        ]);

        Resend::emails()->send([
            'from' => 'AdoptMe <noreply@resend.dev>',
            'to' => $pet->users->email,
            'subject' => 'Olá, você tem uma nova mensagem sobre ' . $pet->name,
            'html' => $validated['message']
                 . '<br /><br /> <strong> Retorne-me através do e-mail: </strong>'
                 . $request->email,
        ]);

        return to_route('dashboard');
    }
}
