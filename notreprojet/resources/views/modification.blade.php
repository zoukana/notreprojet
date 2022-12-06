<style>
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
<body>
    <div class="container">
        <div class="row">
          <section class="col-md-12 centre">

               <div class="container-fluid ">
                <header class="col-md-12 hautDePage">
                    <h1>Modification</h1>
                   </header>
               </div>
          <form method="POST" action="/api/post/edit/{{$user->id}}" >
            <div class="col-md-6 formGauche">
            <div class="form-group">
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
                    <a href="/api/post">Annuler</a>
                </button>

            </div>
          </form>
          </section>
        </div>
      </div>
</body>
</html>
