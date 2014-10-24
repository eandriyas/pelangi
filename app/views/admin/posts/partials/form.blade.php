<div class="form-group">
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', null, array('class'=>'form-control')) }}
	{{ $errors->first('title', '<p class="text-danger">:message</p>') }}
	
</div>
<div class="form-group">
	<label>File input</label>
	<input type="file">
</div>
<div class="form-group">
	{{ Form::label('body', 'Body') }}
	{{ Form::textarea('body', null, array(
	'class'=>'textarea form-control',
	'placeholder'=>'Enter text ...'
	)) }}
	{{ $errors->first('body', '<p class="text-danger">:message</p>') }}
</div>
<div class="form-group">
	{{ Form::label('user_id', 'author') }}
	{{ Form::select('user_id' , User::lists('name', 'id'), null, array('class'=>'form-control')) }}
	
</div>
{{ $errors->first('User', '<p class="text-danger">:message</p>') }}
<button type="submit" class="btn btn-default">Submit</button>