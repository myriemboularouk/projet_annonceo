
    <body>
        <nav class="navbar navbar-inverse ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?= $ligne_utilisateur['pseudo']?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="utilisateur.php">Mon profil <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Lien</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parcours <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Expériences</a></li>
                                <li><a href="#">Réalisations</a></li>
                                <li><a href="#">Formations</a></li>
                                <!-- <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compétences <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="competences.php">Compétences</a></li>
                                <li><a href="loisirs.php">Loisirs</a></li>
                                <li><a href="#">Réseaux</a></li>
                                <!-- <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li> -->
                            </ul>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-default">Rechercher</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Lien</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu déroulant <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Lien</a></li>
                                <li><a href="#">Autre lien </a></li>
                                <li><a href="#">Déconnexion</a></li>
                                <!-- <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
