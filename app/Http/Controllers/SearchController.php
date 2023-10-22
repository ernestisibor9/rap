<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Search directory route
    public function SearchDirectory(){
        return view('admin.admin_search_directory');
    }
    // Add search directory
    public function SearchDirectoryStore(Request $request){
        $request->validate([
        'pdf_file' => 'required|mimes:pdf|max:2048', // PDF files, maximum 2MB
        'date_upload' => 'required',
        'title' => 'required',
        'content' => 'required',
        ]);
    
        $pdfPath = $request->file('pdf_file');
        $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
        $pdfPath->move(public_path('upload/pdf_doc'), $filename);
        // You can store the $pdfPath in your database if needed
        // $dateOfUpload = date('Y-m-d', strtotime($request->date_upload));
        
        Search::insert([
            'date_upload' => $request->date_upload,
            'pdf_file' => $filename,
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Search directory uploaded successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('search.manage')->with($notification);
    }
    // Manage Search
    public function SearchManage(){
        $search_directory = Search::latest()->get();
        return view('admin.admin_search_view', compact('search_directory'));
    }
    // All content
    public function AllContent($id){
        $contentData = Search::findOrFail($id);
        return view('admin.all_content3', compact('contentData'));
    }
    //
    public function SearchDirectoryItem(Request $request){
        $request->validate(['search' => 'required']);
        $item = $request->search;

        $searchData = Search::where('content', 'like' , '%' .$item. '%')->orWhere('title', 'like' , '%' .$item. '%')->get();

        return view('admin.admin_search_view2',compact('searchData'));
    }
    // Edit
    // Edit Praise Night
    public function EditSearch($id){
        $searchView = Search::latest()->get();
        $searchEdit = Search::findOrFail($id);
        return view('admin.admin_search_edit', compact('searchView', 'searchEdit'));
    }
    // Update
    public function UpdateSearch(Request $request){
        $SearchUpdate = $request->id;
        
        if($request->file('pdf_file')){
            $pdfPath = $request->file('pdf_file');
            $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
            $pdfPath->move(public_path('upload/pdf_doc'), $filename);

            Search::findOrFail($SearchUpdate)->update([
                'date_upload'=> $request->date_upload,
                'title'=> $request->title,
                'pdf_file' => $filename,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Search directory successfully updated',
            'alert-type'=>'success'
            );
            return redirect()->route('search.manage')->with($notification);
        }
        else{
            Search::findOrFail($SearchUpdate)->update([
                'date_upload'=> $request->date_upload,
                'title'=> $request->title,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Search directory successfully updated ',
            'alert-type'=>'success'
            );
            return redirect()->route('search.manage')->with($notification);
        }
    }
    // Delete
    public function DeleteSearch($id){

        Search::findOrFail($id)->delete();
        $notification = array(
            'message'=> 'Search deleted successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    // View PDF
    public function ViewDoc4($id){
        $docs = Search::findOrFail($id);
        return view('admin.admin_search_view_pdf', compact('docs'));
    }

}