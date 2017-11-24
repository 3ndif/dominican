<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

use Intervention\Image\Facades\Image;
use App\Ads;
use App\User;
use App\Models\JsonHandler;

class TestController extends Controller {

    public function uploadImg(Request $request) {

        if (!Auth::check()){
            $this->validate($request, [
                'email' => 'required|string|email',
            ]);

            $user = User::where('email', $request->email)->first();

            if ($user) {
                $this->loginPerfom($request);
            } else {
                $this->registerPerfom($request);
            }

            return JsonHandler::response([
                    JsonHandler::SHOW_ADS_CREATE_FORM_CONTAINER => ''
            ]);
        }

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'text' => 'required|string|max:2000',
                ], [
            'required' => ':attribute не должен быть пустым',
            'size' => ':attribute не должен превышать :size символов',
        ]);

//        DB::transaction(function() use ($request) {

        $ads = new Ads;
        $ads->title = $request->title;
        $ads->text = $request->text;
        $ads->users_id = Auth::id();
        $ads->categories_id = 3;
        $ads->slug = str_slug($request->title,'_');
        $ads->save();

        $iModels = [];
        if ($request->hasFile('file')) {
            $images = $request->file('file');
            foreach ($images as $image) {
                $ext = $image->getClientOriginalExtension();
                $filename = uniqid(time());
                $location = public_path('images/uploads/' . $filename . '.' . $ext);

                Image::make($image)
//                        ->resize(null,100,function ($constraint) {
//                            $constraint->aspectRatio();
//                        })
                        ->save($location);

                $file = new \App\File;
                $file->users_id = Auth::id();
                $file->name = $filename;
                $file->ext = $ext;

                $iModels[] = $file;
            }

            $ads->images()->saveMany($iModels);
        }

//        });

        return JsonHandler::response([
                    JsonHandler::REDIRECT => route('single',[
                        'adsUrl' => $ads->url->url
                    ])
        ]);
    }

    public function registerPerfom(Request $request){

        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|max:255',
        ]);

        event(new Registered($user = $this->create($request->all())));

        Auth::guard()->login($user);
    }

    public function loginPerfom(Request $request){
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return $request->session()->regenerate();
        }

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    protected function create(array $data) {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }

}
