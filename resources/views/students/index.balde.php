<h1>Students List</h1>

<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

<ul class="list-group">
    @foreach ($students as $student)
        <li class="list-group-item">
            {{ $student->name }} - {{ $student->email }} - {{ $student->phone }}
        </li>
    @endforeach
</ul>
