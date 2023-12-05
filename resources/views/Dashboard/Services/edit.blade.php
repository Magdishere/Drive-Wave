<!-- Modal -->
<div class="modal fade" id="edit{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/services_trans.Edit Service')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Services.update', 'test') }}" method="post" enctype="multipart/form-data">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $service->id }}">
                    <label for="exampleInputPassword1">{{trans('Dashboard/services_trans.Name')}}</label>
                    <input type="text" name="name" value="{{ $service->name }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/services_trans.Description')}}</label>
                    <input type="text" name="description" value="{{ $service->description }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/services_trans.Price')}}</label>
                    <input type="number" name="price" value="{{ $service->price }}" class="form-control">
                    <br>
                    <label for="image_path">{{trans('Dashboard/services_trans.Image')}}</label>
                    <input type="file" name="image_path" id="image_path" accept="image/*" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/services_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/services_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
