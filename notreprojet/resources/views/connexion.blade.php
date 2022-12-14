@extends('layouts.commun')
@section('content')


    <div class="container " style="border: 1px solid black; display:flex;justify-content:center;margin-top:150px; border-radius:10px;background-color:#D9D9D9; width:45%;">
    <form action="/connexion" method="POST" class="container" >
        @error('msg')
        <div class="text-danger alert alert-danger text-center">{{ $message }}</div>
      @enderror
      @error('msg1')
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

