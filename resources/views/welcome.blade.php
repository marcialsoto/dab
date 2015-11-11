@extends ('master')
@section('head')
		<title>Dirección de Abonos</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<style>
		.content.home{
			width: 56%;
			margin: 0 auto;
		}
		.g-recaptcha{
			margin-bottom: 15px;
		}
		.container{
			padding-top: 50px;
		}
		</style>
@stop
	@section('content')
		<div class="content home">
			<h1>Dirección de Abonos</h1>
			<hr />
			{!! Form::open(['class' => '']) !!}
			{!! Form::label('cus-pre-label', 'Buscar por CUS: ') !!}
				<div class="row">
					<div class="form-group col-sm-6 pull-left">						
						{!! Form::text('cus-pre', null, ['class'=>'form-control', 'placeholder' => '0000000']) !!}
					</div>
						
					<div class="form-group col-sm-6 pull-left">
						{!! Form::text('cus-post', null, ['class'=>'form-control', 'placeholder' => '00000']) !!}
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="g-recaptcha" data-sitekey="6Lf7pRATAAAAAOxM2nhbQG2IaUb7kW1pVjIePEes"></div>
					{!! Form::submit('Buscar', ['class'=>'btn btn-info']) !!}
			{!! Form::close() !!}
		</div>
	@stop
