<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Teachers\ProfessorController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Livewire\WithFileUploads;

class UserController extends Controller
{
    use WithFileUploads;

    public $photo;
    

    public function update(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'apelido' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'string', 'max:255'],
            'morada' => ['required', 'string', 'max:255'],
            'genero' => ['required', 'in:M,F'],
            
        ]);

        if ($request->hasFile('photo'))
        {
            /*Determining If An Uploaded File Is Valid*/
            if ($request->file('photo')->isValid())
            {
                $image = $request->file('photo');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('profile_images'), $filename);

                if (isset($request['photo'])) {
                    User::where('id', auth()->user()->id)->update([
                        'profile_photo_path' => $filename,
                    ]);
                }
            }
        }
        
        User::where('id', auth()->user()->id)->update([
            'name' => $request['name'],
            'surname' => $request['apelido'],
            'phone_number' => $request['telefone'],
            'endereco' => $request['morada'],
            'nascimento' => $request['nascimento'],
            'gender' => $request['genero'],
        ]);
        
        /* Para Actualizar os dados na tabela Professor*/
        $prof = new ProfessorController();
        $prof->update($request);
    
    
        /* Para Inserir e Actualizar as Disponiblidades*/
        $disponiblidade = new DisponiblidadesController();
        $disponiblidade->store($request);
        
        
        return redirect()->route('index')->with('status','testsssss');
    }
    
}
