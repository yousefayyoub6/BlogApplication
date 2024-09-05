<!-- Edit User Information -->
<div class="modal fade" id="Edit_Post{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    Edit Post
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-left">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-body">
                <form action="{{ route('post.update', 'test') }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $post->id }}">

                    <div class="col-md-12 mb-4">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" value="{{ $post->title }}" id="title" name="title"
                            class="form-control" />
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control" id="content" rows="3">{{ $post->content }}</textarea>
                    </div>
                    <div class="modal-footer float-start">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cansel</button>
                        <button type="submit" class="btn btn-primary"> Save Edit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
