@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Stuff Price</div>
                <div class="card-body">
                    <button class="mb-4 btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ADD STUFF
                      </button>
                    <div id="accordion">
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <form class="mb-5" method="POST" action="{{ route('admin.storeStuff') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Stuff Name</label>
                                        <input type="text" class="form-control" name="stuff_name" placeholder="Stuff Name">
                                    </div>
                                    <div class="form-group col">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="float-right btn btn-primary" value="Submit stuff">
                            </form>
                        </div>
                      </div>
                      <div class="mt-4">
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
                                        <td><a href="{{ route('admin.stuff', $item) }}" class="btn btn-primary">View Price</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection