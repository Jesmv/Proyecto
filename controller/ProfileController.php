<?php
class ProfileController extends ControladorBase {

    public function profile() {
        if (isset($_SESSION['sesionIniciada']) && isset($_SESSION['user'])) {
            $this->view('profile', [
                'user' => $_SESSION['user'],
                'error' => null,
                'errorNew' => null,
                'errorCompare' => null
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
                'user' => $_SESSION['user'],
                'error' => null,
                'errorNew' => null,
                'errorCompare' => null
            ]);
        }
        
    }

    public function savePassword() {
        $model = new User();
        $error = null;
        $errorNew = null;
        $errorCompare = null;
        $user = $_SESSION['user'];

        if ($user->getPassword() === md5($_POST['oldPass'])) {
            
            If(!empty($_POST['newPass'])) {
                if(md5($_POST['newPass']) === md5($_POST['newpass2'])){
                    $comprobacion = $model->savePassword(md5($_POST['newPass']), $user->getNick());
                    if($comprobacion){
                        $user = $model->findUser($user->getNick());
                        $_SESSION['user'] = $user;
                        header ("Location: index.php?controller=Profile&action=profile");
                    } else {
                        $errorCompare = "No se ha podido modificar";
                    }
                    
                }else {
                    $errorCompare = "errorultimo";
                    $errorNew = null;
                }
            } else {
                $errorNew = "Campo vacío";
            }

            $error = null;
        } else {
            $error = "password Incorrecto";
            
        }

        $this->view('profile', [
            'user' => $_SESSION['user'],
            'error' => $error,
            'errorNew' => $errorNew,
            'errorCompare' => $errorCompare
        ]);
    }

}

?>

