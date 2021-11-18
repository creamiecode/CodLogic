<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Models\UpdateProject;
use Illuminate\Http\Request;
use Image;

class ProjectsController extends Controller
{
    public function ShowAddProduct()
    {
      return view('addProduct');
    }

    
    public function allProjects()
    {
        $project['pro'] = projects::orderBy('id', 'DESC')->simplePaginate(6);
        return view('allProjects')->with($project);
    }
    public function editProject($id=null)
    {
        $project = projects::where('id',$id)->first();
        return view('editProject')->with(compact('project'));
    }

    public function delete($id=null)
    {
        projects::where('id',$id)->delete();

        $project['pro'] = projects::orderBy('id', 'DESC')->simplePaginate(6);
        return view('allProjects')->with($project)->with('successMsg','Project deleted successfully');

    }
    public function addProject(Request $request)
    {
        $image      = $request->file('logo');

        $filename    = $image->getClientOriginalName();


        Image::make($image)->save(public_path('/post/'.$filename));


 
 

 

        $input = [];
        $input['project_title'] = $request->title;
        $input['project_link'] = $request->link;
        $input['project_color'] = $request->color;
         $input['project_logo'] = $filename;

        $yourdat = projects::create($input);

        if ($yourdat){
            return view('addProduct')->with('successMsg','Project added successfully');
        }else{
            return view('addProduct')->with('successMsg','Project deleted successfully');
        }


    }

    public function updateProject(Request $request)
    {
        $image      = $request->file('logo');

        $filename    = $image->getClientOriginalName();

        Image::make($image)->save(public_path('/post/'.$filename));

 
 
 
        $project =  projects::find($request->id);

        $project->project_title = $request->title;
        $project->project_link = $request->link;
        $project->project_color = $request->color;
         $project->project_logo = $filename;


        $yourdat =  $project->save();

        if ($yourdat){

            $projects['pro'] = projects::orderBy('id', 'DESC')->get();
            return view('allProjects')->with($projects)->with('successMsg','Project updated successfully');

        }
    }
}
