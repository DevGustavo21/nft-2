<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
use  Illuminate\Http\JsonResponse;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'description'=>['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_img' => ['required'],
        ]);

        $image = $request->file('user_img');
        $userImg = Str::uuid() . '.' . $image->extension();
        $serverImage = Image::make($image);
        $serverImage->fit(1000, 1000);

        $imagePath = public_path('profiles') . '/' . $userImg;
        $serverImage->save($imagePath);

        $data['user_img'] = $userImg;

        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('user_img', $userImg);
    }

}
