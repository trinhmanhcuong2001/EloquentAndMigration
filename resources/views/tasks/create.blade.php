<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Nhập tiêu đề công việc">
        <input type="text" name="description" placeholder="Nhập mô tả công việc">
        <select name="completed">
            <option value="Chưa hoàn thành">Chưa hoàn thành</option>
            <option value="Hoàn thành">Hoàn thành</option>
        </select>
        <select name="project_id">
            @foreach ($projects as $project)
                <option value="{{ $project->id }}">{{ $project->name }}</option>
            @endforeach
        </select>
        <button type="submit">Tạo công việc</button>
    </form>
</body>

</html>
