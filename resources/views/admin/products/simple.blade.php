<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('price', 'Harga') !!}
            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'price']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('weight', 'berat(kg)') !!}
            {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => 'weight']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('qty', 'Qty Inventory') !!}
            {!! Form::text('qty', null, ['class' => 'form-control', 'placeholder' => 'qty']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('length', 'panjang(cm)') !!}
            {!! Form::text('length', null, ['class' => 'form-control', 'placeholder' => 'panjang']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('width', 'lebar(cm)') !!}
            {!! Form::text('width', null, ['class' => 'form-control', 'placeholder' => 'lebar']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('height', 'tinggi(cm)') !!}
            {!! Form::text('height', null, ['class' => 'form-control', 'placeholder' => 'height']) !!}
        </div>
    </div>
</div>