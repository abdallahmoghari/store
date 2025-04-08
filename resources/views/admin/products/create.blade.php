@extends('layouts.admin')
@section('content')
<div class="py-2">
    <form action="{{ route('admin.products.store') }}" method="post">
   @csrf
   <div class="mb-3">
   <label for="name" class="form-label">اسم المنتج</label>
   <input type="text" class="form-control" id="name" name="name" required>
   </div>

   <div class="mb-3">
   <label for="quantity" class="form-label">الكمية </label>
   <input type="number" class="form-control" id="quantity" name="quantity" required>
   </div>

   <div class="mb-3">
   <label for="price" class="form-label">السعر  </label>
   <input type="number" class="form-control" id="price" name="price" required>
   </div>

   <div class="mb-3">
   <label for="description" class="form-label">وصف المنتج</label>
   <textarea class="form-control" id="description" name="description"></textarea>
   </div>

   <div class="mb-3">
    <label for="category" class="form-label">اختر الصنف</label>
    <select class="form-control" name="category_id" id="category" required>
        <option value="">اختر الصنف</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    </div>

   <div class="mb-3">
    <input type="submit" value="حفظ" class="btn btn-info">
   </div>
</form>
</div>
@endsection
