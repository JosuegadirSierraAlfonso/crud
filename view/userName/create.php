<?php
ini_set('display_errors',1);
ini_set('display_status_errors',1);
error_reporting(E_ALL);

require_once("../head/head.php");


?>

<form action="./store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="name" class="form-label">Name user</label>
        <input type="text" name="name" values="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="guardar"values="guardar">Save</button>
    <a class="btn btn-danger" href="../../index.php">Cancel</a>
</form>

<?php
require_once("../head/footer.php")

?>