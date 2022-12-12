{{-- @extends('layouts.commun')
@section('content')


    <div class="container " style="border: 1px solid black; display:flex;justify-content:center;margin-top:200px; border-radius:10px;background-color:#D9D9D9; width:40%;">
    <form action="/connexion" method="POST" class="container" >
        @error('msg')
        <div class="text-danger alert alert-danger text-center">{{ $message }}</div>
      @enderror
        @csrf
        <div style="margin-left:20px;">
            <h2 class="d-flex justify-content-center mt-5">FORMULAIRE DE CONNECTION</h2>
        </div>
       <div class=""></div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">EMAIL</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">PASSWORD</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" id="password" placeholder="password">
            @error('password')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-4">

            <input type="submit" name="submit" class="btn btn-primary ">
            <a href="/post"><span style="margin-left: 30px;color:black">s'inscrire?</span></a>
        </div>
    </form>

</div>
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
<body style="background-color:rgba(156, 156, 163, 1)"><br><br><br><br><br><br>
    @extends('layouts.commun')
@section('content')

        <div class="container col-lg-4 col-md-4 col-sm-12 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 offset-2">
                        <div class="card mb-5 border border-4 border-secondary mt-5" style="margin-top: -30px ;">
                            <div class="card-body">
                            <form action="/connexion" method="POST">
                                @csrf
                                <center><button type="button" class="text-white col-12 btn-lg text-center mt-2 bg-primary" disabled>Connexion</button></center>
                                <div class="input-control">
                                    <div class="mb-3 mt-4">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" style="background-color:rgba(227, 215, 206, 1)">
                                        @error('email')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                </div>
                                <div class="input-control">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">PASSWORD</label>
                                        <div class="d-flex" style="background-color:rgba(227, 215, 206, 1)">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" id="password" placeholder="password" style="background-color:rgba(227, 215, 206, 1)">
                                            @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                        </div>
                                    </div>
                                </div>
                                <center><button type="submit" name="submit" class="btn-lg text-center col-6 mt-2 bg-success">Se connecter</button></center><br>
                                <a href="/post" class="text-left mt-">Inscription ? </h5>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
</body>

</html>
