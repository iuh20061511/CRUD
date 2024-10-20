<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Danh sách bảng bằng Bootstrap 5</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Danh sách người dùng</h2>
        <a href="<?php echo base_url() . 'users/add' ?>" class="btn btn-primary m-3">Thêm mới</a>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Username</th>
                    <th>email</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><a href="" class="btn btn-success">EDIT</a>
                            <a href="" class="btn btn-success">XÓA</a>
                            <a href="" class="btn btn-success">VIEW</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>