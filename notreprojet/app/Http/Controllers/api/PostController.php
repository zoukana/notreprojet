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

        session_start();
        $users = assane::all();



        // $users = assane::where("etat", '=', 1)->paginate(5);
      $users = assane::where('matricule', '!=' , $_SESSION['matricule'])->where("etat", '=', 1)->paginate(5);
        //dd($user->links());
   return view('admin',['users' => $users]);
    }

    public function userSimple()
    {   session_start();
        $users = assane::all();
        // $users = assane::where("etat", '=', 1)->paginate(5);
        $users = assane::where('matricule', '!=' , $_SESSION['matricule'])->where("etat", '=', 1)->where("role", '=', 'user_simple')->paginate(5);
        //dd($user->links());
       return view('user',['users' => $users]);

    }


    public function autocompleteSearch(Request $request)
    {
        session_start();
        $users = assane::all();

        $search = \Request::get('nom');

        $users = assane::where('nom','like','%'.$search.'%')
            ->orderBy('nom')
            ->paginate(5);

            return view("user" ,["users"=>$users]);

    }

    public function userArchive()
    {   session_start();
        $users = assane::all();
        $users = assane::where("etat", '=', 0)->paginate(5);
        //dd($user->links());
       return view('archive',['users' => $users]);

        //return view('admin',['user' => $user]);
    }

    public function Search(Request $request)
    {


        $users = assane::all();

        $search = \Request::get('nom');

        $users = assane::where('nom','like','%'.$search.'%')
            ->orderBy('nom')
            ->paginate(5);

            return view("archive" ,["users"=>$users]);

    }

    public function user()
    {

        $users = assane::paginate(5);
        //dd($user->links());
       return view('user',['users' => $users]);


    }

    public function archive()
    {


        /*return response ()->json($user);*/
        $users = assane::paginate(5);
        //dd($user->links());
       return view('archive',['users' => $users]);

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

    public function chercheUser(Request $request)
    {
        session_start();
        $users = assane::all();

        $search = \Request::get('nom');

        $users = assane::where('nom','like','%'.$search.'%' )->where('matricule', '!=' , $_SESSION['matricule'])
            ->orderBy('nom')
            ->paginate(5);

            return view("admin" ,["users"=>$users]);

    }
/*     public function chercheU(Request $request)
    {
        session_start();
        $users = assane::all();

        $search = \Request::get('nom');

        $users = assane::where('nom','like','%'.$search.'%' )->where('matricule', '!=' , $_SESSION['matricule'])->where("role", '=', 'user_simple')
            ->orderBy('nom')
            ->paginate(5);

            return view("user" ,["users"=>$users]);

    } */



    public function Archiv(string $id)
   {
       $users = assane::findOrFail($id);
       $users->etat = 0;
       $users->save();
       return redirect("api/post");
   }

   public function Desarchiv(string $id)
   {
       $user =  assane::findOrFail($id);

       $user->etat = 1;

       $user->save();
       return redirect("/api/userArchive");
   }


   public function deconnection(Request $request)
    {
        session_start();
        session_destroy();
        return redirect('/');

    }

    }
