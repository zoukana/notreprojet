<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\assane;
use PhpParser\Node\Expr\Cast\String_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $users = assane::all();
        $users = assane::paginate(5);

       return view('admin',['users' => $users]);
        //return view('admin',['user' => $user]);
    }

    // app > http > controllers > EmployeeController.php

    public function getData(){
      //$user = assane::paginate(5);
      //return view('admin',['users' => $users])
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
        if($user->role === "admin")
        {
            $user->role = "user";
        }
        else
        {
            $user->role = "admin";
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

        $user = assane::findOrFail($id);
        $user->nom=$request->get("nom");
        $user->prenom=$request->get("prenom");
        $user->email=$request->get("email");
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
        $users = assane::where('prenom', $request->get('prenom'))->get();

        return view("admin" ,["users"=>$users]);
    }
}
