
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
<!-- background-color:RGB(51, 21, 15) -->
<!-- style="background-color:rgba(156, 156, 163, 1)" -->

<body style="background-color:rgba(156, 156, 163, 1)">

    <div class="container border-danger bg-white pt-1">
        <div class="container admin col-lg-12 mt-5">
            <div class="row text-white btn-lg text-center mt-2 bg-primary">
                <span class="d-flex justify-content-center">
                    <!-- pour l'affichage sur le profil -->
                    <span class="col-1 ">

                    <img src="/images/post/{{$_SESSION['photo']}}" alt="" srcset="" style="height:100px;width:100px;border-radius:100px;">
                    <p class="fs-6">{{ $_SESSION['matricule'] }}</p>
                    </span>
                    <span class="d-flex  mt-4  w-50" style="max-height: 2rem;">
                    <span>{{ $_SESSION['nom'] }} {{ $_SESSION['prenom'] }}</span>

                    <div class="ml-auto  mt-3 " style="margin-left:auto;max-height: 2.5rem;">
                        <form class="d-flex" action="autocompleteSearch" method="GET" role="search">
                            <input class="form-control me-2" name="nom" type="search" placeholder="Recherche"
                                aria-label="Search">
                            <button class="btn btn-outline-secondary text-dark" type="submit">Search</button>
                        </form>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <a href="/" class="mt-1"><i class="bi bi-box-arrow-right text-white "
                            style="font-size:40px;"></i></a>

                </span>
            </div>

            <h1 class="d-flex justify-content-center">Espace utilisateur</h1>

            <div class="row">
                <table class="table table-striped table-bordered border border-4 border-dark">
                    <thead class="text-white btn-lg text-center border border-4 border-dark"
                        style="background-color:rgb(74, 149, 174)">
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
            <div class="d-flex justify-content-center col-">

                {{ $users->links()}}
            </div>
        </div>
</body>

</html>
