<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/carsbrands_trans.Add Brand')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('CarsBrands.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard/carsbrands_trans.Brand Name')}}</label>
                    <input type="text" name="name" class="form-control">
                    <label for="exampleInputPassword1">{{trans('Dashboard/carsbrands_trans.Country')}}</label>
                    <input type="text" name="country" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/carsbrands_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/carsbrands_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
