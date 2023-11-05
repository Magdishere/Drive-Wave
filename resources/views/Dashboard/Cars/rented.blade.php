@extends('Dashboard.layouts.master')
@section('title')
    {{trans('Dashboard/main-sidebar_trans.Rented Cars')}}
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

    {{-- <style>
        .btn-section{
            background-color: #F77D0A !important;
            color: #2B2E4A !important;
        }
    </style> --}}
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{trans('Dashboard/main-sidebar_trans.Cars')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('Dashboard/main-sidebar_trans.Rented Cars')}}</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
				<!-- row -->
                    <!-- row opened -->
                    <div class="row row-sm">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add">
                                            {{trans('Dashboard/cars_trans.Add Car')}}
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example2">
                                            <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0 text-center">#</th>
                                                <th class="wd-15p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Car Name')}}</th>
                                                <th class="wd-15p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Brand')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Section')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Year')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Color')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Availability')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Price/Day')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Mileage')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Transmission')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Seating Capacity')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Engine Capacity')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.License Plate')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Description')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Fuel Type')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Added Date')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/cars_trans.Actions')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cars as $car)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center" >{{$car->name}}</td>
                                                    <td class="text-center">{{$car->carBrands->name}}</td>
                                                    <td class="text-center">{{$car->carSections->type}}</td>
                                                    <td class="text-center">{{$car->year}}</td>
                                                    <td class="text-center">{{$car->color}}</td>
                                                    <td class="text-center">
                                                        @if($car->availability == 'available')
                                                        <span class="text-success">{{ $car->availability }}</span>
                                                        @elseif($car->availability == 'reserved')
                                                        <span class="text-warning">{{ $car->availability }}</span>
                                                        @else
                                                        <span class="text-danger">{{ $car->availability }}</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{$car->price_per_day}} $</td>
                                                    <td class="text-center">{{$car->mileage}} {{trans('Dashboard/cars_trans.Km')}}</td>
                                                    <td class="text-center">{{$car->transmission}}</td>
                                                    <td class="text-center">{{$car->seating_capacity}}</td>
                                                    <td class="text-center">{{$car->engine_capacity}} {{trans('Dashboard/cars_trans.Liters')}}</td>
                                                    <td class="text-center">{{$car->license_plate}}</td>
                                                    <td class="text-center">{{$car->description}}</td>
                                                    <td class="text-center">{{$car->fuel_type}}</td>
                                                    <td class="text-center">{{$car->created_at->diffForHumans() }}</td>
                                                    <td class="text-center">
                                                        <a class="modal-effect btn btn-sm btn-warning" data-effect="effect-scale" data-toggle="modal" href="#edit{{$car->id}}"><i class="las la-pen"></i></a>
                                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale" data-toggle="modal" href="#delete{{$car->id}}"><i class="las la-trash"></i></a>
                                                    </td>
                                                </tr>

                                                @include('Dashboard.Cars.edit')
                                                @include('Dashboard.Cars.delete')
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div>
                        <!--/div-->

                    @include('Dashboard.Cars.add')
                    <!-- /row -->

				</div>
				<!-- row closed -->

			<!-- Container closed -->

		<!-- main-content closed -->
@endsection
@section('js')

    <!-- Internal Data tables -->
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('Dashboard/js/table-data.js')}}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection
