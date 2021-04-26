<form method="post">
    Fornavn<br/>
    <input type="text" name="firstName" value="<?php echo $_POST["firstName"] ?>"/>
    <br/>
    Etternavn<br/>
    <input type="text" name="lastName"/>
    <br/>
    <input type="submit"/>
</form>

Hei, <?php echo $_POST["firstName"] ?>!