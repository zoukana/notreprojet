

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
                    <div class=" m-4  w-50">
                        <h3>{{ $_SESSION['prenom'] }} {{ $_SESSION['nom'] }}</h3>
                        <p class="fs-6" style="margin-left: 25px">{{ $_SESSION['role'] }} </p>

                    </div>
                    <div class="my-5">
                        <a href="deconnexion" class="m-2"><i class="bi bi-box-arrow-right text-white "
                            style="font-size:20px; margin-left: 220px;"> Deconnexion</i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="d-flex my-4 col-md-12">
                    <form class="d-flex" action="autocompleteSearch" method="GET" role="search">

                        <input class="form-control me-2" name="nom" type="text" placeholder="Rechercher..."
                            aria-label="Search">
                        <button class="btn btn-outline-secondary text-dark" type="submit">Recherche</button>
                    </form>
                </div>
                <div class="row">
                    <table class="table table-striped table-bordered border border-4 border-dark">
                        <thead class="text-white btn-lg text-center bg-primary">
                            <tr class="border border-4 border-dark">
                                <th scope="col" class="border border-4 border-dark">Nom</th>
                                <th scope="col" class="border border-4 border-dark">Prenom</th>
                                <th scope="col" class="border border-4 border-dark">Email</th>
                                <th scope="col" class="border border-4 border-dark">Matricule</th>
                                <th scope="col" class="border border-4 border-dark">Role</th>
                                <th scope="col" class="border border-4 border-dark">date_inscription</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ( $users as $user )
                            <tr>
                                     <tr  scope="row">
                                        <td class="border border-4 border-dark">{{{$user->nom}}}</td>
                                        <td class="border border-4 border-dark">{{{$user->prenom}}}</td>
                                        <td class="border border-4 border-dark">{{{$user->email}}}</td>
                                    <td class="border border-4 border-dark">{{{$user->matricule}}}</td>
                                    <td class="border border-4 border-dark">{{{$user->role}}}</td>
                                    <td class="border border-4 border-dark">{{{$user->date_inscription}}}</td>

                                    </tr>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="d-flex justify-content-center col-">
                {{ $users->links() }}
            </div>
        </div>

@endsection
