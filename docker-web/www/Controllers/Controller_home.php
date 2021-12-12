<?php

class Controller_home extends Controller{

  public function action_home(){
    echo "\n action home";
    $mod = Model::getModel();
    echo " get model fait";
    $req =$mod->getNbNobelPrizes();
    $data = ['nb_nobels' => $req];
    $this->render("home", $data);
  }
    /**
     * Action par défaut du contrôleur (à définir dans les classes filles)
     */
    public function action_default(){
      $this->action_home();
    }


}
?>
