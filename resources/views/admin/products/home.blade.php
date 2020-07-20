@extends('admin.master')

@section('title', 'Products')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/products') }}" class="nav-link"><i class="fas fa-boxes"></i> Products</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fas fa-boxes"></i> Products</h2>
            </div>
            <div class="inside">

                <div class="btns">
                    <a href="{{ url('/admin/product/add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add product</a>
                </div>

                <table class="table">
                   
                </table>
            </div>
        </div>
    </div>
@endsection
    