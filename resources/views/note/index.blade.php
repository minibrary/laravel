@extends('master')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>My Note</h1>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Domain(FQDN)</th>
        <th>Port No.</th>
        <th>MEMO</th>
        <th>Created</th>
        <th>Modified</th>
      </tr>
      <a href="{{route('note.create')}}" class="btn btn-info pull-right">Create New Data</a><br><br>
      <?php $no=1; ?>
      @foreach($notes as $note)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$note->fqdn}}</td>
          <td>{{$note->port}}</td>
          <td>{{$note->memo}}</td>
          <td>{{$note->created_at}}</td>
          <td>{{$note->updated_at}}</td>
        </tr>
      @endforeach
    </table>
  </div>
@stop
