<!-- Modal -->
<div class="modal fade" id="edit{{ $slide->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/slides_trans.Edit Slide')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Slides.update', 'test') }}" method="post" enctype="multipart/form-data">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $slide->id }}">
                    <label for="exampleInputPassword1">{{trans('Dashboard/slides_trans.Title')}}</label>
                    <input type="text" name="title" value="{{ $slide->title }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/slides_trans.Subtitle')}}</label>
                    <input type="text" name="sub_title" value="{{ $slide->sub_title }}" class="form-control">
                    <br>
                    <label for="image_path">{{trans('Dashboard/slides_trans.Slide Image')}}</label>
                    <input type="file" name="image_path" value="{{ $slide->image_path}}" id="image_path" accept="image/*" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/slides_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/slides_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
