<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/services_trans.Add Services')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Services.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard/services_trans.Name')}}</label>
                    <input type="text" name="name" class="form-control">
                    <label for="exampleInputPassword1">{{trans('Dashboard/services_trans.Description')}}</label>
                    <input type="text" name="description" class="form-control">
                    <label for="exampleInputPassword1">{{trans('Dashboard/services_trans.Price')}}</label>
                    <input type="number" name="price" class="form-control">
                    <label for="image_path">{{trans('Dashboard/services_trans.Image')}}</label>
                    <input type="file" name="image_path" id="image_path" accept="image/*" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/services_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/services_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
