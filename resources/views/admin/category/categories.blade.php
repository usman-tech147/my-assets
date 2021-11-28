@extends('layouts.master')

@section('content')
    <div class="row p-3">
        <div class="col-md-6">
            <p class="h3"> Categories </p>
        </div>
        <div class="col-md-6 clearfix">
            <a href="{{route('admin.create.category')}}" class="btn btn-success float-right"> Create Category </a>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col" class="text-center">Title</th>
            <th scope="col" class="text-center">Subcategories</th>
            <th scope="col" class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                <td class="text-center">{{$category->title}}</td>
                <td class="text-center">{{$category->subcategories_count}}</td>
                <td class="text-center">
                    <a class="btn btn-warning"> <i class="fas fa-edit"></i> </a>
                </td>
            </tr>
        @empty
            <tr class="bg-secondary">
                <td colspan="4"class="text-center"> No category found! </td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection