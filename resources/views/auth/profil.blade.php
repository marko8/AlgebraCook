@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profil</div>
                <div class="panel-body">
                <section>
                    <h3>Uredi zaporku:</h3>
                    {!! Form::open() !!}
                        <div class="form-group">
                            {{ Form::label('password', 'Zaporka: ') }}
                            {{ Form::password('password', '', ['class' => 'form-control']) }}
                        </div>
                        {!! Form::submit('Uredi zaporku', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection