<h1>Add Products</h1>
<h2>{{!empty($message) ? $message : ''}}</h2>
{!! Form::open(['url' => '/lp-admin/add-product', 'files' => true]) !!}
<div class="form-group">
    {{ Form::label('Product Name:', null) }}
    {{ Form::text('p_name', '', ['placeholder' => '']) }}
</div>
<div class="form-group">
    {{ Form::label('Products Descriptions:', null) }}
    {{ Form::textarea('p_description', '', ['placeholder' => '' , 'class' => 'user_name']) }}
</div>
<div class="form-group">
    {{ Form::label('Select Brand:', null) }}
    {{ Form::select('p_brand', ['HP', 'Dell', 'Acer', 'Apple' , 'Sony' , 'Samsung']) }}
</div>
<!--<div class="form-group">
    {{ Form::label('Select Color:', null) }}
    {{ Form::select('p_brand', ['Black', 'White', 'Blue', 'purple' , 'gold']) }}
</div>
<div class="form-group">
    {{ Form::label('Select Rom:', null) }}
    {{ Form::select('p_brand', ['32GB', 'White', 'Blue', 'purple' , 'gold']) }}
</div>-->
<div class="form-group">
    {{ Form::label('Select Category:', null) }}
    {{ Form::select('p_category', ['Mobile Phones', 'Desktop' , 'Laptop' , 'Accessories' , 'Sports &amp; Fitness' , 'Footwear','Jewellery','Beauty &amp; Healthcare']) }}
</div>
<!--<div class="form-group">
    {{ Form::label('wronty_s', 'Start Wranty Date:') }}
    {{ Form::date('wronty_s', \Carbon\Carbon::now()) }}
</div>
<div class="form-group">
    {{ Form::label('wranty_e', 'End Wranty Date:') }}
    {{ Form::date('wranty_e', \Carbon\Carbon::now()) }}
</div>-->
<div class="form-group">
    {{ Form::label('Products Quantity:', null) }}
    {{ Form::text('p_quantity', '', ['placeholder' => '']) }}
</div>
<div class="form-group">
    {{ Form::label('Product Image:', null) }}
    {{ Form::file('p_image') }}
</div>
{{ Form::submit('Add Product' , ['class' => 'btn btn-success']) }}

{!! Form::close() !!}