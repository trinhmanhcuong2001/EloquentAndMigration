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
        @method('PUT')
        <input type="text" name="name" placeholder="Nhập tên dự án" value="{{ $project->name }}">
        <input type="text" name="description" placeholder="Nhập mô tả dự án" value="{{ $project->description }}">
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>
