<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/components/login/login.css">
</head>
<body>
    <section class="ezy__signin16_4DHM2rRT d-flex align-items-center justify-content-center">
        <div class="ezy__signin16_4DHM2rRT-overlay"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div>
                        <img
                            src="https://cdn.easyfrontend.com/pictures/icons/user.png"
                            alt=""
                            class="ezy__signin16_4DHM2rRT-user-img img-fluid mb-4"
                        />
                        <h2 class="ezy__signin16_4DHM2rRT-heading mb-5">Unknown</h2>
                        <form action="authenticate.php" method="post">
                            <div class="ezy__signin16_4DHM2rRT-form-card">
                                <div class="form-group w-100 mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required />
                                </div>
                                <div class="form-group w-100 mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                                </div>
                                <button type="submit" class="btn ezy__signin16_4DHM2rRT-btn w-100">SIGN IN</button>
                            </div>
                            <div class="text-center mt-4">
                                <a href="">Forget Username / Password ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>