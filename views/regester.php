<?php

require "navbar.php";
include '../controler/userControler.php';
$controler=new userControler();
if (isset($POST['submit'])){
    $nom=$POST['nom'];
    $prenom=$POST['prenom'];
    $email=$POST['email'];
    $mot_pass=$POST['motpass'];
    
    $controler->regester($nom,$prenom,$email,$mot_pass);
}



?>


<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">REGERSTER</h2>
                            <form method="post">
                                <div class="form-outline form-white mb-4">
                                    <input type="text"  class="form-control form-control-lg" name="nom" />
                                    <label class="form-label">Nom:</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input  class="form-control form-control-lg" name="prenom" />
                                    <label class="form-label" for="typeEmailX" >Prenom</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="motpass" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit"
                                    name="submit">Regester</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>