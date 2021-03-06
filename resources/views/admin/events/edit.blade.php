@extends('layouts.admin.admin',['page_header' => '', 'logo'=>''])

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header" style=background-color:powderblue>
                    @include('errors.error')
                </div>
                <div class="box-body" style=background-color:ghostwhite>
                    {!! Form::model($day,['method'=>'PATCH','url' => '/days/'.$day->id,'enctype'=>'multipart/form-data']) !!}
                    <div class = "col-md-offset-1">
                        <font size = "16" face = "microsoft sans serif"> <h1 class = "fa fa-edit">&nbsp<tt>Modify Day</tt></h1></font>
                    </div>
                    <hr style="height:2px; border:none; color:#000; background-color:#282B2E;">
                    @include('admin.days.form',['buttonlabel'=>'Update Day'])
                </div>
                <div class="box-footer" style=background-color:powderblue>

                </div>
            </div>
        </div>
    </div>





@endsection
