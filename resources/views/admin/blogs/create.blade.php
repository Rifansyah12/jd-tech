@extends('admin.layouts.app')
@section('title', 'Tambah Artikel Blog')
@section('page-title', 'Tambah Artikel Blog')

@section('content')

<div class="page-header">
    <h2><i class="fas fa-plus-circle" style="color: #00f2fe; margin-right: 10px;"></i>Tambah Artikel Blog</h2>
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

<form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
    @csrf
    @include('admin.blogs._form', ['blog' => null, 'buttonLabel' => 'Simpan Artikel'])
</form>

@endsection
