<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MainPageController extends Controller
{
    /**
     * @return RedirectResponse|View
     */
    public function __invoke(): RedirectResponse|View
    {
        if (Auth::guest()) {
            return view('pages.main');
        }

        return redirect('/feed');
    }
}
