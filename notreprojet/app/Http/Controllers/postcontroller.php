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
use App\Http\Controllers\MongoDB\Client;
use Illuminate\Http\UploadedFile;

class postcontroller extends Controller
{

//generation de matricule
    function generateMatricule($n = 3)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return 'SN-2022_' . $randomString;
    }
    //controle du formulaire
    public function inscription(Request $request)
    {
        $u = new assane();
        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $email = $request->get('email');
        $password = $request->get('password');
        $role = $request->get('role');
        $image = $request->file('file');
        $password_confirmation = $request->get('password_confirmation');

        $validation = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => 'required |regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix',
            'role' => ['required'],
            'password' => ['required'],
            'password_confirmation' => 'required_with:password|same:password',


        ]);

        //insertion image

      $name = $request->file('file')->getClientOriginalName();

        $path = $request->file('file')->store('public/image');

     /*  $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/image'); */



        //controle du mail existant
        foreach ($u::all() as $user) {

            if ($user->email === $email) {

                $validation = $request->validate([
                    'email' => ['confirmed'],

                ]);
            }
        }

        $res = new assane();

        $res->matricule = $this->generateMatricule();
        $res->prenom = $request->get('prenom');
        $res->nom = $request->get('nom');
        $res->email = $request->get('email');
        $res->password = $request->get('password');
        $res->role = $request->get('role');
        $res->date_inscription = date('y-m-d');
        $res->date_modification = null;
        $res->date_archivage = null;

        $res->etat = 1;
        $res->save();

        return view("popup");
    }

    protected function connexion(Request $request)
    {
        $u = new assane();
        $u = $request->validate([
            'password' => ['required'],
            'email' => 'required |regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix',



    ]);
    //redirection
   $users = assane::all();
   foreach($users as $user) {
    if ($user->email == $request->get("email") && $user->password == $request->get("password")){


        if($user->role === 'administrateur'){
            /*dans la function redirection vers admin/user j'ai introduit des variable pour la
            récuperation et l'affichage du nom,prenom,et matricule au niveau de l'utilisateur connecter
            et démarrer la session */
            Session_start();
            $_SESSION['nom'] = $user->nom;
            $_SESSION['prenom'] = $user->prenom;
            $_SESSION['matricule'] = $user->matricule;

            $_SESSION['photo'] = $user->photo;

            return redirect('/api/post');
        }
        elseif ( $user->role === 'user_simple') {
            session_start();
            $_SESSION['nom']= $user->nom;
            $_SESSION['prenom'] = $user->prenom;
            $_SESSION['matricule'] = $user->matricule;
            return redirect('/api/userSimple');}


   }
}

$validation = $request->validate([

        ]);
        //redirection
        $users = assane::all();
        foreach ($users as $user) {
            if ($user->email == $request->get("email") && $user->password == $request->get("password")) {
                if ($user->role === 'administrateur') {
                    return redirect('/api/post');
                } elseif ($user->role === 'user_simple') {
                    return redirect('/api/userSimple');
                }



            }
        }


        $validation = $request->validate([
            'msg' => ['accepted'],

        ]);



    }


    public function ARCHIVER(Request $request)
    {
        $u = new assane();
        $users = assane::all();
        foreach ($users as $user) {
            /*  if ($user->email == $request->get("email") && $user->password == $request->get("password")){ */
            if ($user->etat === 0) {
                return redirect('/api/archive');
            }
        }

        }


    }


