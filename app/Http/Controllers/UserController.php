<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\City;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $users = User::select()
            ->orderby('name')
            ->paginate(10);
        return view('user.index', ["users" => $users, "students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view('user.create', ["cities" => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20',
            'address' => 'required|string|min:3|max:200',
            'phone' => 'required|string',
            'dateOfBirth' => 'required|date',
            'city_id' => 'required|numeric',
        ]);

        // Créer le user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
        ]);

        // Créer le student lié
        $student = new Student([
            'name' => $user->name,
            'email' => $user->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'dateOfBirth' => $request->dateOfBirth,
            'city_id' => $request->city_id,
        ]);

        $user->students()->save($student);

        return redirect()->route('user.index')->with('success', 'Utilisateur et étudiant créés avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //récuperation des students
        $student = $user->students()->first();

        return view('user.edit', [
            'user' => $user,
            'cities' => City::all(),
            'student' => $student,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'address' => 'required|string|min:3|max:200',
            'phone' => 'required|string',
            'dateOfBirth' => 'required|date',
            'city_id' => 'required|numeric',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $student = $user->students()->first();
        $student->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'dateOfBirth' => $request->dateOfBirth,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('user.index')->with("success", "L'utilisateur a été mis à jour avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Suppression de l'utilisateur et de l'étudiant
        $student = $user->students()->first();
        if ($student) {
            $student->delete();
        }
        $user->delete();

        return redirect()->route('user.index')->with("success", "L'utilisateur a été supprimé avec succès !");
    }
}
