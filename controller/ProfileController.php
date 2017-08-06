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
        
        $user = $model->saveProfile($_POST['user'], $_POST['email']);

        if ($user){
            $_SESSION['user'] = $user;
            header ("Location: index.php?controller=Homeuser&action=viewPage");
        } else {          
            header ("Location: index.php?controller=User&action=newuser");
        }
        
    }
}

?>