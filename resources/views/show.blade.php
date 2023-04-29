@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4>عرض الرسايل</h4>
            <div class="card p-3" >
                <h5>عرض الزيارات : <a href="{{route('visit')}}">{{$visits}}</a></h5>
                @forelse ($msgs as $item)
              <p>{{$item->message}}</p>
                    
                @empty
                    <p style="text-align: center;">there arenot Any Messages</p>
                @endforelse
            </div>
            {{ $msgs->links() }}
        </div>
    </div>
</div>
@endsection
