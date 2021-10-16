<div class="table-responsive">
    <table class="table" id="students-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Citizenship</th>
        <th>Religion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $students)
            <tr>
                <td>{{ $students->Firstname }}</td>
            <td>{{ $students->Middlename }}</td>
            <td>{{ $students->Lastname }}</td>
            <td>{{ $students->Birthdate }}</td>
            <td>{{ $students->Gender }}</td>
            <td>{{ $students->Address }}</td>
            <td>{{ $students->Citizenship }}</td>
            <td>{{ $students->Religion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['students.destroy', $students->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('students.show', [$students->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('students.edit', [$students->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
