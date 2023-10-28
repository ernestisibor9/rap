<?php

namespace App\Http\Controllers;

use App\Models\Minutes;
use App\Models\Search;
use Illuminate\Http\Request;

class UserSearchController extends Controller
{
     // Search Directory Page
    public function SearchDirectory(){
        $search_directory = Minutes::latest()->get();
        return view('frontend.search_directory', compact('search_directory'));
    }
    // Search Item
    public function SearchDirectoryItem(Request $request){
        $request->validate(['search' => 'required']);
        $item = $request->search;

        $searchData = Minutes::where('content', 'like' , '%' .$item. '%')->orWhere('title', 'like' , '%' .$item. '%')->get();

        return view('frontend.search_view',compact('searchData'));
    }
    // View Doc
    public function ViewPdfDoc($id){
        $docs = Minutes::findOrFail($id);
        return view('frontend.search_view_pdf', compact('docs'));
    }
    // Full Content
     public function FullContentDoc($id){
        $contentData = Minutes::findOrFail($id);
        return view('frontend.search_full_content', compact('contentData'));
    }
}

    