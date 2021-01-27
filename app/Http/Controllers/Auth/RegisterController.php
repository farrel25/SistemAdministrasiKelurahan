<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Villager;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = RouteServiceProvider::LOGIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nik' => ['required', 'digits:16', 'unique:users,nik'],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'numeric', 'unique:users,phone'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'nik' => $data['nik'],
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'password' => Bcrypt($data['password']),
            'phone' => $data['phone'],
            'is_active' => 1
        ])->assignRole('Penduduk');

        session()->flash('success', 'Akun anda berhasil dibuat, silahkan login');

        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $userVillager = Villager::where('nik', $request->nik)->first();

        if (!$userVillager) {
            session()->flash('fail', 'Anda tidak terdaftar sebagai penduduk kelurahan, silahkan hubungi kantor kelurahan');
            return redirect()->route('register');
        } else {
            if (\Str::lower($request->full_name) != \Str::lower($userVillager->full_name)) {
                session()->flash('fail', 'Nama anda tidak sesuai dengan NIK yang terdaftar');
                return redirect()->route('register');
            } else {
                event(new Registered($user = $this->create($request->all())));

                $userId = User::where('nik', $request->nik)->value('id');
                $userVillager->update(['user_id' => $userId]);

                if ($response = $this->registered($request, $user)) {
                    return $response;
                }

                return $request->wantsJson() ? new JsonResponse([], 201) : redirect($this->redirectPath());
            }
        }
    }
}
