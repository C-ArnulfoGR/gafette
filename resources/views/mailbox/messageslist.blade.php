@extends('admin.layout')

@section('title', $title)

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<table class="table table-hover table-responsive-md table-fixed">
					<thead>
						<tr>
							<th>#</th>
							<th>Correo</th>
							<th>Asunto</th>
							<th>Configuración</th>
						</tr>
					</thead>
					<tbody>
						@foreach($messages as $message)
						<tr>
							<td scope="row"> {{ $message->id }} </td>
							<td> {{ $message->email }} </td>
							<td> {{ $message->subject }} </td>
							<td align="center"> 
								<button type="button" class="btn btn-outline-cyan waves-effect btn-sm my-0" data-toggle="modal" data-target="#modalMessageView{{ $message->id }}"> <i class="fas fa-envelope"></i> Ver mensaje</button>

								<button type="button" class="btn btn-outline-success waves-effect btn-sm my-0" data-toggle="modal" data-target="#modalMessageAnswer{{ $message->id }}"> <i class="fas fa-comment"></i> Responder </button>

								<button class="btn btn-outline-danger waves-effect btn-sm my-0" onclick="return deleteConfirmMessage('{{ $message->id }}')"> <i class="fas fa-times"></i> Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $messages->render() }}
			</div>
		</div>
	</div>
</div>



@foreach($messages as $message)
<div class="modal fade right" id="modalMessageView{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-side modal-top-right modal-notify modal-primary" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<p class="heading"> <strong>Asunto:</strong> {{ $message->subject }}</p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="white-text">&times;</span>
				</button>
			</div>		
			<div class="modal-body">
				<div class="row">
					<div class="col-3">
						<p></p>
						<p class="text-center"><i class="fas fa-envelope-open fa-4x"></i></p>
					</div>
					<div class="col-9">
						<p><strong>De:</strong></p>
						<p> {{ $message->name }} ({{ $message->email }}) </p>
						<p><strong>Detalle del mensaje:</strong></p>
						<p> {{ $message->message_body }} </p>
					</div>
				</div>
			</div>		
			<div class="modal-footer flex-center">
				<a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cerrar mensaje</a>
			</div>
		</div>
	</div>
</div>


<div class="modal fade left" id="modalMessageAnswer{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white-text">
                <h4 class="title"> <i class="fas fa-envelope-open"></i> Responder mensaje</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            	<p> <strong> Para: </strong> {{ $message->name }} ({{ $message->email }})</p>
            	{{-- <p> <strong> Mensaje: </strong> {{ $message->message_body }} </p> --}}

            	<form role="form" autocomplete="off" method="POST" action="{{ route('mailbox.answerMessage') }}">
            		{!! csrf_field() !!}
	                <div class="md-form">
	                    <i class="fas fa-envelope prefix"></i>
	                    <input type="email" id="community_email" name="community_email" class="form-control" required="" placeholder="De: Correo community manager">
	                    {{-- <label for="materialFormNameModalEx1">Your name</label> --}}
	                </div>

	                <div class="md-form">
	                    <i class="fas fa-file-alt prefix"></i>
	                    <textarea type="hidden" id="answer_body" name="answer_body" class="form-control md-textarea" required="" placeholder="Resp. a: {{ $message->message_body }}"></textarea>
	                    {{-- <label for="materialFormMessageModalEx1">Your message</label> --}}
	                </div>

	                <div class="md-form">
	                    <input type="hidden" id="message_id" name="message_id" class="form-control" value="{{ $message->id }}" required="">
	                    {{-- <label for="materialFormSubjectModalEx1">Subject</label> --}}
	                </div>

	                <div class="text-center mt-4 mb-2">
	                    <button class="btn btn-cyan" type="submit"><i class="fas fa-paper-plane ml-2"></i> Enviar Respuesta</button>
	                </div>
                </form>
            </div>
        </div>
        <!--/.Content-->
	</div>
</div>
@endforeach

@endsection