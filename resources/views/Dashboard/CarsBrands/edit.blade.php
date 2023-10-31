<!-- Modal -->
<div class="modal fade" id="edit{{ $brand->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/carsbrands_trans.Edit Section')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('CarsBrands.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $brand->id }}">
                    <label for="exampleInputPassword1">{{trans('Dashboard/carsbrands_trans.Brand Name')}}</label>
                    <input type="text" name="name" value="{{ $brand->name }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/carsbrands_trans.Country')}}</label>
                    <input type="text" name="country" value="{{ $brand->country }}" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/carsbrands_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/carsbrands_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
