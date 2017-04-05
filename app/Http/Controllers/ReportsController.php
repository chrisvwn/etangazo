<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

use App\Entity;
use App\Report;
use App\Photo;
//use App\Comment;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Report::all();

        return view('reports.index', compact('reports'));
    }

    public function indexTest()
    {
        $reportTypes = DB::select('SELECT * FROM report_types');
        
        $reports = Report::all();

        return view('index', compact('reportTypes', 'reports'));
    }

    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }

    public function showAddReportForm()
    {
        $countries = DB::table('report_countries')->pluck('name','id');

        $reportTypes = DB::table('report_types')->pluck('description', 'id');

        return view('reports.add', compact('countries', 'reportTypes'));
    }

    public function add(Request $request)
    {
        $report = new Report($request->all());
        
        $report->userid = Auth::user();

        $report->save();

        return back();
    }

    public function edit(Report $report)
    {
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $report->update($request->all());

        return back();
    }

    public function showAddEntityForm(Report $report)
    {
        return view('entities.showadd', compact('report'));
    }

    public function showAddReportToEntityForm(Entity $entity)
    {
      return view('reports.addtoentity', compact('entity'));
    }

    public function addReportToEntity(Request $request, Entity $entity)
    {
      $report = new Report($request->all()); 

      $report->save();

      $report->addEntity($entity);

      return back();
    }

    public function savePhoto(Request $request, Report $report)
    {
      // Validation //
      $validation = Validator::make($request->all(), [
         'userfile'     => 'required|image|mimes:jpeg,png|min:1|max:250'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      // upload the image //
      $file = $request->file('userfile');
      $destination_path = 'images/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);

      $report->addPhoto(new Photo(['filename'=>$filename]));

      return back();
    }

//    public function saveComment(Request $request, Report $report)
//    {
//      $report->addComment(new Comment($request->all()));
//
//      return back();
//    }
}
