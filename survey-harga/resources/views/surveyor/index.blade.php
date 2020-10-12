@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Stuff Price</div>

                <div class="card-body">
                    
                    <table class="table table table-striped table-bordered" id="example" style="width:100%">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Stuff</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($stuff as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $item->stuff_name }}</td>
                                    <td><a href="{{ route('surveyor.stuff', $item) }}" class="btn btn-primary">Add Price</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection