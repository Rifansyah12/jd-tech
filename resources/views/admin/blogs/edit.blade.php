@extends('admin.layouts.app')
@section('title', 'Edit Artikel Blog')
@section('page-title', 'Edit Artikel Blog')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-edit" style="color: #00f2fe; margin-right: 10px;"></i>Edit Artikel Blog</h2>
    <a href="{{ route('admin.blogs.index') }}" class="btn-outline">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

@if($errors->any())
    <div class="alert-error">
        <i class="fas fa-exclamation-circle"></i>
        <ul style="margin: 5px 0 0 15px;">
            @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('admin.blogs._form', ['blog' => $blog, 'buttonLabel' => 'Update Artikel'])
</form>

@endsection
