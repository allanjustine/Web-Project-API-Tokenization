@php
    use App\Models\Likes;
@endphp

@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h4>Posts</h4>
    </div>
    <div class="col-lg-6 offset-lg-3">
        @foreach ($posts as $item)
        <div class="card card-outline card-primary">
            <div class="card-header">
                <span class="card-title">{{ $item->title }}</span>
            </div>
            <div class="card-body">
                <p>{{ $item->description }}</p>
            </div>
            <div class="card-footer">
                @php
                    $likes = Likes::where('post_id', $item->id)
                                ->where('user_id', Auth::id())
                                ->get();
                @endphp
                @if (count($likes) < 1)
                    <button onclick="like({{ $item->id }})" class="btn text-info"><i id="heart-{{ $item->id }}" class="far fa-heart"></i> {{ $item->Likes }}</span></button>
                @else
                    <button onclick="like({{ $item->id }})" class="btn text-info"><i id="heart-{{ $item->id }}" class="fas fa-heart"></i> <span id="like-{{ $item->id }}" >{{ $item->Likes }}</span></button>
                @endif

                <button id="share" class="btn text-danger"><i class="fas fa-share-alt"></i></button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('page_scripts')
    <script>
        $(document).ready(function() {

        });

        function like(id) {
            $.ajax({
                url : '/likes/un-like',
                type : 'GET',
                data : {
                    post_id : id,
                    user_id : "{{ Auth::id() }}",
                },
                success : function(result) {
                    var data = JSON.parse(result);

                    if (data['result'] == 'liked') {
                        addLike(id);
                        window.location.reload();
                    } else {
                        window.location.reload();
                    }
                },
                error : function(error) {
                    alert('Error liking sheeeeeeet');
                }
            });
        }

        function addLike(id) {
            $.ajax({
                url : '/likes/like',
                type : 'POST',
                data : {
                    _token : "{{ csrf_token() }}",
                    post_id : id,
                },
                success : function(response) {
                    $('#heart-' + id).removeClass('far fa-heart').addClass('fas fa-heart');
                    var increment = parseInt($('#like-' + id).text()) + 1;
                    $('#like-' + id).text(increment);
                },
                error : function(error) {
                    alert('Error liking this bitch!');
                }
            });
        }
    </script>
@endpush
