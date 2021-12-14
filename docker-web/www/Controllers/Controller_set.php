<?php

class Controller_set extends Controller{

  public function action_form_add(){
    $mod = Model::getModel();
    $req =$mod->getNbNobelPrizes();
    $data = ['nb_nobels' => $req];
    $this->render("form_add", $data);
  }

  public function action_add(){
    $testn = "#^ +$#";//que des espaces
    $testy = "#^\d+$#";
    if(isset($_POST['name']) && isset($_POST['year']) && isset($_POST['category'])
    && !preg_match($testn,$_POST['name']) && preg_match($testy,$_POST['year'])
    && !preg_match($testn,$_POST['category'])){
      $mod = MODEL::getModel();
      $mod->addNobelPrize($_POST);
      $this->render("message", ['title' => 'Nobel added', 'message' => 'You successfully added a new nobel price'] );
    }
    $this->render("message", ['title' => 'Wrong informations', 'message' => 'This nobel isn\'t added due to wrong informations']);
  }

  public function action_add_darwin(){
    $testn = "#^ +$#";//que des espaces
    $testy = "#^\d+$#";
    if(isset($_POST['name']) && isset($_POST['death_cause']))
    && !preg_match($testn,$_POST['name']))
    && !preg_match($testn,$_POST['death_cause'])){
      $mod = MODEL::getModel();
      $mod->addDarwinInventor($_POST);
      $this->render("message", ['title' => 'Darwin added', 'message' => 'You successfully added a new Darwin inventor'] );
    }
    $this->render("message", ['title' => 'Wrong informations', 'message' => 'This darwin isn\'t added due to wrong informations']);
  }

  public function action_remove(){
    $test = '#^\d+$#';
    $mod = Model::getModel();
    if(isset($_GET['id']) && preg_match($test, $_GET['id']) && $mod->isInDataBase($_GET['id'])){
      $supp = $mod->removeNobelPrize( $_GET['id']);
      if(!$supp){
        $this->render("message", ["title" => 'Remove error', 'message' => 'Nobel id : '.$_GET['id'].' couldn\'t get removed']);
      }
      else {
        $this->render("message", ["title" => 'Remove', 'message' => 'Nobel id : '.$_GET['id'].' sucessfully removed']);
      }
    }
    else {
      $this->render("message", ["title" => 'Remove error', 'message' => 'Can\'t remove please verify url informations']);
    }
  }

  public function action_form_update(){
    $mod = Model::getModel();
    if(isset($_GET['id']) && $mod->isInDataBase($_GET['id'])){
      $infos = $mod->getNobelPrizeInformations($_GET['id']);
      $cat = $mod->getCategories();
      $data = [
        'id' => $infos['id'],
        'year' => $infos['year'],
        'category' => $infos['category'],
        'name' => $infos['name'],
        'birthplace' => $infos['birthplace'],
        'birthdate' => $infos['birthdate'],
        'county' => $infos['county'],
        'motivation' => $infos['motivation'],
        'categories' => $cat
                ];
      $this->render("form_update", $data);
    }
    $this->action_error("");
  }

  public function action_update(){
    $testn = "#^ +$#";//que des espaces
    $testy = "#^\d+$#";
    $mod = Model::getModel();
    if(isset($_POST['name']) && isset($_POST['year']) && isset($_POST['category']) && isset($_POST['id'])
    && !preg_match($testn,$_POST['name']) && preg_match($testy,$_POST['year'])
    && !preg_match($testn,$_POST['category']) && preg_match($testy,$_POST['id'])){

      $updt = $mod->updateNobelPrize($_POST);
      if(!$updt){
        $this->render("message", ["title" => 'Update error', 'message' => 'Nobel id : '.$_POST['id'].' couldn\'t get updated']);
      }
      else {
        $this->render("message", ["title" => 'Update', 'message' => 'Nobel id : '.$_POST['id'].' sucessfully updated']);
      }
    }
    else {
      $this->render("message", ["title" => 'Update error', 'message' => 'Can\'t update please verify url informations']);
    }
  }


    /**
     * Action par défaut du contrôleur (à définir dans les classes filles)
     */
    public function action_default(){
      $this->action_form_add();
    }


}
?>
