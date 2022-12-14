@extends('layouts.commun')
@section('content')

<body style="background-color:rgba(156, 156, 163, 1)">
    @csrf

    <div class="container bg-white pt-1">
        <div class="container admin col-lg-12 mt-5">
            <div class="row text-white btn-lg mt-2 bg-primary">
                <div class="d-flex justify-content-space-between">
                    <!-- pour l'affichage sur le profil -->
                    <div class="">
                        <img src="/images/post/{{$_SESSION['photo']}}" alt="" srcset="" style="height:100px;width:100px;border-radius:100px;">
                        <p class="fs-6">{{ $_SESSION['matricule'] }}</p>
                    </div>
                    <div class="d-flex  m-4  w-50">
                        <h3>{{ $_SESSION['prenom'] }} {{ $_SESSION['nom'] }}</h3>
                        {{-- <p>{{ $_SESSION['role'] }} </p> --}}
                    </div>
                    <div class="my-5">
                        <a href="/" class="m-2"><i class="bi bi-box-arrow-right text-white "
                            style="font-size:20px; margin-left: 200px;"> Deconnexion</i>
                        </a>
                    </div>
                </div>
            </div>


                        <div class="d-flex my-4 col-md-12">
                            <form class="d-flex" action="Search" method="GET" role="search">

                                <input class="form-control me-2" name="nom" type="text" placeholder="Rechercher..."
                                    aria-label="Search">
                                <button class="btn btn-outline-secondary text-dark" type="submit">Recherche</button>
                            </form>
                            <a  style="margin-left: 530px;font-size:17px;" href="/api/post" class="archive">Liste des actives</a>
                        </div>

                    <a href="/api/userArchive" class="mt-1"><i class="bi bi-box-arrow-right text-white "
                            style="font-size:40px;"></i></a>

                </span>
            </div>

            <div class="row">
                <table class="table table-hover" style="box-shadow: 0px 2px 2px rgba(0,0,0,0.3">
                    <thead class="text-white btn-lg text-center bg-primary">
                        <tr class="border  border-dark">
                            <th scope="col" class="border border-light">Nom</th>
                            <th scope="col" class="border border-light">Prenom</th>
                            <th scope="col" class="border border-light">Email</th>
                            <th scope="col" class="border border-light">Matricule</th>
                            <th scope="col" class="border border-light">Role</th>
                            <th scope="col" class="border border-light">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ( $users as $user )
                        <tr>


                            <tr>


                                 <tr  scope="row">
                                <td class="border border-4 border-dark">{{{$user->nom}}}</td>
                                <td class="border border-4 border-dark">{{{$user->prenom}}}</td>
                                <td class="border border-4 border-dark">{{{$user->email}}}</td>
                                <td class="border border-4 border-dark">{{{$user->matricule}}}</td>
                                <td class="border border-4 border-dark">{{{$user->role}}}</td>


                                <td class= "border border-1 border-dark d-flex justify-content-center">

                                    <span style="display:flex; :space-between;font-size:30px;">

                                    <a onclick= "return confirm('\'voulez vous vraiment désarchiver?')" href="/api/Desarchiv/{{$user->id}}">
                                    <i class="bi bi-archive text-dark"></i>

                                    </span>

                                        </td>

                                </tr>

                                 <tr>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="d-flex justify-content-center col-">

                {{ $users->links()}}

            </div>
        </div>
</body>

</html>
