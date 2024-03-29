<?php
require "navbar.php";
include '../controler/userControler.php';
$controler = new userControler();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $mot_pass = $_POST['motpass'];
    $controler->login($email,$mot_pass);
}
?>


<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <form method="post">
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                                    <label class="form-label" for="typeEmailX" >Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="motpass" />
                                    <label class="form-label" for="typePasswordX" >Password</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Login</button>
                            </form>
                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="regester.php" class="text-white-50 fw-bold">Sign Up</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>