<?php
?>
<h1>You sure to delete this customer?</h1>
<h3><?php echo $customer->name; ?></h3>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>">
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger">
        <input type="button" class="btn-default btn" onclick=window.history.back() value="Cancel">
    </div>
</form>
