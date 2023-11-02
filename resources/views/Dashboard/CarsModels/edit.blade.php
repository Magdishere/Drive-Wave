

<!-- Edit Modal -->
<div class="modal fade" id="edit{{$cars_model->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/carsmodels_trans.Edit Model')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('CarsModels.update', 'test') }}" method="post" autocomplete="off">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $cars_model->id }}">
                    <label for="exampleInputPassword1">{{trans('Dashboard/carsmodels_trans.Model Name')}}</label>
                    <input type="text" name="name" class="form-control" value="{{ $cars_model->name }}">
                    <label for="inputName" class="control-label">{{trans('Dashboard/carsmodels_trans.Brand Name')}}</label>
                    <select name="Brand" class="form-control SlectBox">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="inputName" class="control-label">{{trans('Dashboard/carsmodels_trans.Car Section')}}</label>
                    <select name="Section" class="form-control SlectBox">
                        @foreach ($cars_sections as $cars_section)
                            <option value="{{ $cars_section->id }}" {{ $cars_section->id}}>
                                {{ $cars_section->type }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/carsmodels_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/carsmodels_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
