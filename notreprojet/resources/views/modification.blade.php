{{-- <style>
    .centre{
  padding: 10px;
  background-color:#ffffff;
  box-shadow: 0 4px 8px 0 rgb(0 0 0 / 30%);
  border-radius: 15px;
  margin-top: 10px;
  margin-bottom: 10px;

  min-height: 500px;}
    .formGauche{width: 100%; margin-left: 26%}
 header{
    min-width: 100%;
    text-align: center;
 min-height: 70px;
 background: #636E72;
 color: #ffffff;
 padding-top: 2px;
}
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        </head>
<body class="bg-secondary">
    <div class="container col-6">
        <div class="row mt-5">
          <section class="col-md-12 centre">

               <div class="container-fluid ">
                <header class="bg-primary ">
                    <h1>Formulaire de modification</h1>
                   </header>
               </div>
          <form method="POST" action="/api/post/edit/{{$user->id}}" >
            <div class="col-md-6 formGauche mt-5 border border-danger">
            <div class="form-group ">
                  <label for="prenom">Nom </label><br>
                  <input type="text" name="nom" id="nom" placeholder="nom" class="form-control" value="{{{$user->nom}}}" >
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom </label><br>
                    <input type="text" name="prenom" id="prenom" placeholder="prenom" class="form-control"  value="{{{$user->prenom}}}" >
                    <div id="erreur"></div>
               </div>
                <div class="form-group">
                  <label for="email">E-mail</label><br>
                  <input type="text" id="email" name="email"placeholder="exemple@gmail.com" class="form-control" value="{{{$user->email}}}">
                  <div id="erreur2"></div>
                </div>
                <button type="submit" name="S'Inscrire" class="btn btn-secondary btn-lg bit Sinscrire">Modifier</button>
                <button class="btn btn-light btn-lg "type="reset">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="/api/post" class="ml-5">Annuler</a>
                </button>

            </div>
          </form>
          </section>
        </div>
      </div>
</body>
</html> --}}


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

<body style="background-color:rgba(156, 156, 163, 1)">
  <div style="margin-top: 90px ;"></div>
  <div class="container bg-light col-lg-4 col-md-4 col-sm-12 mt-4" style="border-radius: 10px ; box-shadow: 4px 4px 4px #000 ;">
    <br>
    <form action="/api/post/edit/{{$user->id}}"  method="POST" id="submit" class="h-100 d-flex align-items-center justify-content-center flex-column">
      <center><button type="button" class="text-white btn-lg text-center mt-2 bg-primary" disabled>Formulaire de modification</button></center><br>


      <div class="input-control col-md-6">
        <div class="">
          <label for="inputNom4" class="form-label">Nom</label>
          <input type="text" name="nom" class="form-control border border-3 border-secondary "value="{{{$user->nom}}}" id="nom" placeholder="nom" style="background-color:rgba(227, 215, 206, 1)">
          <span id="erreur"></span>
        </div>
      </div>
      <div class="input-control col-md-6 mb-2">
        <div class="">
          <label for="inputPrenom4" class="form-label">Prenom</label>
          <input type="Prenom" name="prenom" class="form-control  value="{{{$user->prenom}}}" id="prenom" placeholder="prenom" style="background-color:rgba(227, 215, 206, 1)">
        

        </div>
      </div>
      <div class="input-control col-md-6">
        <div class="">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="Email"name="email" class="form-control border border-3 border-secondary"value="{{{$user->email}}}" id="Email" placeholder="Email" style="background-color:rgba(227, 215, 206, 1)">
          <span id="erreur2"></span>
        </div>

        <center><button type="submit" name="S'Inscrire" class="col- btn-lg text-center mb-4 mt-5 bg-success">Modifier</button></center>
        <a href="/api/post" class="ml-5">Annuler</a>
    </form><br>
  </div>


</body>

</html>

