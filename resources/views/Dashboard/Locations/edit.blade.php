<!-- Modal -->
<div class="modal fade" id="edit{{ $location->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/locations_trans.Edit Location')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Locations.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $location->id }}">
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.Country')}}</label>
                    <input type="text" name="country" value="{{ $location->country }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.State/Governorate')}}</label>
                    <input type="text" name="state" value="{{ $location->state }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.City')}}</label>
                    <input type="text" name="city" value="{{ $location->city }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.Street Address')}}</label>
                    <input type="text" name="street_address" value="{{ $location->street_address}}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.Phone Number')}}</label>

                    <input type="text" name="phone_number" value="{{ $location->phone_number }}" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/locations_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/locations_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
