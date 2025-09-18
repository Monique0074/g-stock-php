<?php include("../include/menu.php"); ?>


<div class="container mt-5 py-5 pb-5">
    <div class="col-lg-12 col-sm-12">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="fw-bold text-uppercase text-primary mb-0">Ajouter une catégorie</h4>
            <a href="categories.php" class="btn btn-secondary border-0 rounded-0 ">
                <i class="fa-solid fa-backward mx-1"></i>
                Annuler
            </a>
        </div>

        <div class="col-lg-12 col-sm-12">
            <div class="card shadow mt-3 border-0 rounded-0 p-3">
                <form class="needs-validation" novalidate action="traiter_categorie.php" method="post">
                    <div class="row">

                        <div class="col-lg-6 col-sm-12 mb-3">
                            <label for="">Nom de la catégorie <span class="text-danger">*</span></label>
                            <input type="text" name="nom" class="form-control" required>
                            <div class="invalid-feedback">
                                Ce champ est obligatoire!
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>

                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" name="ajouter" class="btn btn-primary border-0 mt-3 rounded-0">Enregistrer</button>
                        <button type="reset" class="btn btn-danger border-0 mt-3 rounded-0">Annuler</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/main.js"></script>

