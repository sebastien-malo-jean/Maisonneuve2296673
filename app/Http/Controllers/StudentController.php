<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\City;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Student::query();

        // Filtrage des étudiants selon les champs du formulaire
        if ($request->filled('name')) {
            $query->where('students.name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('email')) {
            $query->where('students.email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('birthOfDate')) {
            $query->whereDate('students.dateOfBirth', '>', $request->birthOfDate);
        }

        if ($request->filled('city')) {
            $query->where('students.city_id', $request->city);
        }

        // Appliquer le tri selon le champ spécifié
        $orderBy = $request->input('orderBy', 'students.name');
        $order = $request->input('order', 'asc');

        // Si le tri est demandé par la ville, on fait une jointure sur la table cities
        if ($orderBy == 'city') {
            $query->join('cities', 'students.city_id', '=', 'cities.id')
                ->orderBy('cities.name', $order);
        } else {
            // Sinon, on trie par le champ spécifié (par exemple, le nom de l'étudiant)
            $query->orderBy($orderBy, $order);
        }

        // Récupérer les étudiants avec leur ville associée
        $students = $query->with('city')->paginate(25);

        // Récupérer toutes les villes pour le filtre
        $cities = City::all();

        // Retourner la vue avec les étudiants et les villes
        return view('student.index', ['students' => $students, 'cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view('student.create', ['cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'address' => 'required|string|min:3|max:200',
            'email' => 'required|email',
            'phone' => 'required',
            'dateOfBirth' => 'required|date',
            'city_id' => 'required|numeric',
        ]);
        //verification de la validation

        $student = Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'dateOfBirth' => $request->dateOfBirth,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('student.show', ['student' => $student->id])->with('success', "L'étudiant à été créé avec succès!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $cities = City::all();
        return view('student.edit', ['student' => $student, 'cities' => $cities]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //validation
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'address' => 'required|string|min:3|max:200',
            'email' => 'required|email',
            'phone' => 'required',
            'dateOfBirth' => 'required|date',
            'city_id' => 'required|numeric',
        ]);
        //update sur l'étudiant
        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'dateOfBirth' => $request->dateOfBirth,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('student.show', ['student' => $student->id])->with('success', 'Étudiant modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Étudiant suprimé avec succès!');
    }
}
