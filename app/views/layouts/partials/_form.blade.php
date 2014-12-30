<!-- Begin Form -->
<div class="banner-form">
	<div class="form-title">
		<h2>Gutter Installations Starting at $700!</h2>
	</div>					
	<div class="form-body">

		@if ($errors->any())

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
					        @endforeach
					    </ul>
				    </div>
				</div>
			</div>

		@endif

		@include('flash::message')


		{{ Form::open(['id' => 'banner-form', 'class' => 'form']) }}

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">

						{{Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'First Name']) }}

					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">

						{{ Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">

						{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) }}

					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">

						{{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) }}

					</div>
				</div>
			</div>

			<div class="form-group">
				
				{{ Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Street Address']) }}

			</div>
			
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">

						{{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) }}

					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">

						{{ Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'State']) }}

					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">

						{{ Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Zip']) }}

					</div>
				</div>
			</div>

			<div class="form-group">
				{{ Form::text('additional', null, ['class' => 'form-control', 'placeholder' => 'Additional Info (optional)']) }}
			</div>
			
			<div class="col-sm-6 col-sm-offset-3">
				{{ Form::submit('SUBMIT', ['class' => 'btn btn-default btn-submit']) }}
			</div>

		{{ Form::close() }}
	</div>
</div>
<!-- End Form -->