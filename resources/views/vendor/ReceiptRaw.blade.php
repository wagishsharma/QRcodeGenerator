@extends('layouts.app')

	@section('content')
 <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Product Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="product-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="col-sm-3 control-label">URL</label>

                <div class="col-sm-6">
                    <input type="text" name="url" id="product-id" class="form-control">
                </div>
            </div>
             <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endif
@endsection