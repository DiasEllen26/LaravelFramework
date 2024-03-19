<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    public function index()
    {
        $cafes = Cafe::get();
         return view(
            'cafes.index', [
                'cafes' => $cafes
            ]
        );
    }

    public function show(string $id)
    {
        $cafe = Cafe::find($id);
        return view(
            'cafes.show', [
                'cafe' => $cafe
            ]
        );
    }
}
