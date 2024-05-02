@extends('Admin.layouts.app')

@section('content')
    <div class="container">
        <h2>Chỉnh sửa thông tin khách sạn</h2>
        <form action="{{ route('Admin.hotels.update', $hotel->hotel_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $hotel->name }}" required>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $hotel->address }}"
                    required>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" step="0.1" class="form-control" id="rating" name="rating"
                    value="{{ $hotel->rating }}" required>
            </div>
            <div class="form-group">
                <label for="amenities">Tiện ích:</label>
                <input type="text" class="form-control" id="amenities" name="amenities" value="{{ $hotel->amenities }}"
                    required>
            </div>
            <div class="form-group">
                <label for="hotel_images">Hình ảnh:</label>
                <input type="file" class="form-control-file" id="hotel_images" name="hotel_images">
            </div>
            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $hotel->price }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
