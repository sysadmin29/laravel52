@extends('layouts.admin.admin',['page_header' => 'Modify Backup'])

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                </div>
                <div class="box-body">
                    {!! Form::model($backup,['method'=>'PATCH','url' => '/backups/'.$backup->id]) !!}
                    @include('admin.backups.form',['buttonlabel'=>'Update Backup'])
                </div>
                <div class="box-footer">

                </div>
            </div>
        </div>
    </div>





@endsection
