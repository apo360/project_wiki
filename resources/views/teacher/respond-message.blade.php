<h1>Responder mensagem</h1>

<p>Remetente: {{ $message->sender->name }}</p>
<p>Assunto: {{ $message->subject }}</p>
<p>Mensagem: {{ $message->body }}</p>

<form action="{{ route('teacher.send-response', $message->id) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="response">Resposta:</label>
        <textarea name="response" id="response" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar resposta</button>
</form>
