@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Create a New Asset Category ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		Create a New Blog Post

		<div class="pull-right">
			<a href="{{ route('categories') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h3>
</div>


<form class="form-horizontal" method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Tabs Content -->
	<div class="tab-content">

		<div class="tab-pane active" id="tab-general">
			<!-- Category Title -->
			<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
				<label class="control-label" for="name">Category Name</label>
				<div class="controls">
					<input class="span6" type="text" name="name" id="name" value="{{ Input::old('name') }}" />
					{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			<!-- Category Parent Title -->
			<div class="control-group {{ $errors->has('parent') ? 'error' : '' }}">
				<label class="control-label" for="parent">Category Parent</label>
				<div class="controls">
					{{ Form::select('parent', $category_options , Input::old('parent')) }}
					{{ $errors->first('parent', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
		</div>



	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{ route('blogs') }}">Cancel</a>
			<button type="submit" class="btn btn-success">Publish</button>
		</div>
	</div>
</form>
@stop
