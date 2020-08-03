@extends('admin.layout')

@section('content')
    
@php
    $formTitle = !empty($product) ? 'Update' : 'Baru'    
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-3">
            @include('admin.products.product_menus')
        </div>
        <div class="col-lg-9">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>Produk {{ $formTitle }}</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.flash', ['$errors' => $errors])
                    @if (!empty($product))
                        {!! Form::model($product, ['url' => ['admin/products', $product->id], 'method' => 'PUT']) !!}
                        {!! Form::hidden('id') !!}
                        {!! Form::hidden('type') !!}
                    @else
                        {!! Form::open(['url' => 'admin/products']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('type', 'Tipe') !!}
                            {!! Form::select('type', $types , !empty($product) ? $product->type : null, ['class' => 'form-control product-type', 'placeholder' => '-- pilih tipe produk --', 'disabled' => !empty($product)]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('sku', 'SKU') !!}
                            {!! Form::text('sku', null, ['class' => 'form-control', 'placeholder' => 'sku']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Nama') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nama']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_ids', 'Kategori') !!}
                            {!! General::selectMultiLevel('category_ids[]', $categories, ['class' => 'form-control', 'multiple' => true, 'selected' => !empty(old('category_ids')) ? old('category_ids') : $categoryIDs, 'placeholder' => '-- pilih kategori --']) !!}
                        </div>
                        <div class="configurable-attributes">
                            @if (!empty($configurableAttributes) && empty($product))
                                <p class="text-primary mt-4">konfigurasi Atrribute</p>
                                <hr/>
                                @foreach ($configurableAttributes as $attribute)
                                    <div class="form-group">
                                        {!! Form::label($attribute->code, $attribute->name) !!}
                                        {!! Form::select($attribute->code. '[]', $attribute->attributeOptions->pluck('name','id'), null, ['class' => 'form-control', 'multiple' => true]) !!}
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        @if ($product)
                            @if ($product->type == 'configurable')
                                @include('admin.products.configurable')
                            @else
                                @include('admin.products.simple')                            
                            @endif

                            <div class="form-group">
                                {!! Form::label('short_description', 'Deskripsi Singkat') !!}
                                {!! Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'deskripsi singkat']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description', 'Deskripsi') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'deskripsi']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::select('status', $statuses , null, ['class' => 'form-control', 'placeholder' => '-- Set Status --']) !!}
                            </div>
                        @endif
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                            <a href="{{ url('admin/products') }}" class="btn btn-secondary btn-default">Kembali</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection