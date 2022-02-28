@extends('master')

@section('title')
    Get Full-Name
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-body">
                        <form action="{{route('get-full-name')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="first_name" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="last_name" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="result" value="{{isset($fullName) ? $fullName: ''}}" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="" value="Get Full Name" class="btn btn-outline-success btn-block " />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </section>
@endsection


