<div class="form-group">
	{{ Form::label('kategori', 'Kategori') }}
	{{ Form::text('kategori', null, array('class'=>'form-control')) }}
	{{ $errors->first('kategori', '<p class="text-danger">:message</p>') }}
	
</div>

<button type="submit" class="btn btn-default">Submit</button>