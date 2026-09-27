<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHumanRequest;
use App\Models\Human;
use App\Services\BattleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HumanController extends Controller
{
    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Register Human - Aura Zone';
        $viewData['subtitle'] = 'Register Human';
        $viewData['hierarchies'] = Human::hierarchies();

        return view('aura.humans.create')->with('viewData', $viewData);
    }

    public function save(StoreHumanRequest $request): RedirectResponse
    {
        Human::create($request->validated());

        return redirect()->route('aura.humans.index');
    }

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'List Humans - Aura Zone';
        $viewData['subtitle'] = 'List of Humans';
        $viewData['humans'] = Human::orderByDesc('aura')->get();

        return view('aura.humans.index')->with('viewData', $viewData);
    }

    public function battle(BattleService $battleService): View
    {
        $humans = Human::orderBy('id')->take(2)->get();
        $firstHuman = $humans->get(0);
        $secondHuman = $humans->get(1);

        $viewData = [];
        $viewData['title'] = 'Human Battle - Aura Zone';
        $viewData['subtitle'] = 'Human Battle';
        $viewData['firstHuman'] = $firstHuman;
        $viewData['secondHuman'] = $secondHuman;
        $viewData['result'] = ($firstHuman && $secondHuman)
            ? $battleService->determineWinnerMessage($firstHuman, $secondHuman)
            : '';

        return view('aura.humans.battle')->with('viewData', $viewData);
    }
}
