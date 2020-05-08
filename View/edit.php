<h2>Update customer</h2>
<form action="./index.php?page=edit" method="post">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $customer->name; ?>" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $customer->email; ?>"
               required>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="<?php echo $customer->address; ?>"
               required>
    </div>

    <input type="submit" class="btn btn-primary" value="Update">
    <input type="button" class="btn btn-secondary" value="Cancel" onclick="location.href='./'">
</form>