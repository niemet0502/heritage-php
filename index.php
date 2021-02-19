<?php
  require_once('src/entities/Personne.php');
  require_once('src/entities/Users.php');
  $user = new Users('Marius', 'NIemet', 2, 'marius@niemet.sn', 'secret');
  $user->printF();