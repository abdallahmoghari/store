@extends('layouts.admin')

@section('content')
<div class="py-5">
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">إضافة صنف جديد</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم الصنف</th>
                <th scope="col">الوصف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info">تعديل</a>
                    <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST" class="d-inline">
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
