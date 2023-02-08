@if(Auth::check())
     <a href="{{route('logout')}}">Sair</a>
@endif

<!-- arquivo: resources/views/student/create-message.blade.php -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Nova Mensagem</div>

          <div class="card-body">
            @if (session('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
            @endif

            <form action="{{ route('student.store-message') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="teacher">Destinatário:</label>
                <select name="teacher_id" id="teacher_id" class="form-control">
                  @foreach(App\Models\User::where('role_id', 3)->get() as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                  <label for="subject">Assunto:</label>
                  <input name="subject" id="subject" class="form-control">
              </div>
              <div class="form-group">
                <label for="message">Mensagem:</label>
                <textarea name="message" id="message" rows="5" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
