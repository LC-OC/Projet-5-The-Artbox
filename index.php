<!doctype html>
<html lang="fr">
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
        <?php include('oeuvres.php'); ?>
        <div id="liste-oeuvres">
            <?php foreach ($artArray as $art) : ?> 
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $art["id"]; ?>">
                        <img src="<?php echo $art['img']; ?>" alt="<?php echo $art['title']; ?>">
                        <h2>
                            <?php echo $art['title']; ?>
                        </h2>
                        <p class="description">
                            <?php echo $art['creator']; ?>
                        </p>
                    </a>
                 </article>
            <?php endforeach ?>    
            
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>