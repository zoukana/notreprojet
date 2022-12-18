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

      $password_confirmation = $request->get('password_confirmation');
//controle de saisit formulaire
        $validation = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => 'required |regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix',
            'role' => ['required'],
            'password' => ['required'],
            'password_confirmation' => 'required_with:password|same:password',


        ]);

        //controle du mail existant
        foreach ($u::all() as $user) {

            if ($user->email === $email) {

                $validation = $request->validate([
                    'email' => ['confirmed'],

                ]);
            }
        }
//insertion a la base de donnée
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
        //insertion image
        if($request->hasFile('file')){
            $file= $request->file('file'); //recupération du photo au niveau de l'input
            $extension = $file ->getClientOriginalExtension();//recupération nom de la photo
            $filename= time().'.'.$extension;
            $file->move('images/post/',$filename);/*deplacement de la photo dans le dossier public
                                                    au niveau du dossier creer "image/post" */
            $res->photo=$filename;}
            else{
              return $request;
            $user->photo='';
            }
        $res->etat = 1;
        $res->save();

        return view("popup");
    }

//fonction pour gerer le controle de saisit au niveau du formullaire de connexion

    protected function connexion(Request $request)
    {
        //message d'erreur et vérification du format du mail
        $u = new assane();
        $u = $request->validate([
            'password' => ['required'],
            'email' => 'required |regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix',

    ]);

    //redirection
   $users = assane::all();//variable permettant de recuperer tous les utilisateur du modele assane
   foreach($users as $user)//fonction pour parcourir tous les utilisateur de la bdd
    {
        //condition pour verifier si le mail et le mot_de_passe saisit existe
    if ($user->email == $request->get("email") && $user->password == $request->get("password")){
//si c'est vrai  alors on verifie si le role est admin et que l'etat=1(afficher)

        if($user->role === 'administrateur' && $user->etat === 1){
            //ainsi on recuperer ses données grace a des sessions
            Session_start();
            $_SESSION['nom'] = $user->nom;
            $_SESSION['prenom'] = $user->prenom;
            $_SESSION['matricule'] = $user->matricule;
            $_SESSION['role'] = $user->role;
            $_SESSION['photo'] = $user->photo;
            /*lors de la redirection on enleve l'utilisateur connecter de la liste des utilisateur qui
            doit s'afficher
            */
           $users = assane::where('matricule', '!=' , $_SESSION['matricule'])->where('etat', '=', "1")->paginate(5);
//ensuite on fait une redirection vers la page admin grace a "api/post"
            return redirect('/api/post');
        }

        //redirection vers un user_simple recupérer les données de son profil 

        //sinon_si le role role est user_simple et l'etat=1 on refait la mm chose
        elseif ( $user->role === 'user_simple'  && $user->etat === 1) {
            session_start();
            $_SESSION['nom']= $user->nom;
            $_SESSION['prenom'] = $user->prenom;
            $_SESSION['matricule'] = $user->matricule;
            $_SESSION['photo'] = $user->photo;
            $_SESSION['role'] = $user->role;
            $users = assane::where('matricule', '!=' , $_SESSION['matricule'])->where('etat', '=', "1")->paginate(5);
            return redirect('/api/userSimple');}

            //sinon on lui dit que l'email ou le mot_de_passe n'existe pas
            else{
                $validation = $request->validate([
                    'msg1' => ['present'],

                ]);
            }
   }
}//message d'erreur pour user qui n'exixte pas dans la base de donnée
}
/*maintenant quant l'utilisateur n'est ni admin ,ni user et que son etat!=1 alors
on suppose qu'il est archiver*/

        $validation = $request->validate([
            'msg' => ['accepted'],


        ]);
    }

    }

