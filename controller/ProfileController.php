<?php
class ProfileController extends ControladorBase {

    public function profile() {
        if (isset($_SESSION['sesionIniciada']) && isset($_SESSION['user'])) {
            $this->view('profile', [
                'user' => $_SESSION['user']
            ]);
        } else {
            $this->view('Home', []);
        }

    }

    public function saveProfile(){
        $model = new User();

        $user = $model->saveProfile($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['nick'], $_SESSION['user']->getImage());
        
        if ($user){
            $_SESSION['user'] = $user;
            header ("Location: index.php?controller=Profile&action=profile");
        }  else {
            $this->view('profile', [
                'user' => $_SESSION['user']
            ]);
        }
        
    }
}

?>