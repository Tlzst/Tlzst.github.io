<?php
require 'classes/personne.class.php';
require 'classes/liste.class.php';

$liste = new Liste();

if (!empty($_POST["prenom"])) {
    $liste->add(new Personne($_POST["prenom"]));
}

?>



<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="align-content: start">

    <h1>Liste à Tirage</h1>
    <div class=container>
        <div class="row">
            <div class="col">

                <table class="table table-success table-striped">
                    <tr>
                        <th>Prénoms</th>
                        <th>Supprimer</th>
                    </tr>

                    <?php

                    foreach ($liste as &$p) {
                        echo "<tr><td>" . $p->getName() . "</td>" .
                            "<td><a href=delete?prenom=" . $p . "><img src=https://thumbs.dreamstime.com/z/illustration-de-vecteur-d-ic%C3%B4ne-poubelle-d%C3%A9chets-sur-le-fond-rouge-131456699.jpg class=rounded style=\"width :18px;height=18px\"></a></td></tr>";
                    }

                    $result->closeCursor();
                    $db = null;
                    ?>

                </table>
            </div>
            <div class="col">
                <form action=index methode=post>
                    <fieldset>
                        <div class=" col-auto">
                            <label class="form-label" for="prenom">Entrez un nouveau prénom :</label>
                            <input type=text class="form-control" id="formGroupExampleInput" placeholder="Prenom de BG" name=prenom><br>
                            <button type="submit" class="btn btn-primary">Entrer</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col">
            <a class="btn btn-primary" href="deleteAll" role="button">Reset</a>

            <a class="btn btn-primary" href="tirage" role="button">Tirage</a>
        </div>
    </div>
</body>

</html>