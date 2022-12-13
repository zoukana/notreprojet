
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="accueil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap/dist/js/bootstrap.js">
    <link rel="stylesheet" href="/bootstrap/scss/bootstrap.scss">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

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
                        <a href="/pop" class="m-2"><i class="bi bi-box-arrow-right text-white "
                            style="font-size:20px; margin-left: 220px;"> Deconnexion</i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="d-flex my-4 col-md-12">
                    <form class="d-flex" action="chercheUser" method="GET" role="search">

                        <input class="form-control me-2" name="nom" type="text" placeholder="Rechercher..."
                            aria-label="Search">
                        <button class="btn btn-outline-secondary text-dark" type="submit">Recherche</button>
                    </form>
                    <a  style="margin-left: 530px;font-size:17px;" href="/api/userArchive" class="archive">Liste des archives</a>
                </div>
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
                            <tr  scope="row">
                                <td>{{{$user->nom}}}</td>
                                <td>{{{$user->prenom}}}</td>
                                <td>{{{$user->email}}}</td>
                                <td>{{{$user->matricule}}}</td>
                                <td>{{{$user->role}}}</td>
                                {{-- <td class="border border-4 border-dark">{{ {$user->matricule} }}</td> --}}

                                <td>
                                    <span style="display:flex; justify-content:space-between;">
                                    <a title="modifer" onclick= "return confirm('\'voulez vous vraiment modifier?')" href="post/editForm/{{$user->id}}"><i class="bi bi-pencil-square text-dark "></i></a>
                                    <a title="archiver"  onclick= "return confirm('\'voulez vous vraiment archiver?')" href="/api/Archiv/{{$user->id}}"><i class="bi bi-archive-fill text-dark"></i></a>
                                    <form class="d-flex " action="/api/post/switchRole/{{$user->id}}" method="post">
                                       <button type="submit"><i class="bi bi-arrow-repeat text-dark"></i></button>
                                    </form>

                                    </span>
                                    </td>
                                </tr>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="d-flex justify-content-center col-">
                {{ $users->links() }}
            </div>
        </div>
        <style>
            .archive:hover{
                background-color: blue;
                border-radius: 5px;
                color: #fff;
                padding: 5px
            }
        </style>
</body>

</html>
