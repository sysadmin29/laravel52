@extends('layouts.admin.admin',['page_header' => '', 'logo'=>''])

@section('main-content')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">

                    </div>
                    <div class="box-body">
                        {!! Form::open(['url' => '/workstations/create']) !!}
                        <div class = "col-md-offset-1">
                            <font size = "16" face = "microsoft sans serif"> <h1 class = "fa fa-plus-circle">&nbsp<tt>Add New Workstation</tt></h1></font>
                        </div>
                        <hr>
                        @include('admin.workstations.form',['buttonlabel' => 'Add Workstation'])
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
@endsection
