<?php require_once "config/init.conf.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'include/header.inc.php'; ?>
    <body>
        <!-- Responsive navbar-->
        <?php include 'include/nav.inc.php'; ?>
        <!-- Page Content-->
        <?php
            if (isset($_POST['submit'])){
        //print_r2($_POST);
                $articles = new articles();
                $articles->hydrate($_POST);

                $articles->setDate(date('Y-m-d'));
                $publie = $articles->getPublie() === 'on' ? 1 : 0;
                $articles->setPublie($publie);
            
                $articlesManager = new articlesManager($bdd);
                $articlesManager->update($articles);

            header("Location: index.php");
         exit();
    } else {    
        $articlesManager = new articlesManager($bdd);
        $article = $articlesManager->get($_GET['id']);
    ?>
        <div class="container px-4 px-lg-5"
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
            </div>
            <center>
            <h1>Modifier votre article</h1>
            </center>

    <form action="formUpdateArticle.php" method="POST" enctype='multipart/form-data'>
            <div class="input-group mb-3">
                <input value="<?= $article->getTitre() ?>" type="text" name="titre" class="form-control" placeholder="Titre" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" name="texte" placeholder="Texte de mon article" aria-label="With textarea" rows="3"><?= $article->getTexte() ?></textarea>
            </div>
            <div class="form-check">
                <input <?php if($article->getPublie() == 1) { echo "checked"; }  else { };  ?>  class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Publier l'article ?
            </label>
            </div>
        <center>
            <div class="col-auto">
                <button name="submit" type="submit" class="btn btn-primary mb-3">Modifier</button>
            </div>
        </center>
    </form>
        <!-- Footer-->
        <?php include 'include/footer.inc.php'; ?>
    </body>
</html>
<?php
    }
    ?>