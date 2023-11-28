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
                    <input type="hidden" name="id" value="{{ $car->id }}">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Car Name')}}</label>
                            <input type="text" name="name" class="form-control" value="{{ $car->name }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Brand')}}</label>
                            <select name="brand" id="editBrand" class="form-control SlectBox">
                                <option value=" {{ $car->brand }}">
                                    {{ $car->carBrands->name }}
                                </option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $car->brand_id == $brand->id ? 'selected' : '' }}>
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Section')}}</label>
                                <select name="section" id="editSection" class="form-control SlectBox">
                                    <option value=" {{ $car->cars_section }}">
                                        {{ $car->carSections->type }}
                                    </option>
                                    @foreach ($cars_sections as $cars_section)
                                        <option value="{{ $cars_section->id }}" {{ $car->section_id == $cars_section->id ? 'selected' : '' }}>
                                            {{ $cars_section->type }}
                                        </option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Color')}}</label>
                            <input type="text" name="color" class="form-control" value="{{ $car->color }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Year')}}</label>
                            <input type="text" name="year" class="form-control" value="{{ $car->year }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Price/Day')}}</label>
                            <input type="number" name="price_per_day" class="form-control" value="{{ $car->price_per_day }}" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Mileage')}}</label>
                            <input type="number" name="mileage" class="form-control" value="{{ $car->mileage }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Transmission')}}</label>
                            <select name="transmission" class="form-control SlectBox">
                                <option value="Automatic" @if($car->transmission == 'Automatic') selected @endif>{{trans('Dashboard/cars_trans.Automatic')}}</option>
                                <option value="Manual" @if($car->transmission == 'Manual') selected @endif>{{trans('Dashboard/cars_trans.Manual')}}</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Seating Capacity')}}</label>
                            <input type="text" name="seating_capacity" class="form-control" value="{{ $car->seating_capacity }}" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Engine Capacity')}}</label>
                            <input type="number" name="engine_capacity" class="form-control" value="{{ $car->engine_capacity }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.License Plate')}}</label>
                            <input type="text" name="license_plate" class="form-control" value="{{ $car->license_plate }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Fuel Type')}}</label>
                            <select name="fuel_type" class="form-control SlectBox">
                                <option value="Gasoline" @if($car->fuel_type == 'Gasoline') selected @endif>{{trans('Dashboard/cars_trans.Gasoline')}}</option>
                                <option value="Diesel" @if($car->fuel_type == 'Diesel') selected @endif>{{trans('Dashboard/cars_trans.Diesel')}}</option>
                                <option value="Electric" @if($car->fuel_type == 'Electric') selected @endif>{{trans('Dashboard/cars_trans.Electric')}}</option>
                                <option value="Hybrid" @if($car->fuel_type == 'Hybrid') selected @endif>{{trans('Dashboard/cars_trans.Hybrid')}}</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Description')}}</label>
                            <input type="text" name="description" class="form-control" value="{{ $car->description }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">{{trans('Dashboard/cars_trans.Availability')}}</label>
                            <select name="availability" class="form-control SlectBox">
                                <option value="available" @if($car->availability == 'available') selected @endif>{{trans('Dashboard/cars_trans.Available')}}</option>
                                <option value="reserved" @if($car->availability == 'reserved') selected @endif>{{trans('Dashboard/cars_trans.Reserved')}}</option>
                                <option value="rented" @if($car->availability == 'rented') selected @endif>{{trans('Dashboard/cars_trans.Rented')}}</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="Images">{{trans('Dashboard/cars_trans.Car Images')}}</label>
                            <input type="file" name="images[]" multiple class="form-control" accept="image/*" >
                        </div>
                    </div>
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


