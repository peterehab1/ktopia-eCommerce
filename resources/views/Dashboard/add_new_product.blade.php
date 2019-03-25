@extends('Dashboard/base')
@section('title', 'Add Product')
@section('content')
      
<main role="main" class=" main-section col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">أضافة منتج جديد</h1>

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

      @if(Session::has('message-image-big'))
          <p class="alert alert-danger">{{ Session::get('message-image-big') }}</p>
      @endif


  </div>

<form enctype="multipart/form-data" action="{{ route('save_new_product') }}" method="POST">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleFormControlInput1">أسم المنتج *</label>
      <input required type="text" name="product_name" class="form-control" id="exampleFormControlInput1" placeholder="مثال : تيشرت">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">وصف المنتج *</label>
      <textarea name="product_body" required placeholder="مثال : أضف وصف للمنتج هنا" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">قسم المنتج *</label>
      <select name="product_category" class="form-control" id="exampleFormControlSelect1">
        @foreach ($categories as $c)
      <option value="{{ $c->id }}">{{ $c->name_ar }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">سعر المنتج *</label>
      <input name="product_price" required type="number" step="0.01" name="product_price" class="form-control" id="exampleFormControlInput1" placeholder="مثال : 75 جنية">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">ألوان المنتج</label>
      <input placeholder="أزرق, أحمر, أخضر" name="product_colors" type="text" id="exampleFormControlInput1" class="form-control">
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlTextarea1">أحجام المنتج</label>
      <input placeholder="صغير, متوسط, أكس لارج" name="product_sizes" type="text" id="exampleFormControlInput1" class="form-control">
    </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">صورة المنتج 1 *</label>
        <input name="product_image1" required type="file" class="form-control-file" id="exampleFormControlFile1">
        <small>3M max</small>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">صورة المنتج 2</label>
        <input name="product_image2" type="file" class="form-control-file" id="exampleFormControlFile1">
        <small>3M max</small>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">صورة المنتج 3</label>
        <input name="product_image3" type="file" class="form-control-file" id="exampleFormControlFile1">
        <small>3M max</small>
      </div>

      <hr>
      <button type="submit" class="btn btn-primary mb-2">أضف منتج جديد</button>
    
    
  </form>

</main>

@endsection