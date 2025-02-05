<pre>
    <?php
    //setcookie("testcook", "_value", time() + (86400 * 30), "/");
    //setcookie($username, $email, time() + (86400 * 30), "/");
    //Session::start();
    include 'libs/load.php';
    print("_SERVER \n");
    print_r($_SERVER);
    print("_session");
    print_r($_SESSION);
    if (isset($_GET['clear'])) {
        printf("session_unset() is working");
        Session::unset();
    } //else {
    //}
    printf("\nsetting a=100\n");


    if (Session::isset('a')) {
        printf("a is not alery ".Session::get('a')."\n");
    } else {
        Session::set('a',time());
        printf("a is ".Session::set('a',time()) ."\n");
    }
    if (isset($_GET['destroy'])) {
        printf("session_destroy() is working");
        Session::destory();
    }

    ?>
    

</pre>