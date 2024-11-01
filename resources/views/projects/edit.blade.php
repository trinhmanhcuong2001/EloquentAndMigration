@extends('layout')
@section('content')
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <legend>Update Project</legend>
        <div class="mb-3">
            <label for="nameTextInput" class="form-label">Tên dự án</label>
            <input type="text" id="nameTextInput" class="form-control" placeholder="Enter name" name="name"
                value="{{ $project->name }}">
        </div>
        <div class="mb-3">
            <label for="descriptionTextInput" class="form-label">Mô tả</label>
            <input type="text" id="descriptionTextInput" class="form-control" placeholder="Enter description"
                name="description" value="{{ $project->description }}">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
