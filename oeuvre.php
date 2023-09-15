<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        <?php 
            include('oeuvres.php');
            $id = $_GET['id'];

            // Renvoyer vers la paoge d'accueil si l'id saisi dans l'url n'existe pas
            if (!in_array($id, array_column($artArray, "id"))) {
                header("Location: index.php");
            }  
        ?>

         <!-- Afficher les oeuvres-->

        <article id="detail-oeuvre">
            <?php foreach($artArray as $art) : 
                 if(in_array($id, $art)) : ?>
                    <div id="img-oeuvre">
                        <img src="<?php echo $art['img']; ?>" alt="<?php echo $art['title']; ?>">
                     </div>
                     <div id="contenu-oeuvre">
                        <h1><?php echo $art['title']; ?></h1>
                        <p class="description">
                            <?php echo $art['creator']; ?>
                        </p>
                        <p class="description-complete">
                            <?php echo $art['description']; ?>
                        </p>
                     </div>
                <?php endif;
               endforeach; ?>
        </article>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>