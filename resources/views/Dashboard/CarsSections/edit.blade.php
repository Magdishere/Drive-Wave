<!-- Modal -->
<div class="modal fade" id="edit{{ $cars_section->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/carssection_trans.Edit Section')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('CarsSections.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $cars_section->id }}">
                    <label for="exampleInputPassword1">{{trans('Dashboard/carssection_trans.Car Type')}}</label>
                    <input type="text" name="type" value="{{ $cars_section->type }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/carssection_trans.Description')}}</label>
                    <input type="text" name="description" value="{{ $cars_section->description }}" class="form-control">
                    <br>
                    <label for="exampleInputPassword1">{{trans('Dashboard/carssection_trans.Number Of Cars')}}</label>
                    <input type="text" name="num_of_cars" value="{{ $cars_section->num_of_cars }}" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/carssection_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/carssection_trans.Save Changes')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
