<div class="table-responsive">
    <table class="table" id="logs-table">
        <thead>
            <tr>
                <th>Userid</th>
        <th>Log</th>
        <th>Logdetails</th>
        <th>Logtype</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($logs as $logs)
            <tr>
                <td>{{ $logs->userid }}</td>
            <td>{{ $logs->log }}</td>
            <td>{{ $logs->logdetails }}</td>
            <td>{{ $logs->logtype }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['logs.destroy', $logs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('logs.show', [$logs->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('logs.edit', [$logs->id]) }}" class='btn btn-default btn-xs'>
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
