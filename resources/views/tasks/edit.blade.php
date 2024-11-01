@extends('layout')
@section('content')
    <form action="{{ route('task.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <legend>Update Task</legend>
        <div class="mb-3">
            <label for="titleTextInput" class="form-label">Tiêu đề</label>
            <input type="text" id="titleTextInput" class="form-control" placeholder="Enter title" name="title"
                value="{{ $task->title }}">
        </div>
        <div class="mb-3">
            <label for="descriptionTextInput" class="form-label">Mô tả</label>
            <input type="text" id="descriptionTextInput" class="form-control" placeholder="Enter description"
                name="description" value="{{ $task->description }}">
        </div>
        <div class="mb-3">
            <label for="completedSelect" class="form-label">Trạng thái</label>
            <select id="completedSelect" class="form-select" name="completed">
                <option value="Chưa hoàn thành" {{ $task->completed == 'Chưa hoàn thành' ? 'selected' : '' }}>Chưa hoàn
                    thành</option>
                <option value="Hoàn thành" {{ $task->completed == 'Hoàn thành' ? 'selected' : '' }}>Hoàn thành</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="projectSelect" class="form-label">Dự án</label>
            <select id="projectSelect" class="form-select" name="project_id">
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" {{ $project->id == $task->project->id ? 'selected' : '' }}>
                        {{ $project->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>

    </form>
@endsection
