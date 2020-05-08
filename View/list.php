<h2>Customers List</h2>
<button class="btn btn-success" onclick="location.href='./index.php?page=add'">Add customer</button>
<table class="table my-3">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $key => $customer): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $customer->name ?></td>
            <td><?php echo $customer->email ?></td>
            <td><?php echo $customer->address ?></td>
            <td>
                <button class="btn btn-warning btn-sm"
                        onclick=location.href='./index.php?page=delete&id=<?php echo $customer->id; ?>'>Delete
                </button>
                <button class="btn btn-info btn-sm"
                        onclick=location.href='./index.php?page=edit&id=<?php echo $customer->id; ?>'>Update
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
