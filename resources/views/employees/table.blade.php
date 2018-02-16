<table class="table table-responsive" id="employees-table">
    <thead>
        <tr>
            <th>Firstname</th>
        <th>Lastname</th>
        <th>Dateofbirth</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Ktpnumber</th>
        <th>Bankname</th>
        <th>Accountnumber</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{!! $employee->firstname !!}</td>
            <td>{!! $employee->lastname !!}</td>
            <td>{!! $employee->dateofbirth !!}</td>
            <td>{!! $employee->phone !!}</td>
            <td>{!! $employee->email !!}</td>
            <td>{!! $employee->ktpnumber !!}</td>
            <td>{!! $employee->bankname !!}</td>
            <td>{!! $employee->accountnumber !!}</td>
            <td>
                {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('employees.show', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('employees.edit', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>