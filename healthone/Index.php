<?php
use model\Model;
include_once ("model/Model.php");
use view\View;
include_once ("view/View.php");
use controller\Controller;
include_once ("controller/Controller.php");

$controller = new Controller();

// READ : it will show u the patienten screen
if(isset($_POST['showFormPatient']))
{
    $controller->showFormPatientAction( $_POST['showFormPatient']);
}
//  UPDATE : changes info of a row of patients
else if(isset($_POST['updatePatient']))
{
    $controller->updatePatientAction();
}
// CREATE :  adds a new row of patients
else if(isset($_POST['createPatient']))
{
    $controller->createPatientAction();
}
// DELETE :  deletes a row of patients
else if(isset($_POST['deletePatient']))
{
    $controller->deletePatientAction($_POST['deletePatient']);
}
// READ : it will show u the patienten screen

else if(isset($_POST['showMedicijnenPage'])){
    $controller->showMedicijnenPageAction();
}

else if(isset($_POST['showFormMedicijn']))
{
    $controller->showFormMedicijnenAction( $_POST['showFormMedicijn']);
}

else if(isset($_POST['updateMedicijn']))
{
    $controller->updateMedicijnAction();
}
// CREATE : adds a new row medicijn
else if (isset($_POST['createMedicijn']))
{
    $controller->createMedicijnAction();
}
// CREATE : it adds a new user
else if(isset($_POST['deleteMedicijn']))
{
    $controller->deleteMedicijnAction($_POST['deleteMedicijn']);
}
// DELETE : delets a medicijn
else if (isset($_POST['adduser'])){
    $controller->createUserAction($_POST['adduser']);
}
// READ :  it will log u in
else if (isset($_POST['login'])){
    $controller->loginAction();
}
// ACTION : it will let u log out
else if (isset($_POST['logout'])){
    $controller->logoutAction();
}
// READ :  it will show the login screen
else
{
    $controller->readLoginAction();
}