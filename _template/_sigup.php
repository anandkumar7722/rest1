<?
$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_adders']) and isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email_adders'];
    $phone = $_POST['phone'];
    $error= User::signup($username, $password, $email, $phone);
    $signup = true;
}
?>

<?php
if ($signup) {
    if (!$error) {
?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Signup Success</h1>
        <p class="lead">Now you can login from <a href="./login.php">here</a>.</p>

    </div>
</main>
<?php
    } else {
    ?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Signup Fail</h1>
        <p class="lead">Something went wrong, <?= $error ?>
        </p>
    </div>
</main>
<?php
    }
} else {
    ?>

<main class="form-signup w-100 m-auto">
    <form action="sigup.php" method="post">
        <img class="mb-4" src="/photogram/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInputusername" placeholder="name">
            <label for="floatingInputusername">username</label>
        </div>
        <div class="form-floating">
            <input name="phone" type="text" class="form-control" id="floatingInputusername" placeholder="name">
            <label for="floatingInputusername">phone</label>
        </div>
        <div class="form-floating">
            <input name="email_adders" type="email" class="form-control" id="floatingInput"
                placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>


        <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>

    </form>
</main>
<? } ?>