<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AuraController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Aura Zone - Human Registry';
        $viewData['subtitle'] = 'Aura Zone';

        return view('aura.index')->with('viewData', $viewData);
    }
}
