<?php

class Controller_search extends Controller{

  public function action_forme(){
    $mod = Model::getModel();
    $req =$mod->getNbNobelPrizes();
    $data = ['nb_nobels' => $req];
    $this->render("form_search", $data);
  }
    /**
     * Action par défaut du contrôleur (à définir dans les classes filles)
     */
    public function action_default(){
      $this->action_forme();
    }

    public function action_pagination(){
      $test = '#^\d+$#';
      $mod = Model::getModel();
      if(isset($_GET['start']) && preg_match($test, $_GET['start'])){
        $offset = ($_GET['start']-1)*25;
        $req =$mod->findNobelPrizes($_POST, $offset); //ceci est un tableau
        $nb_nobels = $mod->nbFindNobelPrizes($_POST);
        $last_page = intdiv($nb_nobels, 25) + 1;
        $data = [
          'last_25' => $req,
          'last_page' => $last_page
                  ];
        $this->render("pagination", $data);
      }elseif (!isset($_GET['start'])) {
        $req = $mod->findNobelPrizes($_POST); //ceci est un tableau
        $nb_nobels = $mod->nbFindNobelPrizes($_POST);
        $last_page = intdiv($nb_nobels, 25) + 1;
        $data = [
          'last_25' => $req,
          'last_page' => $last_page
                  ];
        $this->render("pagination", $data);
      }
      else{
        $this->action_error("Error start in url");
      }
    }


}
?>
