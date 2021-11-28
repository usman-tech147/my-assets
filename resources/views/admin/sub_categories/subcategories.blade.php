@extends('layouts.master')

@section('content')
    <div class="row p-3">
        <div class="col-md-6">
            <p class="h3"> Subcategories </p>
        </div>
        <div class="col-md-6 clearfix">
            <a href="{{route('admin.create.subcategory')}}" class="btn btn-success float-right"> Create Subcategory </a>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col" class="text-center">Title</th>
            <th scope="col" class="text-center">Category</th>
            <th scope="col" class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($subcategories as $subcategory)
            <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                <td class="text-center">{{$subcategory->title}}</td>
                <td class="text-center">{{$subcategory->category->title}}</td>
                <td class="text-center">
                    <a class="btn btn-warning"> <i class="fas fa-edit"></i> </a>
                </td>
            </tr>
        @empty
            <tr class="bg-secondary">
                <td colspan="4"class="text-center"> No subcategory found! </td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection