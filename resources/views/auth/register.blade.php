<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5 mx-auto">
        <h1 class="text-center">Регистрация на сайте</h1>
        <div class="col-sm-6 mx-auto">
            <form action="/register" method="post">
                @csrf
                <div class="mb-3"><input type="text" class="form-control" name="name" placeholder="Имя">
                </div>
                <div class="mb-3"><input type="text" class="form-control" name="email"  placeholder="Email">
                </div>
                <div class="mb-3"><input type="password" class="form-control" name="password"  placeholder="Пароль">
                </div>
                <div class="mb-3"><input type="password" class="form-control" name="password_confirmation"  placeholder="Подтвердите пароль">
                </div>
                <div class="mb-3"><input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
