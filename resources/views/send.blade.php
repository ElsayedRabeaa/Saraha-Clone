@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- @if(\Auth::id()== $user->id)
                <div class="card-header">The Message To Not Allowed</div>
                @else --}}
                @if(session()->has('save'))
                <div class="alert alert-success">{{session()->get('save')}}</div>
                <div class="card-header">The Message To : {{ $user->name }}</div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('store_message',$user->id)}}" method="post">
                        @csrf
                        <div class="form-group">

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الرسالة</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit"   class="btn btn-primary">ارسال</button>
                    </form>
                </div>

                {{-- @endif --}}
            </div>
        </div>
    </div>
</div>
@endsection
