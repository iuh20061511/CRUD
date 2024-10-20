<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cập nhật thông tin</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Cập nhật</h2>


        <form action="" method="post" class="container mt-4">
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập của bạn" value="<?php echo set_value('username', $user['username']); ?>">
                <div class="text-danger"><?php echo form_error('username'); ?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn" value="<?php echo set_value('email', $user['email']); ?>">
                <div class="text-danger"><?php echo form_error('email'); ?></div>
            </div>

            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>