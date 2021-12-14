<?php

class Controller_list extends Controller{

  public function action_last(){
    $mod = Model::getModel();
    $req =$mod->getLast(); //ceci est un tableau
    $nb_nobels = $mod->getNbNobelPrizes();
    $data = [
      'last_25' => $req,
      'nb_nobels' => $nb_nobels
              ];
    $this->render("last", $data);
  }
  
  public function action_informations(){
    $test = '#^\d+$#';
    $mod = Model::getModel();
    if(isset($_GET['id']) && preg_match($test, $_GET['id']) && $mod->isInDataBase($_GET['id'])){
      $req =$mod->getLast(); //ceci est un tableau
      $infos = $mod->getNobelPrizeInformations($_GET['id']);
      $data = [
        'year' => $infos['year'],
        'category' => $infos['category'],
        'name' => $infos['name'],
        'birthplace' => $infos['birthplace'],
        'birthdate' => $infos['birthdate'],
        'county' => $infos['county'],
        'motivation' => $infos['motivation']
                ];
      $this->render("informations", $data);
    }
    else {
      
    }
  }

  public function action_pagination(){
    $test = '#^\d+$#';
    $mod = Model::getModel();
    $nb_nobels = $mod->getNbNobelPrizes();
    $last_page = intdiv($nb_nobels, 25) + 1;
    if(isset($_GET['start']) && preg_match($test, $_GET['start'])){
      $offset = ($_GET['start']-1)*25;
      $req =$mod->getNobelPrizesWithLimit($offset); //ceci est un tableau
      $data = [
        'last_25' => $req,
        'last_page' => $last_page
                ];
      $this->render("pagination", $data);
    }
    elseif (!isset($_GET['start'])) {
      $req =$mod->getNobelPrizesWithLimit(); //ceci est un tableau
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

    /**
     * Action pour récuppérer tous les prix darwin de MongoDB
     */
  public function action_last_darwin(){
    $mod = Model::getModel();
    $req =$mod->getDarwinInventors(); //ceci est un tableau de tableau
    $nb_nobels = $mod->getNbNobelPrizes();
    $data = [
      'all_darwin' => $req,
      'nb_nobels' => $nb_nobels
              ];
    $this->render("last_darwin", $data);
  }

    /**
     * Action par défaut du contrôleur (à définir dans les classes filles)
     */
    public function action_default(){
      $this->action_last();
    }


}
?>
