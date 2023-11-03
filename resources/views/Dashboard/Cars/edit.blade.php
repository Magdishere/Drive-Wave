<!-- Modal -->
<div class="modal fade" id="edit{{ $car->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/cars_trans.Edit Car')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Cars.update', 'test') }}" method="post" enctype="multipart/form-data">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $brand->id }}">
                    <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Brand Name')}}</label>
                    <input type="text" name="name" value="{{ $brand->name }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Country')}}</label>
                    <input type="text" name="country" value="{{ $brand->country }}" class="form-control">
                    <br>
                    <label for="logo_path">{{trans('Dashboard/cars_trans.Brand Logo')}}</label>
                    <input type="file" name="logo_path" id="logo_path" accept="image/*" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/cars_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/cars_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
