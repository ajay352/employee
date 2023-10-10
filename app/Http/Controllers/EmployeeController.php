<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Response;
use App\Models\Employee;



class EmployeeController extends Controller
{
    public function add()
    {
        return view('add');
    }
    public function list(Request $request)
    {
        

       $request->validate([
           
           'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB for image files
           'resume' => 'nullable|mimes:pdf,doc,docx|max:2048', // Max 2MB for document files
       ]);
       $photoFileName = null;
       $resumeFileName = null;
      if ($request->hasFile('photo')) {
         $photoFileName = $request->file('photo')->store('photos', 'public');
       }

      if ($request->hasFile('resume')) {
        $resumeFileName = $request->file('resume')->store('resumes', 'public');
      }

          Employee::create([
         'firstname' => $request->input('firstname'),
         'lastname' => $request->input('lastname'),
         'date_of_birth' => $request->input('date_of_birth'),
         'education_qualification' => $request->input('education_qualification'),
         'address' => $request->input('address'),
         'email' => $request->input('email'),
         'phone' => $request->input('phone'),
         'photo' => $photoFileName,
         'resume' => $resumeFileName,
    ]);

      return redirect()->route('view');

    }
    public function delete($id)

    {
        $record = Employee::find($id);

        if ($record) {
        
           $record->delete();

          
          return redirect()->route('view');
        } else {
        
            return redirect()->route('view')->with('error', 'Record not found');
        }
    }
    public function view()
    {
        $employees = Employee::all();
        return view('list', compact('employees'));
    }
    public function edit($id){
        $record = Employee::find($id);
        return view('update',compact('record'));

    }
    public function update_sec(Request $request ,$id){
       $photoFileName = null;
       $resumeFileName = null;
      
      if ($request->hasFile('photo')) {
         $photoFileName = $request->file('photo')->store('photos', 'public');
       }

      if ($request->hasFile('resume')) {
        $resumeFileName = $request->file('resume')->store('resumes', 'public');
      }
        

    
        $item = Employee::find($id);
        
       $item->firstname = $request->input('firstname');  
       $item->lastname = $request->input('lastname');
       $item->date_of_birth = $request->input('date_of_birth');
       $item->education_qualification = $request->input('education_qualification');
       $item->email = $request->input('email');
       $item->phone = $request->input('phone');
       $item->photo = $photoFileName;
       $item->resume = $resumeFileName;

       $item->save();
       return redirect()->route('view');
    }
    public function display ($id)
    {
        $employ = Employee::find($id);
        return view('display',compact('employ'));

    }
    public function export(Request $request)
    {
      $employees=Employee::all();
      $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=employees.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );
    $handle = fopen('php://output', 'w');
    fputcsv($handle, ["FirstName","LastName","date_of_birth","education_qualification","Address", "Email"]);
    foreach ($employees as $employee){
      fputcsv($handle, [$employee->firstname, $employee->lastname, $employee->date_of_birth,$employee->education_qualification,$employee->address,$employee->email]);

    }
    fclose($handle);
    return Response::stream(
      function () use ($handle) {
          fclose($handle);
      },
      200,
      $headers
  );
    }
}