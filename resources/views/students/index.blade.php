<h1>Students List</h1>

<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

<ul class="list-group">
    @foreach ($students as $student)
        <li class="list-group-item">
            {{ $student->name }} - {{ $student->email }} - {{ $student->phone }}
        </li>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    @endforeach
</ul>
