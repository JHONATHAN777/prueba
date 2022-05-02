<div class="box box-info padding-1">
    <div class="box-body">
        
     

        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::select('category_id', $categories , $product->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('article') }}
            {{ Form::text('article', $product->article, ['class' => 'form-control' . ($errors->has('article') ? ' is-invalid' : ''), 'placeholder' => 'Article']) }}
            {!! $errors->first('article', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>