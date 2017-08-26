<?php

class HomeController extends ControladorBase {


    public function viewHome() {

        // cuando está loguedao, quiero que vaya a la home del user
        if (isset($_SESSION['sesionIniciada'])) {
            header ("Location: index.php?controller=Homeuser&action=viewHome");
        } else {
            // en caso contrario mostrar la home para no logeados
            $model = new User();

            $datos = [
                'title' => 'User list',
                'users' => $model->getAll(),
                'date' => date("l")
            ];
            $this->view('home', $datos);
        }

    }


}

?>