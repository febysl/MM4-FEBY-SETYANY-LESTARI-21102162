<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use File;

class StudentController extends Controller
{
    //
    // Create & Read Data
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8,unique:students',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
            'image' => 'file|image|max:10000',
        ]);
        $mahasiswa = new Student();
        $mahasiswa->nim = $validateData['nim'];
        $mahasiswa->name = $validateData['nama'];
        $mahasiswa->gender = $validateData['jenis_kelamin'];
        $mahasiswa->departement = $validateData['jurusan'];
        $mahasiswa->address = $validateData['alamat'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            File::delete($student->image);
            $path = $request->image->move('assets/images',$namaFile);
            $mahasiswa->image = $path;
        }
        $mahasiswa->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('students.index');
    }

    public function index()
    {
        $mahasiswas = Student::all();
        return view('student.index', ['students' => $mahasiswas]);
    }

    public function show($student_id)
    {
        $result = Student::findOrFail($student_id);
        return view('student.show', ['student' => $result]);
    }

    public function edit($student_id)
    {
        $result = Student::findOrFail($student_id);
        return view('student.edit',['student' => $result]);
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8,unique:students',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);
        $student->nim = $validateData['nim'];
        $student->name = $validateData['nama'];
        $student->gender = $validateData['jenis_kelamin'];
        $student->departement = $validateData['jurusan'];
        $student->address = $validateData['alamat'];
        $student->save();
        $request->session()->flash('pesan','Perubahan data berhasil');
        return redirect()->route('student.show',['student' => $student->id]);
    }

    public function destroy(Request $request, Student $student)
    {
        File::delete($student->image);
        $student->delete();
        $request->session()->flash('pesan','Hapus data berhasil');
        return redirect()->route('student.index');
    }
}
