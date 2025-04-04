<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\WorkDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('candidate.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $work_days = WorkDay::all();
        $stores = Store::all();


        return view('candidate.store', compact('work_days', 'stores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => 'required|max:255',
            "lastname" => "required|max:255",
            'date_birth' => "required|date",
            'sexo' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|integer',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'work_day' => 'required|array|min:1', // Validación para al menos un checkbox seleccionado
            'store' => 'required|array|min:1', // Validación para al menos una tienda seleccionada
            'comment' => 'nullable|max:255', // Corregido el 'nullable' para que sea válido
            'cv' => 'required|mimes:pdf|max:2048', // Validación del CV
            'photo' => 'nullable|mimes:jpg,png|max:10000', // Corregido tamaño de archivo de foto
        ], [
            'name.required' => "Por favor ingrese su nombre",
            'lastname.required' => "Por favor ingrese su apellido",
            'date_birth.required' => 'Por favor ingrese su fecha de nacimiento',
            'date_birth.date' => 'Ingrese una fecha válida',
            'sexo.required' => 'Por favor ingrese su sexo', 
            'email.required' => 'Por favor ingrese su correo electrónico',
            'email.email' => 'Por favor ingrese un correo electrónico válido',
            'phone.required' => 'Por favor ingrese su número de teléfono',
            'phone.integer' => 'El número de teléfono debe ser un número entero',
            'province.required' => 'Por favor ingrese su provincia',
            'city.required' => 'Por favor ingrese su ciudad',
            'work_day.required' => 'Por favor seleccione al menos una disponibilidad horaria',
            'work_day.array' => 'La disponibilidad horaria debe ser un arreglo',
            'work_day.min' => 'Debe seleccionar al menos una opción de disponibilidad horaria',
            'store.required' => 'Por favor seleccione al menos una tienda donde desea trabajar',
            'store.array' => 'Las tiendas deben ser un arreglo',
            'store.min' => 'Debe seleccionar al menos una tienda',
            'comment.max' => 'El comentario no puede exceder los 255 caracteres',
            'cv.required' => 'Por favor adjunte su currículum en formato PDF',
            'cv.mimes' => 'El currículum debe ser un archivo PDF',
            'cv.max' => 'El currículum no puede exceder los 2MB',
            'photo.mimes' => 'La foto debe ser un archivo de tipo JPG o PNG',
            'photo.max' => 'La foto no puede exceder los 10MB',
        ]);


        
    DB::beginTransaction();

    try {
        // Guardar la aplicación (sin archivos primero)
        $application = Candidate::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'date_birth' => $data['date_birth'],
            'sexo' => $data['sexo'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'province' => $data['province'],
            'city' => $data['city'],
            'comment' => $data['comment'] ?? null,
        ]);

        // Guardar días laborales
        $application->workDays()->sync($data['work_day']);

        // Guardar tiendas
        $application->stores()->sync($data['store']);

        // // Guardar archivo CV
        // if ($request->hasFile('cv')) {
        //     $cvPath = $request->file('cv')->storeAs(
        //         "documents/cv/{$application->id}",
        //         'cv.' . $request->file('cv')->getClientOriginalExtension(),
        //         'public'
        //     );

        //     $application->cv_path = $cvPath;
        // }

        // // Guardar foto (si existe)
        // if ($request->hasFile('photo')) {
        //     $photoPath = $request->file('photo')->storeAs(
        //         "documents/photos/{$application->id}",
        //         'photo.' . $request->file('photo')->getClientOriginalExtension(),
        //         'public'
        //     );

        //     $application->photo_path = $photoPath;
        // }

        $application->save();

        DB::commit();

        return redirect()->back();
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->withErrors(['error' => 'Hubo un error al guardar la postulación.'])->withInput();
    }


        
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
