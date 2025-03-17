@extends('layouts.admin')

@section('content')
<div class="py-2">
    <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="mb-3">
            <input type="submit" value="تحديث" class="btn btn-info">
        </div>
    </form>
</div>
@endsection
