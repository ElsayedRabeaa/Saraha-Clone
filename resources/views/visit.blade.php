@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4>عرض وقت الرسايل</h4>
            <div class="card p-3" >
                @forelse ($visits as $visit)
              <p>{{\Carbon\Carbon::make($visit->created_at)->diffForHumans()}}</p>
                    
                @empty
                    <p style="text-align: center;">there arenot Any Messages</p>
                @endforelse
            </div>
        
        </div>
    </div>
</div>
@endsection
