<?php

require_once '../app/models/User.php';
require_once '../app/models/Cart.php';


class UserController {
    public function loginPage() {
        $smarty = $GLOBALS['smarty'];
        $smarty->display('login.tpl');
    }

    public function registerPage() {
        $smarty = $GLOBALS['smarty'];
        $smarty->display('register.tpl');
    }

    public function profile() {
        $smarty = $GLOBALS['smarty'];
        $cart = new Cart();
        $smarty->assign('cartTotalCount', $cart->getCartTotalCount($_SESSION['user']['id'] ?? null));
        $this->userLoggedIn($_SESSION['user'] ?? null);
        
        $smarty->assign('user', $_SESSION['user'] ?? null);
        $smarty->assign('page_title', 'Profile Page');
        $smarty->display('profile.tpl');
    }

    public function registerUser(){
         $smarty = $GLOBALS['smarty'];
        $user = new User();
        

        $firstname = $user->validateInput($_POST['firstname'] ?? '');
        $lastname = $user->validateInput($_POST['lastname'] ?? '');
        $phone = $user->validateInput($_POST['phone'] ?? '');
        $email = $user->validateInput($_POST['email'] ?? '');
        $password = $user->validateInput($_POST['password'] ?? '');

        if(!$user->emailExist($email)){
            $result = $user->create($firstname, $lastname, $phone, $email, $password);

            if($result !== false){
                // echo "<script>alert('REGISTRATION SUCCESSFUL'); location.href='shop'</script>";
                // $smarty->assign('error', $result['msg']);
                $smarty->display('login.tpl');
            }else{
                echo "<script>alert('REGISTRATION FAILED')</script>";
            }
        }else{
            //    echo "<script>alert('USER EMAIL ALREADY EXISTS'); location.href='register'</script>";
            $smarty->assign('error', 'User email already exists');
            $smarty->display('register.tpl');

        }
    }

    public function loginUser(){

        $smarty = $GLOBALS['smarty'];

        $user = new User();
        $email = $user->validateInput($_POST['email'] ?? '');
        $password = $user->validateInput($_POST['password'] ?? '');

        $result = $user->loginUser($email, $password);

        if($result['status'] === 'error') {
            $smarty->assign('error', $result['msg']);
            $smarty->display('login.tpl');
            // echo "<script>alert('".$result['msg']."'); location.href='login'</script>";
        } else {
            // Assuming session management is set up
            // session_start();
            $_SESSION['user'] = $result; // Store user data in session
            header('Location: shop'); // Redirect to profile page after login
        }

    }

    public function userLoggedIn($user){
        $smarty = $GLOBALS['smarty'];
        // Check if the user is logged in
        if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
            echo "<script>alert('You must be logged in to access this page.'); location.href='login'</script>";
            // $smarty->assign('error', 'You must be logged in to access this page.');
            // $smarty->display('login.tpl');
            // echo "<script>alert('You must be logged in to access this page.'); location.href='login'</script>";
        }
    }

    public function logout() {
        // Logic to handle user logout
        session_start();
        session_destroy();

        header('Location: login'); // Redirect to home page after logout
        exit;
    }



}