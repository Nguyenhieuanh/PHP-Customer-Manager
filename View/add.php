<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add new customer</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label for="">Customer Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Full name">
                </div>

                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>

                <button class="btn-primary btn" type="submit">Submit</button>
                <button class="btn-secondary btn" onclick="window.location.href='index.php'; return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
