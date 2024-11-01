@extends('layout')
@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1>List Project</h1>
        <div>
            <a href="{{ route('project.create') }}" class="btn btn-success">Tạo dự án</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <td>Tên dự án</td>
                <td>Mô tả</td>
                <td>Chức năng</td>
            </tr>
        </thead>
        <tbody>
            @if (count($projects) > 0)
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary me-2" href="{{ route('project.update', $project->id) }}">Cập nhật</a>
                            <form action="{{ route('project.destroy', $project->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Xóa">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Không có dự án nào!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
