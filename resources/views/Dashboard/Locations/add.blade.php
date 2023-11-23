<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/locations_trans.Add Location')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Locations.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.Country')}}</label>
                    <input type="text" name="country" class="form-control" required>
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.State/Governorate')}}</label>
                    <input type="text" name="state" class="form-control" required>
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.City')}}</label>
                    <input type="text" name="city" class="form-control" required>
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.Street Address')}}</label>
                    <input type="text" name="street_address" class="form-control" required>
                    <label for="exampleInputPassword1">{{trans('Dashboard/locations_trans.Phone Number')}}</label>
                    <input type="tel" name="phone_number" class="form-control" required>
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/locations_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/locations_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
