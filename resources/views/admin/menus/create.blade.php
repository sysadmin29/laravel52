@extends('layouts.admin.admin',['page_header' => '', 'logo' => ''])

@section('main-content')
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        @include('errors.error')
                    </div>
                    <div class="box-body">
                        {!! Form::open(['url' => '/menus/create','enctype'=>'multipart/form-data']) !!}
                        <div class = "col-md-offset-1">
                            <font size = "16" face = "microsoft sans serif"> <h1 class = "fa fa-plus-circle">&nbsp<tt>Add Menu</tt></h1></font>
                        </div>
                        <hr>
                        @include('admin.menus.form',['buttonlabel' => 'Add Menu'])
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
@endsection
