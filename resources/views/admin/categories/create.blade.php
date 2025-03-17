@extends('layouts.admin')

@section('content')
<div class="py-2">
    <form action="{{ route('admin.categories.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <input type="submit" value="حفظ" class="btn btn-info">
        </div>
    </form>
</div>
@endsection
