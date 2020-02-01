

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @php /** @var \App\Thread $thread */@endphp
                    <div class="card-header">{{$thread->title}}</div>
                    <div class="card-body">
                        <article>
                            <div class="text-body">
                                {{ $thread->body }}
                            </div>
                        </article>
                        <hr>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @foreach($thread->replies as $reply)
                            <div class="card">
                                <div class="card-header">{{$reply->owner->name}} said {{$reply->created_at->diffForHumans()}}</div>

                                <div class="card-body">
                                    <div class="text-body">
                                        {{ $reply->body }}
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
