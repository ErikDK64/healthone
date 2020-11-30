<?php
namespace controller;

use view\View;
include_once ("view/View.php");
use model\Model;
include_once ("model/Model.php");

class Controller
{
    private $model;
    private $view;
    //constructor

    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View($this->model);
    }
    public function readPatientenAction(){
        $this->view->showPatienten();
    }
    public function showMedicijnenPageAction(){
        $this->view->showMedicijnenPage();
    }
    public function readLoginAction(){
        $this->view->showLogin();
    }
    public function showFormPatientAction($id=null){
        $this->view->showFormPatienten($id);
    }

    public function showFormMedicijnenAction($id=null){
        $this->view->showFormMedicijnen($id);
    }
    public function createPatientAction(){
        $naam = filter_input(INPUT_POST,'naam');
        $adres = filter_input(INPUT_POST,'adres');
        $woonplaats = filter_input(INPUT_POST,'woonplaats');
        $geboortedatum = filter_input(INPUT_POST,'geboortedatum');
        $soortverzekering = filter_input(INPUT_POST,'soortverzekering');
        $zknummer = filter_input(INPUT_POST,'zknummer');
        $result = $this->model->insertPatient($naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering);
        $this->view->showPatienten($result);
    }
    public function updatePatientAction(){
        $id = filter_input(INPUT_POST,'id');
        $naam = filter_input(INPUT_POST,'naam');
        $adres = filter_input(INPUT_POST,'adres');
        $woonplaats = filter_input(INPUT_POST,'woonplaats');
        $geboortedatum = filter_input(INPUT_POST,'geboortedatum');
        $zknummer = filter_input(INPUT_POST,'zknummer');
        $soortverzekering = filter_input(INPUT_POST,'soortverzekering');
        $result=$this->model->updatePatient($id,$naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering);
        $this->view->showPatienten($result);
    }
    public function deletePatientAction($id){
        $result = $this->model->deletePatient($id);
        $this->view->showPatienten($result);
    }

    public function createMedicijnAction(){
        $naam = filter_input(INPUT_POST,'naam');
        $maker = filter_input(INPUT_POST,'maker');
        $compansated = filter_input(INPUT_POST,'compansated');
        $side_efect = filter_input(INPUT_POST,'side_efect');
        $benefits = filter_input(INPUT_POST,'benefits');
        $result = $this->model->insertMedicijn($naam,$maker,$compansated,$side_efect,$benefits);
        $this->view->showMedicijnenPage($result);
    }
    public function updateMedicijnAction(){
        $id = filter_input(INPUT_POST,'id');
        $naam = filter_input(INPUT_POST,'naam');
        $maker = filter_input(INPUT_POST,'maker');
        $compansated = filter_input(INPUT_POST,'compansated');
        $side_efect = filter_input(INPUT_POST,'side_efect');
        $benefits = filter_input(INPUT_POST,'benefits');
        $result = $this->model->updateMedicijn($id,$naam,$maker,$compansated,$side_efect,$benefits);
        $this->view->showMedicijnenPage($result);
    }
    public function deleteMedicijnAction($id){
        $result = $this->model->deleteMedicijn($id);
        $this->view->showMedicijnenPage($result);
    }

    public function createUserAction(){
        $naam = filter_input(INPUT_POST,'naam');
        $wachtwoord = filter_input(INPUT_POST,'wachtwoord');
        $apotheek = filter_input(INPUT_POST,'apotheek');
        $result = $this->model->insertUser($naam,$wachtwoord,$apotheek);
        //$this->view->showPatienten($result);
    }
    public function loginAction(){
        $naam = filter_input(INPUT_POST,'naam');
        $wachtwoord = filter_input(INPUT_POST,'wachtwoord');
        $this->model->login($naam,$wachtwoord);
        if ($_SESSION['loggedin']=="true"){
            $this->view->showPatienten();
        } else{
            $this->view->showLogin();
        }
    }
    public function logoutAction(){
        $this->model->logout();
        $this->view->showLogin();
    }



}