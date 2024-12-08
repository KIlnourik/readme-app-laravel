<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterUserRequest;

class RegisterUserController extends Controller
{
    public function create(): View
    {
        return view('pages.auth.registration');
    }

    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');

            $validated['avatar'] = $request->file('avatar')
                ->storeAs('uploads', $avatar->getClientOriginalName());
        }

        User::create($validated);

        return redirect('/');
    }
}
