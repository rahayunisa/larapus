@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}"> Dashboard </a></li>
					<li class="active"> Penulis </li>
			</div>

			<div class="panel-body">
			<p><a class="btn btn-primary" href="{{ route('authors.create') }}"> Tambah </a></p>
				{!! $html->table(['class'=>'table-striped']) !!}
					</div>
					</div>
				</div>
			</div>
		</div>
	</ul>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection