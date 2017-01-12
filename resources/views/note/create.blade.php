@extends('master')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Create Data2</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="{{ route('note.store') }}" method="post">
        {{csrf_field()}}
        <div class="form-group{{ ($errors->has('fqdn')) ? $errors->first('fqdn') : '' }}">
	
	<input type="text" name="Domain (FQDN)" class="form-control" placeholder="e.g.google.com">
          {!! $errors->first('fqdn','<p class="help-block">:message</p>') !!}
        </div>

	<div class="form-group">
          <input type="text" name="Port" class="form-control" row="3" placeholder="443 used by default unless input specific">
        </div>

	<div class="form-group{{ ($errors->has('description')) ? $errors->first('fqdn') : '' }}">
          <input type="text" name="MEMO" class="form-control" row="3" placeholder="Memo for this domain">
          {!! $errors->first('memo','<p class="help-block">:message</p>') !!}
        </div>
	
	<div class="form-group{{ ($errors->has('memo')) ? $error->first('fqdn') : '' }}">
	  <label for="Memo">Memo</label>
	    <div>
	    <textarea class="form-control" rows="5" name="memo">{{ old('memo') }}</textarea>
	    </div>
	    </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="save">
        </div>
      </form>
    </div>
  </div>
  @stop
