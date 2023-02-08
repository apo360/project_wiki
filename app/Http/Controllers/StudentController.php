<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class StudentController extends Controller
{
    
    public function index()
  {
    $teachers = User::where('role_id', 3)->get();
    
    return view('student.profile-estudante',[
        'teachers' => $teachers
        ]);
  }
    
  public function storeMessage(Request $request)
  {
    $request->validate([
      'message' => 'required|string',
      'subject' => 'required|string',
    ]);

    Message::create([
        'sender_id' => auth()->user()->id,
        'receiver_id' => $request['teacher_id'],
        'subject' => $request['subject'],
        'body' => $request['message'],
    ]);

    return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
  }
}