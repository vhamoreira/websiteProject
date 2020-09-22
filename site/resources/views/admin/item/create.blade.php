@extends('layouts.app')


@section('title', 'Item')


@push('css')

@endpush


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add new Item</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('item.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <label>
                                                <input type="text" class="form-control" name="name">
                                            </label>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
                                                    <label class="control-label">Category</label>
                                                    <select class="form-control" name="category">
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id }}">{{  $category->name  }}</option>
                                                            @endforeach
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description</label>
                                            <label>
                                                <input type="text" class="form-control" name="description">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Price</label>
                                            <label>
                                                <input type="text" class="form-control" name="price">
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="control-label">Image</label>
                                                <input type="file" name="image">
                                            </div>
                                        </div>
                                        <a href="{{ route('item.index') }}" class="btn btn-danger">Back</a>
                                        <button type="submit" class="btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')

@endpush
