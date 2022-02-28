@extends('master')

@section('title')
    Calculator
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="font-weight-bold text-center">Calculator</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('get-calculator-result')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">First Number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="first_number" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Last Number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="last_number" required/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Options</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" class="" name="option" value="+" /> Add </label>
                                        <label for=""><input type="radio" class="" name="option" value="-" /> Sub </label>
                                        <label for=""><input type="radio" class="" name="option" value="*" /> Mul </label>
                                        <label for=""><input type="radio" class="" name="option" value="/" /> Div </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="result" value="{{Session::has('result') ? Session::get('result'): ''}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="" value="Get Result" class="btn btn-outline-success btn-block " />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



