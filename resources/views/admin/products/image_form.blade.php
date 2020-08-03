@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-4">
            @include('admin.products.product_menus')
        </div>
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>Upload Gambar</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.flash', ['$errors' => $errors])
                    {!! Form::open(['url' => ['admin/products/images', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {!! Form::label('image', 'Gambar Produk') !!}
                        {!! Form::file('image', ['class' => 'form-control-file', 'placeholder' => 'gambar produk']) !!}
                    </div>
                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                        <a href="{{ url('admin/products/'.$productID.'/images') }}" class="btn btn-secondary btn-default">Kembali</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection