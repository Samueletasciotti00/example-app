@extends('layouts.app')

@section('content')
<h1>Progetti</h1>

<ul>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($projects as $project)
    <tr>
      <th scope="row">{{ $project->id }}</th>
      <td>{{ $project->title }}</td>
      <td>{{ $project->slug }}</td>
      <td>{{ $project->description }}</td>
      <td><a style="background-color: black;" href="{{ route('admin.project.show', $project->id) }}">SHOW</a></td>
      <td><a style="background-color: black;" href="{{ route('admin.project.edit', $project->id) }}">MODIFY</a></td>
    </tr>

    
    @endforeach
  </tbody>
</table>

    
</ul>
@endsection