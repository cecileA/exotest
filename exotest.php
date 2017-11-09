<html>
    <h1>Hello world !</h1>
    <p>Entrer un mot et valider pour faire apparaitre le mot inversé</p>
    <form method="POST">
        <input type="text" name="chaine" value="<?php echo $chaine; ?>" />
        <input type="submit" name="valider" value="valider" />
    </form>
</html>


<?php
    if (isset($_POST['valider']))
    {
        echo strrev($_POST['chaine']);
    }