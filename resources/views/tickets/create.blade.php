@extends('master')
@section('title','Create a ticket')

@section('content')
    <center><h1>Ticket system</h1></center>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif

    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br/>
    @endif
    <hr>
    <div class="container col-md-8 col-md-offset-2" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html">
        <div class="card-mt-5">
            <div class="card-header">
                <h5 class="float-left">Create a Ticket</h5>
                <div class="clearfix"></div>
            </div>


            <div class="card-bordy mt-2">
                <form method="post">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label for="title" class="col-lg-12" control-label>Title</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-lg-12" control-label>Content</label>
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                                <span class="help-block">Feel free to ask any Questions</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
