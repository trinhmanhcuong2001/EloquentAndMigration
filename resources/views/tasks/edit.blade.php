<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('task.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}">
        <input type="text" name="description" value="{{ $task->description }}">
        <select name="completed">
            <option value="Chưa hoàn thành" {{ $task->completed == 'Chưa hoàn thành' ? 'selected' : '' }}>Chưa hoàn
                thành</option>
            <option value="Hoàn thành" {{ $task->completed == 'Hoàn thành' ? 'seleted' : '' }}>Hoàn thành</option>
        </select>
        <select name="project_id">
            @foreach ($projects as $project)
                <option value="{{ $project->id }}" {{ $project->id == $task->project->id ? 'selected' : '' }}>
                    {{ $project->name }}</option>
            @endforeach
        </select>
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>
