<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$user = $browser->getLastConnectedUser();

$browser->get('/')->info('Page d’accueil, redirection vers le CAS')->
click('#login')->with('request')->begin()->
  isParameter('module', 'utilisateur')->
  isParameter('action', 'edit')->
  isParameter('id', $user->getId())->
end()
;
