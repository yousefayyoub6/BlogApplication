<!-- Modal -->
<div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Post ({{ $post->title }}) </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('post.destroy', 'test') }}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="id" value="{{ $post->id }}">

                    <h5>Are you sure you want to delete the post ?</h5>

                    <div class="modal-footer float-start">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cansel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
