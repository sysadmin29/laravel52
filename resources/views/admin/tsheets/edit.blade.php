@extends('layouts.admin.admin',['logo'=>'','page_header' => ''])

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header" style=background-color:powderblue>

                </div>
                <div class="box-body" style=background-color:ghostwhite>
                    {!! Form::model($tsheet,['method'=>'PATCH','url' => '/tsheets/'.$tsheet->id]) !!}
                    <div class = "col-md-offset-1">
                        <font size = "16"  face = "microsoft sans serif"> <h1 class = "fa fa-edit">&nbsp<tt><b>Modify Tsheet</b></tt></h1></font>
                    </div>
                    <hr style="height:2px; border:none; color:#000; background-color:#282B2E;">

                    @include('admin.tsheets.form',['buttonlabel'=>'Update Tsheet'])
                </div>
                <div class="box-footer" style=background-color:powderblue>

                </div>
            </div>
        </div>
    </div>





@endsection
