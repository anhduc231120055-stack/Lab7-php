@extends('layouts.master')

@section('title', 'Danh sách sản phẩm')

@section('content')

<h2>Danh sách sản phẩm</h2>

<table class="table table-bordered">
    <tr>
        <th>Tên</th>
        <th>Giá</th>
    </tr>

    @foreach ($products as $p)
    <tr>
        <td>{{ $p['name'] }}</td>
        <td>
            @if($p['price'] > 10000000)
                <span class="text-danger">
                    {{ number_format($p['price']) }} đ (Vip)
                </span>
            @else
                {{ number_format($p['price']) }} đ
            @endif
        </td>
    </tr>
    @endforeach

</table>

@endsection