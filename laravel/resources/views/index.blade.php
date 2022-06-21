@extends('layouts.app')
    @section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <div class="top-box">
        <a class="fancy" href="{{ route('supportCreate') }}">
            <span class="top-key"></span>
            <span class="text">Support Create</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
        </a>
    </div>

    <div class="second-box">
        <div class="title">
            <p>Support View</p>
        </div>
        <div class="second-contents">
            <table>
                <tr>
                    <th>施設名</th>
                    <th>トラブル発生日</th>
                    <th>タイトル</th>
                </tr>
                @foreach ($supports as $support)
                    <tr>
                        <td>{{ $support -> facility_name }}</td>
                        <td>{{ $support -> accrual_date }}</td>
                        <td><a href=" {{ route('supportShow', [$support->support_id]) }}">{{ $support -> trouble_title }}</a></td>
                        
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection
