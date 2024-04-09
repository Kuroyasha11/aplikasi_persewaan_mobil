<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        $title = "Register";

        return view('auth.register', compact('title'));
    }

    public function postRegister(Request $request)
    {
        $rule = [
            'name' => 'required|string|max:25|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
                'confirmed'],
            'alamat' => 'nullable|string|max:255|min:3',
            'nomor_telepon' => 'nullable|digits_between:10,15|numeric',
            'nomor_sim' => 'nullable|digits:14|numeric',
        ];

        $validatedData = $request->validate($rule);

        DB::beginTransaction();
        try {
            $user = new User;
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Bcrypt($validatedData['password']);
            $user->alamat = $validatedData['alamat'];
            $user->nomor_telepon = $validatedData['nomor_telepon'];
            $user->nomor_sim = $validatedData['nomor_sim'];
            $user->save();

            DB::commit();

            return redirect(route('login'))->with('success', 'Berhasil membuat akun!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->withErrors([$th->getMessage()]);
        }
    }
}
