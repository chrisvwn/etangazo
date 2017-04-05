<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Entity;
use App\Report;
use App\EntityPhoto;
use App\Photo;
//use App\Comment;

class EntitiesController extends Controller
{
    public function index()
    {
       $entities = Entity::all();

       return view('entities.index', compact('entities')); 
    }

    public function show(Entity $entity)
    {
        return view('entities.show', compact('entity'));
    }

    public function showEditForm(Entity $entity)
    {
        return view('entities.edit', compact('entity'));
    }

    public function edit(Entity $entity, Request $request)
    {
        $entity->update($request->all());

        return back();
    }

    public function delete(Entity $entity)
    {
    }

    public function showAddForm(Report $report)
    {
        return view('entities.add', compact('report'));
    }

    public function add(Request $request, Report $report)
    {
        $report->addEntity(new Entity($request->all()));
     
        return back();
    }

    public function showAddReportForm(Entity $entity)
    {
        $photo = new Photo();

        return view('entities.addreport', compact('entity'));
    }

    public function addReport(Request $request, Entity $entity)
    {
        $report = new Report($request->all());

        $report->save();

        return back();
    }

    public function savePhoto(Request $request, Entity $entity)
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

        $entity->addPhoto(new Photo(['filename'=>$filename]));
    }

    public function showPhotos(Entity $entity)
    {
        return view('entityphotos.show', compact('entity'));
    }

//    public function saveComment(Request $request, Entity $entity)
//    {
//      $entity->addComment(new Comment($request->all()));
//
//      return back();
//    }

}
