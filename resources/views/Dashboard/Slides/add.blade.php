<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/slides_trans.Add Slides')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Slides.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard/slides_trans.Title')}}</label>
                    <input type="text" name="title" class="form-control">
                    <label for="exampleInputPassword1">{{trans('Dashboard/slides_trans.Subtitle')}}</label>
                    <input type="text" name="sub_title" class="form-control">
                    <label for="image_path">{{trans('Dashboard/slides_trans.Slide Image')}}</label>
                    <input type="file" name="image_path" id="image_path" accept="image/*" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/slides_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/slides_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
