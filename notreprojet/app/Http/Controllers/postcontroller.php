<?php

namespace App\Http\Controllers;


use App\Models\assane;
use Illuminate\Http\Request;
use Hash;
use App\Roles;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class postcontroller extends Controller
{


    function generateMatricule($n = 3)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return 'simplon_2022-' . $randomString;
    }


    //controle du formulaire

    public function inscription(Request $request){
        $u = new assane();

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

            $res->matricule = $this->generateMatricule();
            $res->prenom=$request->get('prenom');
            $res->nom=$request->get('nom');
            $res->email=$request->get('email');
            $res->password=$request->get('password');
            $res->role=$request->get('role');
            $res->date_inscription=date('y-m-d');
            $res->date_modification=null;
            $res->date_archivage=null;
            $res->photo=null;
            $res->save();

        return view("popup");

    }

protected function connexion(Request $request){
    $u = new assane();
    $u = $request->validate([
        'password' => ['required'],
        'email' => 'required |regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix',



    ]);
    //redirection
   $users = assane::all();
   foreach($users as $user) {
    if ($user->email == $request->get("email") && $user->password == $request->get("password")){
        if($user->role === 'administrateur'){ return redirect('/api/post');}
        elseif ( $user->role === 'user_simple') { return'user';}
    
    
   }

  
  
}
 
$validation = $request->validate([

    'email'=>['accepted'],

]);

  
 
  
 

}




    }






