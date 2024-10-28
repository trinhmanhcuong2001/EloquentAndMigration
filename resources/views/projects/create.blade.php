<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên dự án">
        <input type="text" name="description" placeholder="Mô tả dự án">
        <button type="submit">Tạo dự án</button>
    </form>
</body>

</html>
