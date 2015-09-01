@extends('layout.admin')

@section('body')
    <h1>Edit Research Group</h1>
    <hr>

    {!! Form::model($researchGroup, ['method' => 'put', 'url' => "admin/research_group/{$researchGroup->id}", 'class' => 'form-horizontal']) !!}

    @include('admin.research_group._form')

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Update Research Group', ['class' => 'btn btn-success']) !!}
            <a href="{{ url('/admin/research_group') }}" class="btn btn-warning btn-margin-left">Cancel</a>
        </div>
    </div>

    {!! Form::close() !!}
@endsection