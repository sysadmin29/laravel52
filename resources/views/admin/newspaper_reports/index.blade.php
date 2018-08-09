@extends('layouts.admin.admin',['page_header' => 'Delivered'])

@section('main-content')
    <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-list"></i> Delivery Records</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="results_table" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>State</th>
                        <th>Publication Name</th>
                        <th>Publication Date</th>
                        <th>Status</th>
                        <th>Processor</th>
                        <th>Sale</th>
                        <th>Rent</th>
                        <th>Total</th>
                        <th>Seq. From</th>
                        <th>Seq. To</th>
                        <th>Date Delivered</th>
                        <th>Delivery Folder</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($downloads as $count => $delivered)
                        @foreach($delivered->output as $row_count => $row)
                            <tr>
                                <td>{{ $count++ + 1 }}</td>
                                <td>{{ $row->state }}</td>
                                <td>{{ $delivered->publication->publication_name }}</td>
                                <td>{{ $delivered->publication_date }}</td>
                                <td>{{ $delivered->status }}</td>
                                <td>{{ $row->user->operator_no }}</td>
                                <td>{{ $row->sale_records }}</td>
                                <td>{{ $row->rent_records }}</td>
                                <td>{{ $row->sale_records + $row->rent_records }}</td>
                                <td>{{ $row->sequence_from }}</td>
                                <td>{{ $row->sequence_to }}</td>
                                <td>{{ $row->output_date }}</td>
                                <td>{{ $row->delivery_time }}</td>
                                <td>{{ $row->remarks }}</td>
                                <td><a href="/newspaper_reports/{{ $delivered->id }}/edit"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Modify</button></a></td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
