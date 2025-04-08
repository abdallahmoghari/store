@extends('layouts.admin')
@section('content')

<div class="py-5">
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">إضافة منتج جديد</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم المنتج</th>
            <th scope="col">الصنف</th>
            <th scope="col">السعر</th>
            <th scope="col">الكمية</th>
            <th scope="col">added by</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->user->name ?? 'Unknown' }}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info">تعديل</a>
                <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>

@endsection
