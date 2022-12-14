@extends('layouts.commun')
@section('content')
<div class="container my-5">

  <form action="/inscription" method="POST" class="row g-3" style="background-color:#D9D9D9" id="loginform" enctype="multipart/form-data">
    @csrf
    <div>

      <h2 class="text-center bg-primary col-12">FORMULAIRE D'INSCRIPTION</h2>
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
      <input type="file" class="form-control" id="file" name="file" id="file"  placeholder="PHOTO" accept=".jpeg, .png, .jpj">
    </div>
    <br>
    <div class="col-6">
      <input type="submit" id="submit" name="submit" class="btn btn-primary" style="background-color:#05006B">

</div>
</form>


@endsection
