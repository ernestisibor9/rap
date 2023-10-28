<?php

namespace App\Http\Controllers;

use App\Models\Christmas;
use App\Models\HealingStream;
use App\Models\Leader;
use App\Models\Minutes;
use App\Models\PraiseNight;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MinutesController extends Controller
{
    // Praise Night
    public function AddPraiseNight(){
        // $titleData = Title::latest()->get();
        return view('admin.admin_praise_night');
    }
    // Add Praise Night
    public function PraiseNightStore(Request $request){
        $request->validate([
        'pdf_file' => 'required|mimes:pdf|max:2048', // PDF files, maximum 2MB
        'date_upload' => 'required',
        'praise_night_type' => 'required',
        'title' => 'required',
        'content' => 'required',
        ]);
    
        $pdfPath = $request->file('pdf_file');
        $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
        $pdfPath->move(public_path('upload/pdf_doc'), $filename);
        // You can store the $pdfPath in your database if needed
        // $dateOfUpload = date('Y-m-d', strtotime($request->date_upload));
        
        Minutes::insert([
            'minutes_directory'=> 'praise night',
            'praise_night_type' => $request->praise_night_type,
            'date_upload' => $request->date_upload,
            'pdf_file' => $filename,
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Praise night uploaded successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    // Praise Night Update
    public function UpdatePraiseNight(Request $request){
        $praiseUpdate = $request->id;
        
        if($request->file('pdf_file')){
            $pdfPath = $request->file('pdf_file');
            $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
            $pdfPath->move(public_path('upload/pdf_doc'), $filename);

            Minutes::findOrFail($praiseUpdate)->update([
                'praise_night_type'=> $request->praise_night_type,
                'title' => $request->title,
                'pdf_file' => $filename,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Praise night updated successfully ',
            'alert-type'=>'success'
            );
            return redirect()->route('admin.praise.night.view')->with($notification);
        }
        else{
            Minutes::findOrFail($praiseUpdate)->update([
                'praise_night_type'=> $request->praise_night_type,
                'title' => $request->title,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Praise night updated successfully',
            'alert-type'=>'success'
            );
            return redirect()->route('admin.praise.night.view')->with($notification);
        }
    }
    // Get All Content For Praise Night
    public function AllContent($id){
        $contentData =  Minutes::findOrFail($id);
        return view('admin.all_content', compact('contentData'));
    }
    // Get All Content For Healing Stream
    public function AllHealingContent($id){
        $contentData = Minutes::findOrFail($id);
        return view('admin.all_healing_content', compact('contentData'));
    }
    // View Praise Nights
    public function PraiseNightView(){
        $praiseNightView = Minutes::where('minutes_directory', 'praise night')->latest()->get();
        // $titleData = Title::latest()->get();
        return view('admin.admin_praise_night_view', compact('praiseNightView'));
    }
    // Praise Night One
    public function PraiseNightOne(){
        $praise_night_one = Minutes::where('praise_night_type', 'praise_night_1')->latest()->get();
        return view('admin.admin_praise_night_one', compact('praise_night_one'));
    }
    // Praise Night Two
    public function PraiseNightTwo(){
        $praise_night_two = Minutes::where('praise_night_type', 'praise_night_2')->latest()->get();
        return view('admin.admin_praise_night_two', compact('praise_night_two'));
    }
    // Praise Night Three
    public function PraiseNightThree(){
        $praise_night_three = Minutes::where('praise_night_type', 'praise_night_3')->latest()->get();
        return view('admin.admin_praise_night_three', compact('praise_night_three'));
    }
    // Praise Night Four
    public function PraiseNightFour(){
        $praise_night_four = Minutes::where('praise_night_type', 'praise_night_4')->latest()->get();
        return view('admin.admin_praise_night_four', compact('praise_night_four'));
    }
    // Praise Night Five
    public function PraiseNightFive(){
        $praise_night_five = Minutes::where('praise_night_type', 'praise_night_5')->latest()->get();
        return view('admin.admin_praise_night_five', compact('praise_night_five'));
    }
    // Praise Night Six
    public function PraiseNightSix(){
        $praise_night_six = Minutes::where('praise_night_type', 'praise_night_6')->latest()->get();
        return view('admin.admin_praise_night_six', compact('praise_night_six'));
    }
    // Praise Night Seven
    public function PraiseNightSeven(){
        $praise_night_seven = Minutes::where('praise_night_type', 'praise_night_7')->latest()->get();
        return view('admin.admin_praise_night_seven', compact('praise_night_seven'));
    }
    // Praise Night Eight
    public function PraiseNightEight(){
        $praise_night_eight = Minutes::where('praise_night_type', 'praise_night_8')->latest()->get();
        return view('admin.admin_praise_night_eight', compact('praise_night_eight'));
    }
    // Praise Night Nine
    public function PraiseNightNine(){
        $praise_night_nine = Minutes::where('praise_night_type', 'praise_night_9')->latest()->get();
        return view('admin.admin_praise_night_nine', compact('praise_night_nine'));
    }
    // Praise Night Ten
    public function PraiseNightTen(){
        $praise_night_ten = Minutes::where('praise_night_type', 'praise_night_10')->latest()->get();
        return view('admin.admin_praise_night_ten', compact('praise_night_ten'));
    }
    // Praise Night Eleven
    public function PraiseNightEleven(){
        $praise_night_eleven = Minutes::where('praise_night_type', 'praise_night_11')->latest()->get();
        return view('admin.admin_praise_night_eleven', compact('praise_night_eleven'));
    }
    // Praise Night Twelve
    public function PraiseNightTwelve(){
        $praise_night_twelve = Minutes::where('praise_night_type', 'praise_night_12')->latest()->get();
        return view('admin.admin_praise_night_twelve', compact('praise_night_twelve'));
    }
    // Praise Night Thirteen
    public function PraiseNightThirteen(){
        $praise_night_thirteen = Minutes::where('praise_night_type', 'praise_night_13')->latest()->get();
        return view('admin.admin_praise_night_thirteen', compact('praise_night_thirteen'));
    }
    // Praise Night Fourteen
    public function PraiseNightFourteen(){
        $praise_night_fourteen = Minutes::where('praise_night_type', 'praise_night_14')->latest()->get();
        return view('admin.admin_praise_night_fourteen', compact('praise_night_fourteen'));
    }
    // Praise Night Fifteen
    public function PraiseNightFifteen(){
        $praise_night_fifteen = Minutes::where('praise_night_type', 'praise_night_15')->latest()->get();
        return view('admin.admin_praise_night_fifteen', compact('praise_night_fifteen'));
    }
    // Praise Night Sixteen
    public function PraiseNightSixteen(){
        $praise_night_sixteen = Minutes::where('praise_night_type', 'praise_night_16')->latest()->get();
        return view('admin.admin_praise_night_sixteen', compact('praise_night_sixteen'));
    }
    // Praise Night Seventeen
    public function PraiseNightSeventeen(){
        $praise_night_seventeen = Minutes::where('praise_night_type', 'praise_night_17')->latest()->get();
        return view('admin.admin_praise_night_seventeen', compact('praise_night_seventeen'));
    }
    // Praise Night Eighteen
    public function PraiseNightEighteen(){
        $praise_night_eighteen = Minutes::where('praise_night_type', 'praise_night_18')->latest()->get();
        return view('admin.admin_praise_night_eighteen', compact('praise_night_eighteen'));
    }
    // Praise Night Nineteen
    public function PraiseNightNineteen(){
        $praise_night_nineteen = Minutes::where('praise_night_type', 'praise_night_19')->latest()->get();
        return view('admin.admin_praise_night_nineteen', compact('praise_night_nineteen'));
    }
    // Praise Night Twenty
    public function PraiseNightTwenty(){
        $praise_night_twenty = Minutes::where('praise_night_type', 'praise_night_20')->latest()->get();
        return view('admin.admin_praise_night_twenty', compact('praise_night_twenty'));
    }
    // Edit Praise Night
    public function EditPraiseNight($id){
        $praiseNightView = Minutes::latest()->get();
        $praiseEdit = Minutes::findOrFail($id);
        return view('admin.admin_praise_night_edit', compact('praiseEdit', 'praiseNightView'));
    }
    // Delete Praise Night
    public function DeletePraiseNight($id){
        $deleteId = Minutes::findOrFail($id);
        $pdf = $deleteId->pdf_file;
        @unlink($pdf);

        Minutes::findOrFail($id)->delete();
        $notification = array(
            'message'=> 'Praise night deleted successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }
    // Christmas all content
    public function AllContent5($id){
        $contentData = Minutes::findOrFail($id);
        return view('admin.all_content5', compact('contentData'));
    }
    // View Doc
    public function ViewDoc($id){
        $docs = Minutes::findOrFail($id);
        return view('admin.admin_view_pdf', compact('docs'));
    }
    // View Doc2
    public function ViewDoc2($id){
        $docs = Minutes::findOrFail($id);
        return view('admin.admin_view_pdf', compact('docs'));
    }
    // View Doc3
    public function ViewDoc3($id){
        $docs = Minutes::findOrFail($id);
        return view('admin.admin_view_pdf', compact('docs'));
    }
    // View Praise Nights
    public function HealingStreamView(){
        $healingStream = Minutes::where('minutes_directory', 'healing streams')->latest()->get();
        return view('admin.admin_healing_stream_view', compact('healingStream'));
    }

    // Store Healing Stream
    public function HealingStreamStore(Request $request){
        $request->validate([
        'pdf_file' => 'required|mimes:pdf|max:2048', // PDF files, maximum 2MB
        'date_upload' => 'required',
        'year' => 'required',
        'healing_stream_type' => 'required',
        'title' => 'required',
        'content' => 'required'
        ]);
    
        $pdfPath = $request->file('pdf_file');
        $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
        $pdfPath->move(public_path('upload/pdf_doc'), $filename);

        Minutes::insert([
            'minutes_directory'=> 'healing streams',
            'healing_stream_type' => $request->healing_stream_type,
            'date_upload' => $request->date_upload,
            'year' => $request->year,
            'pdf_file' => $filename,
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Healing stream added successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    // Healing Stream March
    public function HealingStreamMarch(){
        $healing_stream_march = Minutes::where('healing_stream_type', 'march')->latest()->get();
        return view('admin.admin_healing_stream_march', compact('healing_stream_march'));
    }
    // Healing Stream July
    public function HealingStreamJuly(){
        $healing_stream_july = Minutes::where('healing_stream_type', 'july')->latest()->get();
        return view('admin.admin_healing_stream_july', compact('healing_stream_july'));
    }
    // Healing Stream October
    public function HealingStreamOctober(){
        $healing_stream_october = Minutes::where('healing_stream_type', 'october')->latest()->get();
        return view('admin.admin_healing_stream_october', compact('healing_stream_october'));
    }
    // Edit Healing Stream
    public function EditHealingStream($id){
        $healingStreamData = Minutes::latest()->get();
        $healingStreamEdit = Minutes::findOrFail($id);
        return view('admin.admin_edit_healing_stream', compact('healingStreamEdit',  'healingStreamData' ));
    }
    // Healing Stream Update
    // public function UpdateHealingStream(Request $request){
    //     $healingStreamUpdate = $request->id;

    //      if($request->file('pdf_file')){
    //         $pdfPath = $request->file('pdf_file');
    //         $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
    //         $pdfPath->move(public_path('upload/pdf_doc'), $filename);

        
    //     HealingStream::findOrFail($healingStreamUpdate)->update([
    //         'healing_stream'=> $request->healing_stream,
    //         'days' => $request->days,
    //         'title'=> $request->title,
    //         'pdf_file' => $filename,
    //         'content' => $request->content,
    //     ]);
    //     $notification = array(
    //     'message'=> 'Healing Stream updated successfully',
    //     'alert-type'=>'success'
    //     );
    //     return redirect()->back()->with($notification);
    // }
    // else{
        
    // }
        
    // }


    // HEALING STREAM
    public function UpdateHealingStream(Request $request){
        $healingStreamUpdate = $request->id;
        
        if($request->file('pdf_file')){
            $pdfPath = $request->file('pdf_file');
            $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
            $pdfPath->move(public_path('upload/pdf_doc'), $filename);

            Minutes::findOrFail($healingStreamUpdate)->update([
                'healing_stream_type'=> $request->healing_stream_type,
                'year' => $request->year,
                'title'=> $request->title,
                'pdf_file' => $filename,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Healing stream successfully updated',
            'alert-type'=>'success'
            );
            return redirect()->route('admin.healing.stream.view')->with($notification);
        }
        else{
            Minutes::findOrFail($healingStreamUpdate)->update([
                'healing_stream_type'=> $request->healing_stream_type,
                'year' => $request->year,
                'title'=> $request->title,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Healing stream successfully updated ',
            'alert-type'=>'success'
            );
            return redirect()->route('admin.healing.stream.view')->with($notification);
        }
    }

    // Delete Healing Stream
    public function DeleteHealingStream($id){

        $deleteId = Minutes::findOrFail($id);
        $pdf = $deleteId->pdf_file;
        @unlink($pdf);

        Minutes::findOrFail($id)->delete();
        $notification = array(
            'message'=> 'Healing stream deleted successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }
    // Christmas Service View
    public function ChristmasServiceView(){
        // $titleData = Title::latest()->get();
        // $leaderData = Leader::latest()->get();
        $christmasData = Minutes::where('minutes_directory', 'christmas')->latest()->get();
        return view('admin.admin_christmas_service_view', compact('christmasData'));
    }
    // Christmas Service Store
        public function ChristmasServiceStore(Request $request){
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
        
        Minutes::insert([
            'minutes_directory'=> 'christmas',
            'date_upload' => $request->date_upload,
            'pdf_file' => $filename,
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Christmas eve service uploaded successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    // Edit Christmas Service
    public function EditChristmasService($id){
        // $christmasView = Christmas::orderBy('year', 'ASC')->latest()->get();
        $christmasView = Minutes::latest()->get();    
        $christmasEdit = Minutes::findOrFail($id);
        return view('admin.admin_edit_christmas_service', compact('christmasEdit', 'christmasView'));
    }
    // Update Christmas Service 
    public function UpdateChristmasService(Request $request){
        $christmasUpdate = $request->id;
        
        if($request->file('pdf_file')){
            $pdfPath = $request->file('pdf_file');
            $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
            $pdfPath->move(public_path('upload/pdf_doc'), $filename);

            Minutes::findOrFail($christmasUpdate)->update([
                
                'title' => $request->title,
                'pdf_file' => $filename,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Christmas updated successfully ',
            'alert-type'=>'success'
            );
            return redirect()->route('admin.praise.night.view')->with($notification);
        }
        else{
            Minutes::findOrFail($christmasUpdate)->update([
                
                'title' => $request->title,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Christmas service updated successfully',
            'alert-type'=>'success'
            );
            return redirect()->route('admin.christmas.service.view')->with($notification);
        }
        
    }
    // Delete Christmas Service
    public function DeleteChristmasService($id){

        $deleteId = Minutes::findOrFail($id);
        $pdf = $deleteId->pdf_file;
        @unlink($pdf);

        Minutes::findOrFail($id)->delete();
        $notification = array(
            'message'=> 'Christmas service deleted successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    // Other Ministry
    public function OtherMinistryView(){
        $otherMinistryData = Minutes::where('minutes_directory', 'other ministry programs')->latest()->get();
        return view('admin.admin_other_ministry_view', compact('otherMinistryData'));
    }
    // Other Ministry Store
    public function OtherMinistryStore(Request $request){
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
        
        Minutes::insert([
            'minutes_directory'=> 'other ministry programs',
            'date_upload' => $request->date_upload,
            'pdf_file' => $filename,
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Christmas eve service uploaded successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    // Other Ministry all content
    public function AllContent7($id){
        $contentData = Minutes::findOrFail($id);
        return view('admin.all_content7', compact('contentData'));
    }
    // Other Ministry View Doc
    public function ViewDoc4($id){
        $docs = Minutes::findOrFail($id);
        return view('admin.admin_view_pdf', compact('docs'));
    }
    // Edit Christmas Service
    public function EditOtherMinistry($id){
        // $christmasView = Christmas::orderBy('year', 'ASC')->latest()->get();
        $otherMinistryView = Minutes::latest()->get();    
        $otherMinistryEdit = Minutes::findOrFail($id);
        return view('admin.admin_edit_other_ministry', compact('otherMinistryEdit', 'otherMinistryView'));
    }
    // Update Christmas Service 
    public function UpdateOtherMinistry(Request $request){
        $otherMinistryUpdate = $request->id;
        
        if($request->file('pdf_file')){
            $pdfPath = $request->file('pdf_file');
            $filename = date('YmdHi') . $pdfPath->getClientOriginalName();
            $pdfPath->move(public_path('upload/pdf_doc'), $filename);

            Minutes::findOrFail($otherMinistryUpdate)->update([
                
                'title' => $request->title,
                'pdf_file' => $filename,
                'content' => $request->content,
            ]);
            $notification = array(
            'message'=> 'Other ministry programs updated successfully ',
            'alert-type'=>'success'
            );
            return redirect()->route('admin.praise.night.view')->with($notification);
        }
        else{
            Minutes::findOrFail($otherMinistryUpdate)->update([
                
                'title' => $request->title,
                'content' =>$request->content,
            ]);
            $notification = array(
            'message'=> 'Other ministry programs updated successfully',
            'alert-type'=>'success'
            );
            return redirect()->route('admin.other.ministry.view')->with($notification);
        }
        
    }
    // Delete Other Ministry Programs
    public function DeleteOtherMinistry($id){

        $deleteId = Minutes::findOrFail($id);
        $pdf = $deleteId->pdf_file;
        @unlink($pdf);

        Minutes::findOrFail($id)->delete();
        $notification = array(
            'message'=> 'Other Ministry Programs deleted successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    // View Doc6
    public function ViewDoc6($id){
        $docs = Minutes::findOrFail($id);
        return view('admin.admin_view_pdf6', compact('docs'));
    }
}