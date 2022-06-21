@extends('layouts.app')
    @section('content')
    <link rel="stylesheet" href="{{ asset('css/supportShow.css') }}">
    <div class="top-box">
        <a class="fancy" href="{{ route('index') }}">
            <span class="top-key"></span>
            <span class="text">一覧画面へ戻る</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
        </a>
    </div>

    <div class="title">
        <p>Support 登録</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/support">
                        @csrf

                        {{-- 施設名 --}}
                        <div class="form-group row">
                            <label for="facility_name" class="col-md-4 col-form-label text-md-right">{{ __('施設名') }}</label>

                            <div class="col-md-6">
                                <input id="facility_name" type="text" class="form-control @error('facility_name') is-invalid @enderror" name="facility_name" value="{{ old('facility_name') }}" required autocomplete="facility_name" autofocus>

                                @error('facility_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- 部門名 --}}
                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('部門名') }}</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department" autofocus>

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- トラブルタイトル --}}
                        <div class="form-group row">
                            <label for="trouble_title" class="col-md-4 col-form-label text-md-right">{{ __('トラブルタイトル') }}</label>

                            <div class="col-md-6">
                                <input id="trouble_title" type="text" class="form-control @error('trouble_title') is-invalid @enderror" name="trouble_title" value="{{ old('trouble_title') }}" required autocomplete="trouble_title" autofocus>

                                @error('trouble_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- トラブル内容 --}}
                        <div class="form-group row">
                            <label for="trouble_content" class="col-md-4 col-form-label text-md-right">{{ __('トラブル内容') }}</label>

                            <div class="col-md-6">
                                <input id="trouble_content" type="text" class="form-control @error('trouble_content') is-invalid @enderror" name="trouble_content" value="{{ old('trouble_content') }}" required autocomplete="trouble_content" autofocus>

                                @error('trouble_content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        {{-- 発生日 --}}
                        <div class="form-group row">
                            <label for="accrual_date" class="col-md-4 col-form-label text-md-right">{{ __('発生日') }}</label>

                            <div class="col-md-6">
                                <input id="accrual_date" type="date" class="form-control @error('accrual_date') is-invalid @enderror" name="accrual_date" value="{{ old('accrual_date') }}" required autocomplete="accrual_date">

                                @error('accrual_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4">
                            <div class="trigger">
                                <button class="create-btn"><span class="text">Create</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
