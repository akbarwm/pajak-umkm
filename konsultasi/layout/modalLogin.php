<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
</style>
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-body  pb-30">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <img src="./img/profil.png" class="img-fluid" alt="Phone image">
                        </div>
                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <div class="sec-title">
                                <h5 class="title bg-left">Silahkan login terlebih dahulu</h5>

                            </div>
                            <form action="conf/autentikasi.php" method="post">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example13">Email</label>
                                    <input type="email" id="form1Example13" class="form-control" placeholder="Email address" name="email" required />

                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example23">Password</label>
                                    <input type="password" id="form1Example23" class="form-control" placeholder="Password" name="password" required />
                                </div>

                                <div class="d-flex justify-content-around align-items-center mb-4">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                                    </div>
                                    <a href="#!">Forgot password?</a>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-success btn-block">Sign in</button>

                                <div class="divider d-flex align-items-center my-4">
                                    <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                                </div>

                                <a class="btn btn-primary btn-block" style="background-color: #3b5998" href="signUp.php" role="button">
                                    </i>Register
                                </a>

                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>