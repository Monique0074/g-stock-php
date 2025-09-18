<?php include("../include/menu.php"); ?>



<div class="container mt-5 py-5 pb-5">
    <div class="col-lg-12 col-sm-12">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="fw-bold text-uppercase text-primary mb-0">Ajouter un fournisseur</h4>
            <a href="client.php" class="btn btn-secondary border-0 rounded-0 ">
            <i class="fa-solid fa-backward mx-1"></i>
                Annuler
            </a>
        </div>


    



    <div class="col-lg-12 col-sm-12">
        <div class="card shadow mt-3 border-0 rounded-0 p-3">
            <form class="needs-validation" novalidate action="" method="post">
                <div class="row">

                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Nom<span class="text-secondary">*</span></label>
                       <input type="text" class="form-control" required>
                       <div class="invalid-feedback">
                            Ce champ est requis!
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Prenom <span class="text-secondary">*</span></label>
                       <input type="text" class="form-control" required>
                       <div class="invalid-feedback">
                            Ce champ est requis!
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Email <span class="text-danger">*</span></label>
                       <input type="email" class="form-control" required>
                       <div class="invalid-feedback">
                            Ce champ est requis!
                        </div>
                    </div>




                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Telephone <span class="text-danger">*</span></label>
                       <input type="tel" class="form-control" required>
                       <div class="invalid-feedback">
                            Ce champ est requis!
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Site web <span class="text-danger">*</span></label>
                       <input type="url" class="form-control">
                       <div class="invalid-feedback">
                
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Adresse <span class="text-danger">*</span></label>
                       <input type="text" class="form-control" required>
                       <div class="invalid-feedback">
                            ce champ est requis!
                        </div>
                    </div>



                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Numero de CNI<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" required>
                       <div class="invalid-feedback">
                            ce champ est requis!
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Types de produits<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" required>
                       <div class="invalid-feedback">
                            ce champ est requis!
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Numero de registre<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" required>
                       <div class="invalid-feedback">
                            ce champ est requis!
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 mb-3">
                       <label for="">Mode de paiement<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" required>
                       <div class="invalid-feedback">
                            ce champ est requis!
                        </div>
                    </div>







                </div>

                <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary border-0 mt-3 rounded-0">Enregistrer</button>
                <button type="reset" class="btn btn-danger border-0 mt-3 rounded-0">Annuler</button>

                </div>

            </form>
        </div>

    </div>

</div>


<script src="../assets/js/main.js"></script>