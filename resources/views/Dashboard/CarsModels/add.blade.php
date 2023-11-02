<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/carsmodels_trans.Add Model')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('CarsModels.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard/carsmodels_trans.Model Name')}}</label>
                    <input type="text" name="name" class="form-control">
                    <label for="inputName" class="control-label">{{trans('Dashboard/carsmodels_trans.Brand Name')}}</label>
                    <select name="Brand" class="form-control SlectBox" onclick="console.log($(this).val())"
                        onchange="console.log('change is firing')">
                        <!--placeholder-->
                        <option value="" selected disabled>{{trans('Dashboard/carsmodels_trans.Select Brand')}}</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"> {{ $brand->name }}</option>
                        @endforeach

                    </select>
                    <label for="inputName" class="control-label">{{trans('Dashboard/carsmodels_trans.Car Section')}}</label>
                    <select name="Section" class="form-control SlectBox" onclick="console.log($(this).val())"
                        onchange="console.log('change is firing')">
                        <!--placeholder-->
                        <option value="" selected disabled>{{trans('Dashboard/carsmodels_trans.Select Section')}}</option>
                        @foreach ($cars_sections as $cars_section)
                            <option value="{{ $cars_section->id }}"> {{ $cars_section->type }}</option>
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

@push('js')
<script>
    $(document).ready(function() {
        // When the first select (Brand) changes
        $('select[name="Brand"]').on('change', function() {
            var selectedBrand = $(this).val();
            console.log('Selected Brand:', selectedBrand);
            // You can display or use the selectedBrand value as needed.
        });

        // When the second select (Car Section) changes
        $('select[name="Section"]').on('change', function() {
            var selectedSection = $(this).val();
            console.log('Selected Car Section:', selectedSection);
            // You can display or use the selectedSection value as needed.
        });
    });
</script>

@endpush
