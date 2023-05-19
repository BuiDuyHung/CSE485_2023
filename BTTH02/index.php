<?php
    require_once('model/user.php');
    $userModel = new user();
    $user = $userModel->getAll();
    $username = '';
    $password = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        foreach($user as $user){
            if($user['email'] == $username and $user['password'] == $password){
                if($user['id_level'] == '1')
                    header("Location:view/admin.php");
                else
                    header("Location:view/clients.php");
                break;
            }else{
                header("Location:index.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng nhập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4 text-info">HỆ THỐNG ĐIỂM DANH MÔN HỌC ONLINE</h1>


        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <h2 class="text-center mb-4">Đăng nhập</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên đăng nhập:</label>
                        <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>