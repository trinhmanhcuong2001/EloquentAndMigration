<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Danh sách công việc</h1>
        <div class="d-flex justify-content-end">
            <form class="row g-3 mt-4" action="{{ route('index') }}">
                <div class="col-auto">
                    <h3>Tìm kiếm</h3>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="staticEmail2" placeholder="Nhập tên công việc"
                        name="keywords">
                </div>
                <div class="col-auto">
                    <select name="completed" class="form-control">
                        <option value="">Chọn</option>
                        <option value="Chưa hoàn thành">Chưa hoàn thành</option>
                        <option value="Hoàn thành">Hoàn thành</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Tìm kiếm</button>
                </div>
            </form>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @if (count($tasks) > 0)
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->completed }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>Không có kết quả nào tương ứng!</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
