<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\assane;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Pagination\Paginator;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        /*ici la session_start dans cette index permet de démarrer au niveau de espace admin
        pour l'affichage du nom,prenom et matricule*/
        session_start();
        if (!isset($_SESSION['matricule']))
            return redirect('/');
        $users = assane::all();
        // $users = assane::where("etat", '=', 1)->paginate(5);
      $users = assane::where('matricule', '!=' , $_SESSION['matricule'])->where("etat", '=', 1)->paginate(5);
        //dd($user->links());
   return view('admin',['users' => $users]);
    }

    public function userSimple()
    {
        /*démarrer au niveau de espace user
        pour l'affichage du nom,prenom et matricule */
         session_start();
         if (!isset($_SESSION['matricule']))
            return redirect('/');
        $users = assane::all();
        // $users = assane::where("etat", '=', 1)->paginate(5);
        $users = assane::where('matricule', '!=' , $_SESSION['matricule'])->where("etat", '=', 1)->paginate(5);
        //dd($user->links());
       return view('user',['users' => $users]);

    }

//fonction qui gere la recherche au niveau de la page user_simple
    public function autocompleteSearch(Request $request)
    {
        session_start();
        $users = assane::all();

        $search = \Request::get('nom');

        $users = assane::where('nom','like','%'.$search.'%')->where('matricule', '!=' , $_SESSION['matricule'])->where("etat", '=', 1)
            ->orderBy('nom')
            ->paginate(5);

            return view("user" ,["users"=>$users]);

    }
//fonction qui gere la a recuperer tous les utilisateur dont leur etat=0
    public function userArchive()
    {   session_start();
        if (!isset($_SESSION['matricule']))
            return redirect('/');
        $users = assane::all();
        $users = assane::where("etat", '=', 0)->paginate(5);
       return view('archive',['users' => $users]);

    }
//fonction qui gere la recherche des utilisateur archiver au niveau de la page des archivé
    public function Search(Request $request)
    {

        session_start();
        $users = assane::all();

        $search = \Request::get('nom');

        $users = assane::where('nom','like','%'.$search.'%')->where('matricule', '!=' , $_SESSION['matricule'])->where("etat", '=', 0)
            ->orderBy('nom')
            ->paginate(5);

            return view("archive" ,["users"=>$users]);

    }



    public function getData(){


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
//fonction qui gere le switch
    public function switchRole(string $id)
    {
        $user = assane::findOrFail($id);
        if($user->role === "administrateur")
        {
            $user->role = "user_simple";
        }
        else
        {
            $user->role = "administrateur";
        }
        $user->save();
        return redirect("/api/post");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    //fonction qui gere la modification
    public function edit(string $id , Request $request)
    {
        $u = new assane();
        $validation = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => 'required |regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix',

        ]);
        $user = assane::findOrFail($id);
        $user->nom=$request->get("nom");
        $user->prenom=$request->get("prenom");
        $user->email=$request->get("email");
        $user->date_modification = date('y-m-d');
        $user->save();
        return redirect("/api/post");
    }
//fonction nous permettant l'affichage du formulaire de modification
    public function editForm(string $id)
    {
        $user = assane::findOrFail($id);
        return view("modification", [ "user" => $user]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
//fonction qui gere la recherche au niveau de la page admin
    public function chercheUser(Request $request)
    {
        session_start();
        $users = assane::all();

        $search = \Request::get('nom');

        $users = assane::where('nom','like','%'.$search.'%' )->where('matricule', '!=' , $_SESSION['matricule'])->where("etat", '=', 1)
            ->orderBy('nom')
            ->paginate(5);

            return view("admin" ,["users"=>$users]);

    }

//fonction qui gere l'archivage des utilisateurs
    public function Archiv(string $id)
   {
       $users = assane::findOrFail($id);
       $users->etat = 0;
       $users->date_archivage = date('y-m-d');
       $users->save();
       return redirect("api/post");
   }
//fonction pour la gestion de la désarchivage
   public function Desarchiv(string $id)
   {
       $user =  assane::findOrFail($id);

       $user->etat = 1;
       $user->save();
       return redirect("/api/userArchive");
   }

//fonction qui gere la déconnexion et de détruire les session
   public function deconnexion(Request $request)
    {
        session_start();
        session_destroy();
        return redirect('/');

    }

    }
