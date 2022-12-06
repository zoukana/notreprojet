<?php

namespace App\Http\Controllers;

use App\Models\assane;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    
    //controle du formulaire

    public function inscription(Request $request){
        $u = new assane();
     /*    dd($u::all()); */

        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $email = $request->get('email');
        $password= $request->get('password');
        $role=$request->get('role');
        $password_confirmation=$request->get('password_confirmation');

        $validation = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => 'required |regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix',
            'role'=>['required'],
            'password'=>['required'],
            'password_confirmation' => 'required_with:password|same:password',


        ]);
        //controle du mail existant
     foreach ($u::all() as $user) {

           if($user->email === $email){

            $validation = $request->validate([

                'email'=>['confirmed'],

            ]);
            }
     }



            $res = new assane();
            $res->prenom=$request->get('prenom');
            $res->nom=$request->get('nom');
            $res->email=$request->get('email');
            $res->password=$request->get('password');
            $res->role=$request->get('role');
            $res->etat=1;
            $res->date_inscription=date('y-m-d');
            $res->date_modification=null;
            $res->date_archivage=null;
            $res->photo=$request->get('photo');
             $res->save();
/*             dd($res->save());
 *//*             dd($res->save());
 */
        return $validation;


    }
   /*  $request->session()->flash('enregistrement valide')
    return to_route('post.create'); */
/*   public function _construct()

    {
        $this->middleware('guest')->except('logout');
    }
    protected function redirectTo() */


}

