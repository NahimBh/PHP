<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Site du CVSAE</title>
     
    <link rel="icon" href="img/" /> 
    <script rel="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script rel="text/javascript" src="js/script.js" ></script> 
    <link rel="stylesheet" href="css/bootstrap.min.css" />  
    <link rel="stylesheet" href="css/style.css" />  
    
</head>   
    
<body> 

<div class="formulaire">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Identifiant</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de Passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="MDP">
  </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <br />
  <button id="co" type="submit" class="btn btn-default">Connexion</button>
  <button id="fermer" class="btn btn-default">Fermer</button>
</form>
</div>
    
<div class="formulaire2">
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
      <button id="fermer2" class="btn btn-default">Fermer</button>
    </div>
  </div>
</form>
</div>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Accueil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Actualités<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Naviguer</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a class="connexion" href="#">Connexion</a></li>
        <li><a class="inscrire" href="#">S'inscrire</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
    
<header>
<div class="first"></div> 


</header>    
</body>
</html