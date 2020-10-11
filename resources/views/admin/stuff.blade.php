@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $stuff->stuff_name }} Price</div>
                <div class="card-body">
                    <table class="table table table-striped table-bordered" id="example" style="width:100%">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Stuff</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($stuff->stuff_has_price as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $stuff->stuff_name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->price_date }}</td>
                                    <td class="text-capitalize">{{ $item->price_status }}
                                        @if ($item->price_status == 'approved')
                                            <i class="fa fa-check" style="color:#227dc7"></i>
                                        @else
                                            <i class="fa fa-times" style="color:red"></i>
                                        @endif 
                                    </td>
                                    <td class="col-xs-1" align="center">
                                        <form action="{{ route('admin.stuffPrice', $item) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            @if ($item->price_status == 'rejected')
                                            <button type="submit" name="status" class="btn btn-primary" value="approve"><i class="fa fa-check" style="color: white"></i></button>
                                            @else
                                            <button type="submit" name="status" class="btn btn-danger" value="reject"><i class="fa fa-times" style="color: white"></i></button>
                                            @endif
                                        </form>
                                    </td>
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