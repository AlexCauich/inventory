@extends('admin.master')

@section('title', 'Add Product')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/products') }}" class="nav-link"><i class="fas fa-boxes"></i> Product</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/products') }}" class="nav-link"><i class="fas fa-plus"></i> Add product</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fas fa-plus"></i> Add product</h2>
            </div>
            <div class="inside">
                {!! Form::open(['url' => '/admin/product/add']) !!}
                    <div class="row">

                        <div class="col-md-6">
                            <label for="title">Name product:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-keyboard"></i></span>
                                </div>
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="title">Category:</label>
                        </div>

                        <div class="col-md-3">
                            <label for="title">Image:</label>
                            <div class="custom-file">
                                {!! Form::file('img', ['class' => 'custom-file-input', 'id' => 'customfile']) !!}
                                <label class="custom-file-label" for="customfile">Image</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mtop16">
                        <div class="col-md-3">
                            <label for="price">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-keyboard"></i></span>
                                </div>
                                {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="price">Off sale?</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-keyboard"></i></span>
                                </div>
                                {!! Form::select('discount', ['0' => 'No', '1' => 'Si'], 0, ['class' => 'custom-select']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row mtop16">
                        <div class="col-md-12">
                            <label for="content">Description</label>
                            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
    