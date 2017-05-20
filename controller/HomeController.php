<?php

class HomeController extends ControladorBase {


    public function viewHome() {

        $model = new User();

        $datos = [
            'title' => 'User list',
            'users' => $model->getAll(),
            'date' => date("l")
        ];

        $this->view('home', $datos);

    }


}

?>