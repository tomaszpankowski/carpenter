<section class="login-s1 container-fluid d-flex align-items-center bg-secondary py-5 minh-100vh">
    <div class="row mx-0 w-100 pt-5 mt-5">
        <div class="col-11 col-sm-8 col-md-6 col-lg-4 col-xxl-3 mx-auto">
            <div class="card bg-dark border-warning shadow">
                <div class="card-header border-bottom border-warning">
                    <h6 class="text-warning text-uppercase my-1 text-shadow">
                        Login
                    </h6>
                </div>
                <div class="card-body">
                    <form class="text-start px-3" 
                        autocomplete="off"
                        action=""
                        method="POST">
                        <div class="form-group mb-3">
                            <label class="text-warning text-shadow mb-2 ms-1">Login</label>
                            <input class="form-control text-white bg-dark border-warning rounded-pill" 
                                type="text" 
                                maxlength="80"
                                name="username"
                                placeholder="Full name"
                                tabindex="1">
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-warning text-shadow mb-2 ms-1">Password</label>
                            <input class="form-control text-white bg-dark border-warning rounded-pill" 
                                type="password" 
                                maxlength="60"
                                name="userpass"
                                placeholder="Enter password"
                                tabindex="2">
                        </div>
                        <div class="w-100 small border-bottom border-warning">
                            <p class="text-warning text-shadow">
                                Not registered? Register
                                <a href="register.html" class="fw-bold text-decoration-none text-warning text-shadow">Now</a>
                            </p>
                        </div>
                        <div class="w-100 text-end py-3">
                            <input type="reset" 
                                class="btn btn-outline-warning rounded-pill me-1" 
                                value="Clear"
                                tabindex="4"/>
                            <input type="submit" 
                                class="btn btn-outline-warning rounded-pill" 
                                name="login"
                                value="Login"
                                tabindex="3"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>