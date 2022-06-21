@extends('layouts.app')
    @section('content')
        <link rel="stylesheet" href="{{ asset('css/supportShow.css') }}">

        <div class="top-box">
          <a class="fancy" href="{{ route('supportCreate') }}">
              <span class="top-key"></span>
              <span class="text">Support Create</span>
              <span class="bottom-key-1"></span>
              <span class="bottom-key-2"></span>
          </a>
          <a class="fancy" href="{{ route('view') }}">
              <span class="top-key"></span>
              <span class="text">一覧画面へ戻る</span>
              <span class="bottom-key-1"></span>
              <span class="bottom-key-2"></span>
          </a>
        </div>

        <div class="second-box">
            <div class="title">
                <p>Trouble View</p>
            </div>

            <div class="contents">
              <form method="POST" action="/edit">
                @csrf
                <table>
                    <tr>
                      <th>Support ID</th>
                      <td>{{ $support -> support_id }}</td>
                    </tr>
                    <tr>
                      <th>担当者</th>
                      <td>{{ $support -> user_id }}</td>
                    </tr>
                    <tr>
                      <th>施設名</th>
                      <td>
                        <input id="facility_name" type="text" class="form-control @error('facility_name') is-invalid @enderror" name="facility_name" value="{{  $support -> facility_name  }}" required autocomplete="facility_name" autofocus>

                        @error('facility_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </td>
                    </tr>
                    <tr>
                      <th>部門名</th>
                      <td>
                        <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ $support -> department }}" required autocomplete="department" autofocus>

                        @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                      </td>
                    </tr>
                    <tr>
                      <th>トラブルタイトル</th>
                      <td>
                        <input id="trouble_title" type="text" class="form-control @error('trouble_title') is-invalid @enderror" name="trouble_title" value="{{ $support -> trouble_title }}" required autocomplete="trouble_title" autofocus>

                        @error('trouble_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </td>
                    </tr>
                    <tr>
                      <th>トラブル内容</th>
                      <td>
                        <input id="trouble_content" type="text" class="form-control @error('trouble_content') is-invalid @enderror" name="trouble_content" value="{{ $support -> trouble_content }}" required autocomplete="trouble_content" autofocus>

                        @error('trouble_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </td>
                    </tr>
                    <tr>
                      <th>発生日</th>
                      <td>{{ $support -> accrual_date }}</td>
                    </tr>
                </table>
                <div class="trigger">
                      <button class="update-btn"><span class="text">Finished</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
                </div>
              </form>
            </div>
        </div>
    @endsection
