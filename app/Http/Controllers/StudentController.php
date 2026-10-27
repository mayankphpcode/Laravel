<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
{
    $allStudent = Student::when($req->student_name, function($query) use($req){
                                $query->where('student_name', $req->student_name);
                            })->when($req->email, function($query) use($req){
                                $query->where('email', $req->email);
                            })
                            ->paginate(3);

    return view('Frontend.showStudent', ['allStudent' => $allStudent]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    // Admission form submit karke data save karna
    public function store(Request $request)
    {


        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'parent_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255|unique:students,email',
            'course' => 'required|string|max:50',
            'date_of_birth' => 'nullable|date|before:today',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'message' => 'nullable|string|max:2000',
        ]);

        $profileName = null;

    if ($request->hasFile('profile')) {
        $file = $request->file('profile');

        $profileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('Uploads'), $profileName);
    }


         Student::create([
        'student_name' => $request->student_name,
        'parent_name' => $request->parent_name,
        'phone' => $request->phone,
        'email' => $request->email,
        'class' => $request->course,
        'date_of_birth' => $request->date_of_birth,
        'stu_profile' => $profileName,
        'message' => $request->message,
    ]);


        return redirect()->route('students.index')->with(
            'success',
            'Admission enquiry submitted successfully!'
        );
    }



    /**
     * Display the specified resource.
     */
    public function show(Student $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admission= Student::findOrFail($id);
        return view('Frontend.editStudent', compact('admission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'parent_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'class' => 'required|string|max:50',
            'date_of_birth' => 'nullable|date|before:today',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'message' => 'nullable|string|max:2000',
        ]);


        Student::where('id', $id)->update($validated);

        return redirect()->route('students.index')->with(
            'success',
            'Admission Updated Successfully!'
        );
    }

    /**
     * Remove the specified resource from storage.
     */

public function destroy($id)
{
     Student::where('id', $id)->delete();

    return redirect()
        ->route('students.index')
        ->with('success', 'Admission deleted successfully!');
}

}
