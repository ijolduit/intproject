@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Employee
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'employees.store', 'files' => 'true']) !!}

                        @include('employees.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        // alert('test');
        var locations = {
            'jakarta': ['Jakarta Barat', 'Jakarta Pusat', 'Jakarta Timur'],
            'jateng': ['Pekalongan', 'Tegal', 'Brebes'],
            
        }
        
        var $locations = $('#city');
        $('#province').change(function () {
            var province = $(this).val(), lcns = locations[province] || [];
            
            var html = $.map(lcns, function(lcn){
                return '<option value="' + lcn + '">' + lcn + '</option>'
            }).join('');
            $locations.html(html)
        });
    </script>
@endsection
