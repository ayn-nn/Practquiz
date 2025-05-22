<?php

namespace App\Http\Controllers;

use Psr\Http\Message\RequestInterface;
use Response;
use App\Models\studRec;
use Illuminate\Http\Request;

class records extends Controller
{
    public function index()
    {
        $employees = studRec::get();
        return view('students.index', compact('employees'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:255|string',
            'midname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'address' => 'required|max:255|string',
            'age' => 'required|integer',
            'zip' => 'required|integer'
        ]);

        studRec::create($request->all());
        return view('students.create');
    }

    public function edit(int $id)
    {
        $studentss = studRec::find($id);
        return view('students.edit', compact('studentss'));
    }

    public function update(Request $request, int $id)
    { {
            $request->validate([
                'fname' => 'required|max:255|string',
                'midname' => 'required|max:255|string',
                'lname' => 'required|max:255|string',
                'address' => 'required|max:255|string',
                'age' => 'required|integer',
                'zip' => 'required|integer'
            ]);
            studRec::findOrFail($id)->update($request->all());
            return redirect()->back()->with('status', 'Employee Updated Successfully');
        }
    }

    public function destroy(int $id)
    {
        $studentss = studRec::findOrFail($id);
        $studentss->delete();
        return redirect()->back()->with('status', 'Employee Deleted');
    }
}
