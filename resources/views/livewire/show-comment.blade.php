<div class="row d-flex justify-content-center">
    <div class="col-md-12">
        <!-- Load More Button -->
        @if ($comments->count() >= $commentsCount)
            <button class="btn mb-2 fs-5" wire:click="loadMore">Load More <i
                    class="fa-solid fa-arrows-rotate"></i></button>
        @endif
        @foreach ($comments as $comment)
            <div class="card shadow">
                <div class="card-body">
                    @if ($comment->id == $comment_id)
                        <input type="text" id="addANote" wire:model='oldComment' class="form-control"
                            placeholder="Type comment..." />
                        <div class="d-flex mt-2 mb-2">
                            <button class="btn " wire:click ="update()"><i class="fas fa fa-check"></i></button>
                            <button class="btn " wire:click ="cancelEdit()"><i class="fas fa fa-close"></i></button>
                        </div>
                    @else
                        <p class="mb-5"><i class="fa-regular fa-user fs-2"></i> {{ $comment->user->first_name }}
                            {{ $comment->user->last_name }} </p>
                        <p>{{ $comment->comment }}</p>
                        @if (Auth::check() && Auth::user()->id == $comment->user_id && $comment->id == !$comment_id)
                            <div class="d-flex ">
                                <button class="btn" wire:click='edit({{ $comment->id }})'>Edit</button>
                                <button class="btn" wire:click='delete({{ $comment->id }})'>Remove</button>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
            <hr>
        @endforeach
        @auth
            <form wire:submit.prevent="addComment">
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="addANote" wire:model='newComment' class="form-control"
                        placeholder="Type comment..." />
                </div>
                <button class="btn" type="submit"><i class="fa-solid fa-plus"></i> Comment</button>
               
            </form>
            @error('newComment')
            <span class="text-danger fs-5">{{ $message }}</span>
        @enderror
        @else
            <a style="color: red;" class="text-center" href="{{ route('login') }}">Please Login to be able to comment.</a>
        @endauth
    </div>
</div>
