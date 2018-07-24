<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Download;
use App\User;
use App\Http\Requests\DownloadRequest;
use App\Http\Requests\NewspaperReportRequest;

class NewspaperReportController extends Controller
{
    public $view_path = 'admin.newspaper_reports';

    public $url_path = '/newspaper_reports';

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $downloads = Download::wherein('status',['Closed'])->get();

        $downloads->load('log_sheet');
        return view($this->view_path.'.index',compact('downloads'));
    }

    public function create(){
        return view($this->view_path.'.create');
    }

    public function store(DownloadRequest $request){
        Download::create($request->all());
        return redirect($this->url_path);
    }

    public function edit(Download $download){
        //$download->lockForUpdate()->get(); //database level

        return view($this->view_path.'.edit',compact('download'));

    }

    public function update(Download $download,DownloadRequest $request){
        $download->update($request->all());
        return redirect($this->url_path);
    }

    public function destroy(Download $download){
        $download->delete();
        return redirect($this->url_path);
    }

    public function not_updated_reports(Request $request){
        $downloads = Download::whereIn('status',$request->filter_list)->get();
        return view('admin.newspaper_reports.not_updated_reports',compact('downloads'));
    }

    public function delivered_reports(Request $request){

        $downloads = Download::whereHas('output',function($q) use ($request){
            $q->whereBetween('output_date',[$request->date_from,$request->date_to]);
        })->get();

        return view('admin.newspaper_reports.delivered_reports',compact('downloads'));
    }


}
