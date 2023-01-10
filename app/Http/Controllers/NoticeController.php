<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notices = Notice::all();
        return view('admin.notice.index')->with('notices',$notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           'title' => 'required|unique:notices|max:255',
            'start_date'=> 'required',
            'end_date' => 'required',
            'notice_file' => 'required|mimes:pdf|max:10000'
        ]);

        try {
            $data = $request->only('title', 'start_date', 'end_date');
            $file_name = str_replace(' ', '', $data['title']);
            $file_name = $file_name.'.'.'pdf';

            $file = $request->file("notice_file");
            $file->storeAs('/files/notices/', $file_name,['disk' => 'public_uploads']);


            $data['file_name'] = $file_name;
         //  dd($data);
            Notice::create($data);
            return redirect()->route('notice.index')->with('success', 'Year Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('notice.create')->with('error', 'Something went wrong');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice , $id, $file)
    {
        $notice->destroy($id);
        $file_link = public_path('/files/notices/'.$file);
        try {
            if (File::exists($file_link)) {
                File::delete($file_link);
            }
            return redirect()->route('notice.index')->with('success', 'Candidate Deleted Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('notice.index')->with('error', 'Something went wrong.'.$exception->getMessage());
        }
    }
}
