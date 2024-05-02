@extends('Admin.layouts.app')

@section('content')
    <div class="container">
        <h2>Thêm mới khách sạn</h2>
        <form action="{{ route('Admin.hotels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" step="0.1" class="form-control" id="rating" name="rating">
            </div>
            <div class="form-group">
                <label for="amenities">Tiện ích:</label>
                <textarea class="form-control" id="amenities" name="amenities" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="hotel_images">Hình ảnh:</label>
                <input type="file" class="form-control-file" id="hotel_images" name="hotel_images">
            </div>
            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection
