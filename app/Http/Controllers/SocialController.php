<?php
 namespace App\Http\Controllers;

 use Laravel\Socialite\Facades\Socialite;
 use Illuminate\Support\Facades\Auth;
 use  Exception;
 use  App\User;


 class SocialController extends Controller
 {

    public function redirect()
    {
         return Socialite::driver('facebook')->redirect();
    }

    public function callback()    {

    //     // return  $getInfo = Socialite::driver($provider)->user();

            $user = Socialite::driver('facebook')->user();
            dd($user);

    //     $getInfo  =  Socialite::with($provider)->user();
    //     $user     =  $this->createUser($getInfo,$provider);
    //     // auth()->login($user);
    //     Auth::login($user);
    //     return redirect()->to('/home');
    // }

    // function createUser( $getInfo ,$provider ) {

    //         $user = User::where('provider_id', $getInfo->id)->first();
    //         if (!$user) {
    //             $user = User::create([
    //                 'name'     => $getInfo->name,
    //                 'email'    => $getInfo->email,
    //                 'provider' => $provider,
    //                 'provider_id' => $getInfo->id
    //             ]);
    //         }
    //         return $user;
  }


}
