<?php

$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', '');

$sql  = "SELECT * FROM personne ORDER BY RAND () LIMIT 1";

$result = $db->query($sql);

$gagnant = $result->fetch();
?>

<!DOCTYPE html>
<html>

<body>
    <center>
        <div class=container>
            <div class="row">
                <div class="col">
                    <img src="https://acegif.com/wp-content/gif/confetti-46.gif" />
                </div>
                <div class="col">
                    <h1>
                        Le gagnant est : <?php echo $gagnant['prenom']; ?> !!!
                    </h1>
                </div>
                <div class="col">
                    <img src="https://acegif.com/wp-content/gif/confetti-46.gif" />
                </div>
            </div>
        </div>
    </center>
</body>

</html>