<?php
    include_once ("config/db.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Comment télécharger et valider une image en PHP</title>

        <script>
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
	    </script>
    </head>
    <body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-body">
                                    <div class="alert alert-primary text-uppercase text-center" role="alert">
                                        Comment télécharger une image en PHP
                                    </div>
                                    <form action="traitement_image.php" name="uploadimage" enctype="multipart/form-data" method="post">
                                        <div class="col-md-12 text-uppercase">
                                            <label for="nom">Titre de l'image (<span style="color: red">*</span>)</label>
                                            <input type="text" name="imagetitle" autocomplete="off" class="form-control"  required />
                                        </div>
                                        <div class="col-md-12 text-uppercase mt-2">
                                            <label for="nom">Télécharger l'image (<span style="color: red">*</span>)</label>
                                            <input type="file" name="image"  required  />                                        </div>
                                        </div>
                                        <div class="text-center mb-2">
                                            <button type="submit" name="valider" class="btn btn-outline-primary px-5">Valider</button>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
