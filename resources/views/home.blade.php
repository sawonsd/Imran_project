@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Message</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($message as $row)
                        <tr>
                          <th scope="row">{{$row->id}}</th>
                          <td>{{$row->name}}</td>
                          <td>{{$row->email}}</td>
                          <td>{{$row->subject}}</td>
                          <td>{{$row->message}}</td>
                          <td>
                            <a href="" class="btn btn-outline-info btn-sm">Edit</a>
                            <a href="" class="btn btn-outline-success btn-sm">View</a>
                            <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <span>{{$message->links()}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
