<header class="row">
	<nav class="navbar navbar-default col-md-12">
	  <div class="container-fluid">
		<div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.php"><img width="120px" src="../public/image/logo/logo_meetie_sans_fond.png" alt="Accueil" /></a>
		</div>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav">
			  <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> &nbsp;Accueil</a></li>
				<li><a href="match.php">Match en cours</a></li>
			  <li><a href="list_match.php">Mon tableau de chasse <span class="label label-success" id="count_match"><?php echo ($count_match_non_lu) ? $count_match_non_lu : ''; ?></span></a></li>
			  <li><a href="chat.php">Messages  <span class="label label-success" id="count_chat"><?php echo ($count_message_non_lu) ? $count_message_non_lu : ''; ?></span></a></li>
			</ul>

			<div class="list-group" id="sous_menu">
			  <a href="profil.php" class="list-group-item">Profil</a>
			  <a href="parametres.php" class="list-group-item">Paramètres du compte</a>
			</div>

			 <ul class="nav navbar-nav navbar-right menu_config">
			 <?php if ($statut == 'admin') { ?>
				  <li><a class="" href="../admin"><span class="glyphicon glyphicon-chevron-right"></span> Passer au mode administrateur</a></li>
			 <?php } ?>
			  <li><a class="score" href="#"><span class="glyphicon glyphicon-asterisk"></span> &nbsp;Sex-appeal : <span id="sex_appeal"><?php echo $sex_appeal; ?></span></a></li>
			  <li class="parametres_pos"><a class="parametres" href="#"><span class="glyphicon glyphicon-user"></span> &nbsp;Numéro <?php echo $_SESSION['id']; ?></a></li>
			  <li><a class="deconnect" href="deconnect.php"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Déconnexion</a></li>
			</ul>
	  </div>
	</nav>
</header>
