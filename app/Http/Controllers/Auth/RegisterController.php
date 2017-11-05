<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use App\Models\JsonHandler;

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
    protected $redirectTo = '/';

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
     * Двухступенчатая регистрация
     */
    public function register(Request $request){

        $this->validator($request->all())->validate();

        if ($request->exists('password')){

            $this->validatePassword($request->all())->validate();

            event(new Registered($user = $this->create($request->all())));

            $this->guard()->login($user);

            return JsonHandler::response([
                JsonHandler::REFRESH_PAGE => ''
            ]);

        }

        return JsonHandler::response([
            JsonHandler::SHOW_MODAL_PASSWORD => '',
        ]);
    }

    public function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:50',
        ],$this->messages());
    }

    public function validatePassword(array $data){
        return Validator::make($data, [
            'password' => 'required|string|max:255',
        ],$this->messages());
    }

    public function messages()
    {
//        return [
//          'required' => 'Необходимо указать :attribute',
//          'max' => ':attribute не должно превышать :max символов'
//        ];

        return [
            'email.required' => 'Необходимо указать email',
            'name.required' => 'Необходимо указать Имя',
            'phone.required' => 'Необходимо указать Телефон',
            'password.required' => 'Необходимо указать Пароль',

            'email.unique' => 'Данный email уже зарегистрирован'
        ];
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone']
        ]);
    }
}
