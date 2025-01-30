<pre>
    <?php
    include 'libs/load.php';
   // $cookie_name = "user";
   // $cookie_value = $_SERVER['REQUEST_URI'];
    //setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    /*print("_SERVER \n");
    print_r($_SERVER);
    print("_GET \n");
    print_r($_GET);
    print("_POST \n");
    print_r($_POST);
    print("file");
    print_r($_FILES);
    print("cookie");
    print_r($_COOKIE);
    //print("session");
    //print_r($_SESSION);
    */
    print("_POST \n");
    print_r($_POST);
    if(signup("anand1d","198765","email@gaivl.comm","password")){
        echo "success";
    }
    else{
        echo"later success";
    }
    
    ?>
</pre>