<main class="form-signup w-100 m-auto">
    <form action="test.php" method="post">
        <img class="mb-4" src="/app/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
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