<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'quote' => 'required|string|max:1000',
        ]);

        Testimonial::create([
            'name'  => $request->name,
            'quote' => $request->quote,
            'role'  => $request->role ?? 'Klien',
        ]);

        return back()->with('success', 'Terima kasih atas testimoni Anda!');
    }
}