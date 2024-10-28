<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('project.create') }}">Tạo dự án</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <td>Tên dự án</td>
            <td>Mô tả</td>
            <td>Chức năng</td>
        </tr>
        @if (count($projects) > 0)
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <a href="{{ route('project.update', $project->id) }}">Cập nhật</a>
                        <form action="{{ route('project.destroy', $project->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Xóa">
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">Không có dự án nào!</td>
            </tr>
        @endif
    </table>
</body>

</html>
