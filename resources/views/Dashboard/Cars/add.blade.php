<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/cars_trans.Add Car')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Cars.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Car Name')}}</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Brand')}}</label>
                            <select name="brand" class="form-control SlectBox" onclick="console.log($(this).val())"
                                    onchange="console.log('change is firing')">
                                <!--placeholder-->
                                <option value="" selected disabled>{{trans('Dashboard/cars_trans.Select Brand')}}</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}"> {{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Section')}}</label>
                            <select name="section" class="form-control SlectBox" onclick="console.log($(this).val())"
                                                                    onchange="console.log('change is firing')">
                                <!--placeholder-->
                                <option value="" selected disabled>{{trans('Dashboard/cars_trans.Select Section')}}</option>
                                @foreach ($cars_sections as $cars_section)
                                    <option value="{{ $cars_section->id }}"> {{ $cars_section->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Color')}}</label>
                            <input type="text" name="color" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Year')}}</label>
                            <input type="text" name="year" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Price/Day')}}</label>
                            <input type="number" name="price_per_day" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Mileage')}}</label>
                            <input type="number" name="mileage" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Transmission')}}</label>
                            <select name="transmission" class="form-control SlectBox">
                                <option value="Automatic">{{trans('Dashboard/cars_trans.Automatic')}}</option>
                                <option value="Manual">{{trans('Dashboard/cars_trans.Manual')}}</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Seating Capacity')}}</label>
                            <input type="text" name="seating_capacity" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Engine Capacity')}}</label>
                            <input type="number" name="engine_capacity" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.License Plate')}}</label>
                            <input type="text" name="license_plate" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Fuel Type')}}</label>
                            <select name="fuel_type" class="form-control SlectBox">
                                <option value="Gasoline">{{trans('Dashboard/cars_trans.Gasoline')}}</option>
                                <option value="Diesel">{{trans('Dashboard/cars_trans.Diesel')}}</option>
                                <option value="Electric">{{trans('Dashboard/cars_trans.Electric')}}</option>
                                <option value="Hybrid">{{trans('Dashboard/cars_trans.Hybrid')}}</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Description')}}</label>
                            <input type="text" name="description" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Availability')}}</label>
                            <select name="availability" class="form-control SlectBox">
                                <option value="available">{{trans('Dashboard/cars_trans.Available')}}</option>
                                <option value="reserved">{{trans('Dashboard/cars_trans.Reserved')}}</option>
                                <option value="rented">{{trans('Dashboard/cars_trans.Rented')}}</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="Images">{{trans('Dashboard/cars_trans.Car Images')}}</label>
                            <input type="file" name="images[]" multiple class="form-control" accept="image/*" required>
                        </div>
                    </div>
                    <br>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/cars_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/cars_trans.Save Changes')}}</button>
                </div>
            </form>

        </div>
    </div>
</div>

@push('js')
<script>
    $(document).ready(function() {
        // When the first select (Brand) changes
        $('select[name="brand"]').on('change', function() {
            var selectedBrand = $(this).val();
            console.log('Selected Brand:', selectedBrand);
            // You can display or use the selectedBrand value as needed.
        });

        // When the second select (Car Section) changes
        $('select[name="section"]').on('change', function() {
            var selectedSection = $(this).val();
            console.log('Selected Car Section:', selectedSection);
            // You can display or use the selectedSection value as needed.
        });
    });
</script>

@endpush
