<!-- resources/views/hotels/index.blade.php -->

@extends('Admin.layouts.app')

@section('content')
    <div class="container" style="padding-top: 20px mb-2">
        <h2>Danh sách khách sạn</h2>
        <a href="{{ route('Admin.hotels.create') }}" class="btn btn-primary mb-3">Thêm
            mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th style="background-color: aqua" scope="col">#</th>
                    <th style="background-color: aqua" scope="col">Tên</th>
                    <th style="background-color: aqua" scope="col">Địa chỉ</th>
                    <th style="background-color: aqua" scope="col">Bình chọn</th>
                    <th style="background-color: aqua" scope="col">Tiện ích</th>
                    <th style="background-color: aqua" scope="col">Hình ảnh</th>
                    <th style="background-color: aqua" scope="col">Giá</th>
                    <th style="background-color: aqua" scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <th style="background-color: beige" scope="row">{{ $hotel->hotel_id }}</th>
                        <td style="background-color: beige">{{ $hotel->name }}</td>
                        <td style="background-color: beige">{{ $hotel->address }}</td>
                        <td style="background-color: beige">{{ $hotel->rating }}</td>
                        <td style="background-color: beige">{{ $hotel->amenities }}</td>
                        <td style="background-color: beige">
                            <img src="{{ asset('assests/images/' . $hotel->hotel_images) }}" alt="hotel img">
                        </td>
                        <td style="background-color: beige">{{ $hotel->price }}$/night</td>

                        <td style="background-color: beige">
                            <a style="padding: 8px" href="{{ route('Admin.hotels.edit', $hotel->hotel_id) }}"
                                class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> chỉnh sửa
                            </a>
                            <form action="{{ route('Admin.hotels.delete', $hotel->hotel_id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button style="padding: 8px;" type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Bạn chắc chắn muốn xóa?')">
                                    <i class="fas fa-trash-alt"></i> Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                @if ($hotels->onFirstPage())
                    <!-- Nút không hoạt động khi ở trang đầu tiên -->
                    <span><i class="fas fa-arrow-left fa-sm"></i></span>
                @else
                    <!-- Nút chuyển đến trang trước -->
                    <a href="{{ $hotels->previousPageUrl() }}"><i class="fas fa-arrow-left fa-sm"></i></a>
                @endif
            </div>

            <div>
                @for ($i = 1; $i <= $hotels->lastPage(); $i++)
                    <a class="pt-3 pb-2 pl-3 pr-3 bg-secondary text-dark m-2 {{ $i == $hotels->currentPage() ? 'bg-info text-white' : '' }}"
                        href="{{ $hotels->url($i) }}">{{ $i }}</a>
                @endfor
            </div>

            <div>
                Trang {{ $hotels->currentPage() }} / {{ $hotels->lastPage() }}
            </div>

            <div>
                @if ($hotels->hasMorePages())
                    <a href="{{ $hotels->nextPageUrl() }}"><i class="fas fa-arrow-right fa-sm"></i></a>
                @else
                    <span><i class="fas fa-arrow-right fa-sm"></i></span>
                @endif
            </div>
        </div>

    </div>
@endsection
