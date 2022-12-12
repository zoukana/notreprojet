{{-- @extends('layouts.commun')
@section('content')
<div class="container my-5">

  <form action="/inscription" method="POST" class="row g-3" style="background-color:#D9D9D9" id="loginform" enctype="multipart/form-data">
    @csrf
    <div>
      <h2 class="text-center bg-primary ">FORMULAIRE D'INSCRIPTION</h2>
    </div>

    <div>
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">PRENOM</label>
      <input type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" id="prenom" name="prenom" placeholder="PRENOM">
      @error('prenom')
      <div class="text-danger">{{ $message }}</div>
    @enderror

    </div>

    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">NOM</label>
      <input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom" name="nom" placeholder="NOM">
      @error('nom')
      <div class="text-danger">{{ $message }}</div>
    @enderror

    </div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">EMAIL</label>
      <input type="text" autocomplete="off" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Email" name="email">
      @error('email')
      <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">role</label>
      <select id="role" name="role" class="form-select @error('nom') is-invalid @enderror">
        <option selected></option>
        <option name="role">administrateur</option>
        <option name="role">user_simple</option>
      </select>
      @error('role')
      <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-6">
      <label for="inputAddress2" class="form-label">mot_de_passe*</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"  id="password" placeholder="mot_de_passe">
      @error('password')
      <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-6">
      <label for="inputAddress2" class="form-label">saisir a nouveau le mot de passe* </label>
      <input type="password"  name="password_confirmation"  class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="mot_de_passe">
      @error('password_confirmation')
      <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-auto">
      <input type="file" class="form-control" id="photo" name="photo" placeholder="PHOTO" accept=".jpeg, .png, .jpj">
    </div>
    <br>
    <div class="col-6">
      <input type="submit" id="submit" name="submit" class="btn btn-primary" style="background-color:#05006B">

</div>
</form>


@endsection --}}



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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">
    @extends('layouts.commun')
    @section('content')
    <div style="margin-top: 90px ;"></div>
    <div class="container bg-light col-lg-4 col-md-4 col-sm-12 mt-4" style="border-radius: 10px ; box-shadow: 4px 4px 4px #000 ;">
        <br>

        <form action="/inscription" method="POST" id="submit" class="row g-3" id="loginform" enctype="multipart/form-data">
            @csrf
        <center><button type="button" class="col-8 text-white btn-lg text-center mt-2 bg-primary" disabled>Formulaire D'inscription</button></center><br>
            <div class="text-danger d-flex justify-content-center">

            </div>
            <div class="text-success d-flex justify-content-center">

            </div>
        <div class="input-control col-md-6">
                <div class="">
                    <label for="inputNom4" class="form-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="border border-3 border-secondary form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" placeholder="nom" style="background-color:rgba(227, 215, 206, 1)">
                    @error('nom')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
            </div>
            <div class="input-control col-md-6 mb-2">
                <div class="">
                    <label for="inputPrenom4" class="form-label">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="border border-3 border-secondary form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" placeholder="Prenom" style="background-color:rgba(227, 215, 206, 1)">
                    @error('prenom')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="input-control col-md-6">
                <div class="">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" class=" border border-3 border-secondary form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email" style="background-color:rgba(227, 215, 206, 1)">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
            </div>
            <div class="input-control col-md-6 mb-2">
                <div class="">
                    <label for="inputRole" class="form-label">Role</label>
                    <select id="role" name="role" class="border border-3 border-secondary form-select @error('nom') is-invalid @enderror" placeholder="Selectionner" style="background-color:rgba(227, 215, 206, 1)">
                        <option selected ></option>
                        <option name="role">Administrateur</option>
                        <option name="role">User_simple</option>
                        @error('role')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </select>
                    <span id="erreur3"></span>
                </div>
            </div>
            <div class="input-control col-md-6">
                <div class="">
                    <label for="inputEmail4" class="form-label">Mot_de_passe*</label>
                    <input type="password" name="password" id="password" class="border border-3 border-secondary form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Mot_de_passe" style="background-color:rgba(227, 215, 206, 1)">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
            </div>
            <div class="input-control col-md-6 mb-2">
                <div class="">
                    <label for="inputMot de passe4" class="form-label">Saisir a nouveau le mot de passe*</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"  class=" border border-3 border-secondary form-control @error('password_confirmation') is-invalid @enderror" placeholder="Mot_de_passe" style="background-color:rgba(227, 215, 206, 1)">
                    @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
            </div>
            <div class="input-control">
                <div class="input-group mb-3">
                    <input type="file" name="photo" id="photo" class="form-control border border-3 border-secondary" accept=".jpeg, .png, .jpj" placeholder="cliquer" style="background-color:rgba(227, 215, 206, 1)">
                    <label class="input-group-text" for="inputGroupFile02">Photo</label>
                </div>
            </div>
            <center><button type="submit" id="submit" name="submit" class="col-4 btn-lg text-centerm mb-4 bg-success">S'inscrire</button></center>
            {{-- <a href="connexion.php" class="text-left mt-">Se connecter ? </h4> --}}
        </form><br>
    </div>
    @endsection
</body>

</html>
