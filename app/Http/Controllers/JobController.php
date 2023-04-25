<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\JobsCollection;

class JobController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $jobs = Job::with('company','assignmentVideoResume','jobCategory')->where('job_position','LIKE', '%'.$keyword.'%')->OrderByDesc('updated_at')->paginate(9);
        
        $jobs = new JobsCollection($jobs);

        return inertia::render('Pelamar/LowonganKerja', [
            'jobs' => $jobs,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $jobs = new Job();
        $jobs->posisiPekerjaan = $request->posisiPekerjaan;
        $jobs->jenisPekerjaan = $request->jenisPekerjaan;
        $jobs->lokasi = $request->lokasi;
        $jobs->gajih = $request->gajih;
        $jobs->author = auth()->user()->name;
        $jobs->save();
        return redirect()->back()->with('message', 'Lowongan Kerja Berhasil di Upload');
    }

    public function show(Job $jobs)
    {
        $myJobs = $jobs::where('author',auth()->user()->name)->get();
        return inertia::render('Perusahaan/LowonganKerjaPerusahaan', [
            'myJobs' => $myJobs,
        ]);
    }

    public function edit(Job $jobs, Request $request)
    {
        return Inertia::render('Perusahaan/EditLoker', [
            'myJobs' => $jobs->find($request->id)
        ]);
    }

    public function update(Request $request)
    {
        Job::where('id', $request->id)->update([
            'posisiPekerjaan' => $request->posisiPekerjaan,
            'jenisPekerjaan' => $request->jenisPekerjaan,
            'lokasi' => $request->lokasi,
            'gajih' => $request->gajih,
        ]);
        return to_route('LowonganKerjaPerusahaan');
    }

    public function destroy(Job $jobs)
    {
        //
    }
}