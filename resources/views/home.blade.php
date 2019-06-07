@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{asset('home')}}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field()!!}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" name="price" id="exampleInputEmail1" placeholder="price">
                            </div>
                            <div class="form-group">
                                <label for="input__sale">Sale</label>
                                <input type="text" class="form-control" name="sales" id="input__sale" placeholder="sale">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="body" id="exampleInputPassword1">description</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Section</label>
                                <select id="exampleSelectSection" name="section">
                                    <option value="man">Man</option>
                                    <option value="woman">Woman</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">image input</label>
                                <input name='picture1' type="file" id="exampleInputFile">
                                <p class="help-block">image</p>
                            </div>
                            <button type="submit" name='sub' class="btn btn-default">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
