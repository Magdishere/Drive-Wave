<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/About_trans.Add About Section')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('CarsBrands.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard/About_trans.Title')}}</label>
                    <input type="text" name="title" class="form-control">
                    <label for="image_path">{{trans('Dashboard/About_trans.Main Image')}}</label>
                    <input type="file" name="image_path" id="image_path" accept="image/*" class="form-control">
                    <label for="exampleInputPassword1">{{trans('Dashboard/About_trans.Paragraph')}}</label>
                    <input type="text" name="paragraph" class="form-control">
                    <label for="icon_image">{{trans('Dashboard/About_trans.Icon Image')}}</label>
                    <input type="file" name="icon_image" id="logo_path" accept="image/*" class="form-control">
                    <label for="exampleInputPassword1">{{trans('Dashboard/About_trans.Info')}}</label>
                    <input type="text" name="info" class="form-control">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/About_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/About_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
