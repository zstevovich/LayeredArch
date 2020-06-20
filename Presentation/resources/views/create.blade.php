@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create post</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="col-md-6">
                                <label>
                                    Title:<input class="form-control" type="text" name="tittle">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    Text:<textarea class="form-control" name="text"></textarea>
                                </label>

                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@stop
