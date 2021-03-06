@extends('layout')

@section('title', "Inicio")
@section('sitio', $data->sitio)
@section('link_fb', $data->link_fb)
@section('link_tw', $data->link_tw)
@section('link_yt', $data->link_yt)


@section('content')
<div class="row">
    {{ $posts->render() }}
</div>


<div class="row">
	@foreach($posts as $post)
	<div class="col-md-3 mt-3"> 
		<div class="card text-white bg-dark" style="width: 15rem; border-radius: 20px;">
			<div class="text-center" style="margin-top: 5px;">
				<h5> <span class="badge"> {{ $post->title }} </span> </h5>
			</div>
			<a class="" href="#">
				<img class="card-img-top img-fluid" src="/images/{{ $post->image }}" alt="Card image cap">
			</a>
			<div class="card-body" style="margin-top: 5px;">
				<p class="card-text"> 
					{{ substr($post->body, 0, 40) }}... 
				</p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalQuickView{{ $post->id }}"> <i class="fas fa-eye"></i> Ver más </button>
			</div>
		</div>
	</div>
	@endforeach
</div>

@foreach($posts as $post)
    <div class="modal fade" id="modalQuickView{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="my-5">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                                    <img class="img-fluid" src="/images/{{ $post->image }}" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h3 class="font-weight-bold mb-3">
                                    <strong> {{ $post->title }} </strong>
                                </h3>
                                <p>
                                    {{ $post->body }}
                                </p>
                                <p>
                                    <strong> Autor: </strong> {{ App\User::find($post->author)->name }}, <strong>Fecha:</strong>
                                    {{ substr($post->updated_at, 0, strlen($post->updated_at) - 9) }}
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection