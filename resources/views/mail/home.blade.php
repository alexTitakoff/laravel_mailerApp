@extends('welcome')


@section('content')




<div class="container">
	

	<div class="row text-container ">
		<div class="col-sm-12">
			<h1>Laravel Mail App</h1>
		</div>

		<div class="col-sm-12">
			<div class="col-sm-4">
				<a href="{{ route('sendmail.index') }}" class="btn btn-info btn-block btn-lg" > Send Mail</a>
			</div>

			<div class="col-sm-4">
				<a href="{{ action('MailController@index') }}" class="btn btn-danger btn-block btn-lg" > Receive Mail</a>
			</div>


			<div class="col-sm-4">
				<a href="{{ action('MailController@index') }}" class="btn btn-success btn-block btn-lg" > Queue Mail</a>
			</div>
		</div>
		
	</div>
</div>




@stop