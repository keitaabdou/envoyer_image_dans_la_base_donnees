<?php
include_once("config/db.php");

//vérification des valeurs publier
    if(isset($_POST['valider'])){

        $imgtitle=$_POST['imagetitle'];
        $imgfile=$_FILES["image"]["name"];

        //récupère l'extension d'image
        $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

        //extensions autorisées
        $allowed_extensions = array(".jpg",".jpeg",".png",".gif");

        //Validation des extensions autorisées La fonction .in_array () recherche dans un tableau une valeur spécifique.
        if(!in_array($extension,$allowed_extensions)){

            echo "<script>alert('Format invalide. Seul le format jpg / jpeg / png / gif est autorisé');</script>";
        }
        else
        {
        // renommer le fichier image
        $imgnewfile=md5($imgfile).$extension;

        //Code pour déplacer l'image dans le répertoire
        move_uploaded_file($_FILES["image"]["tmp_name"],"uploadeddata/".$imgnewfile);

        // Requête pour insérer des données dans la base de données
        $query=mysqli_query($con,"insert into table_image(ImagesTitle,Image) values('$imgtitle','$imgnewfile')");

        if($query){
            echo "<script>alert('Image insérée avec succès');</script>";
        }
        else {
            echo "<script>alert('Image non insérée');</script>";
        }
    }
}
?>
