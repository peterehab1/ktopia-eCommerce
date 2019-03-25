@extends('Dashboard/base')
@section('title', 'All Products')
@section('content')
      
<main role="main" class=" main-section col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h1 class="h2"> قائمة المنتجات </h1>
  </div>

  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">الأسم</th>
          <th scope="col">السعر</th>
          <th scope="col">القسم</th>
          <th scope="col">ألوان</th>
          <th scope="col">أحجام</th>
          <th scope="col">الحالة</th>
          <th scope="col">عمليات</th>
          
        </tr>
      </thead>
      <tbody>

       @foreach ($products as $p)
            <tr>
                <th scope="row"> {{ $p->id }} </th>
                <td>{{ $p->name_ar }}</td>
                <td>{{ $p->price }}</td>
                <td>{{ $p->category->name_ar }}</td>
                <td>{{ $p->colors }}</td>
                <td>{{ $p->sizes }}</td>

                <td>
                    @if ($p->status == 1)
                        <span class="badge badge-success">متاح</span>
                    @else
                        <span class="badge badge-danger">غير متاح</span>
                    @endif
                </td>

                <td>Cell</td>
            </tr>
        
       @endforeach

      </tbody>
    </table>
  </div>
    
</main>

@endsection