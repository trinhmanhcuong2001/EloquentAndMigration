@extends('layout')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>List Task</h1>
        <div>
            <a href="{{ route('task.create') }}" class="btn btn-success">Tạo công việc</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Dự án</th>
                <th>Tính năng</th>
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
                        <td>{{ $task->project->name }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary me-2" href="{{ route('task.update', $task->id) }}">Cập nhật</a>
                            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">Không có công việc nào nha!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
