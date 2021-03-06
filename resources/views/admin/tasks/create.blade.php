@extends('layouts.admin.admin',['logo'=>'','page_header' => ''])

@section('main-content')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header" style=background-color:powderblue>

                    </div>
                    <div class="box-body" style=background-color:ghostwhite>
                        {!! Form::open(['url' => '/tasks/create']) !!}
                        <div class = "col-md-offset-1">
                            <font size = "16" face = "microsoft sans serif"> <h1 class = "fa fa-plus-circle">&nbsp<tt>Add New Task</tt></h1></font>
                        </div>
                        <hr style="height:2px; border:none; color:#000; background-color:#282B2E;">
                        <div class = "container" >
                            <tt>

                                <font face = "microsoft sans serif">

                        <div class="row">
                            <div class="form-group">
                                <div class = "col-md-8 col-xm-1 col-md-offset-2">
                                    {!! Form::label('user_id', 'Employee') !!}
                                    {!! Form::select('user_id',$user_lists,null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                                </font>
                            </tt>
                        </div>


                        @include('admin.tasks.form',['buttonlabel' => 'Add Task'])
                    </div>
                    <div class="box-footer" style=background-color:powderblue>

                    </div>
                </div>
            </div>
        </div>
@endsection
