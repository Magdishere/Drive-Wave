@extends('Dashboard.layouts.master')
@section('title')
    {{trans('Dashboard/locations_trans.Locations')}}
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


    <style>

        td,th{
            vertical-align: middle;
        }
    </style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{trans('Dashboard/locations_trans.Locations')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('Dashboard/locations_trans.All Locations')}}</span>
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
                                            {{trans('Dashboard/locations_trans.Add Location')}}
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example2">
                                            <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0 text-center">#</th>
                                                <th class="wd-15p border-bottom-0 text-center">{{trans('Dashboard/locations_trans.Country')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/locations_trans.State/Governorate')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/locations_trans.City')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/locations_trans.Street Address')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/locations_trans.Phone Number')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/locations_trans.Added Date')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/locations_trans.Actions')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($locations as $location)
                                               <tr>
                                                   <td class="text-center">{{$loop->iteration}}</td>
                                                   <td class="text-center">{{$location->country}}</td>
                                                   <td class="text-center">{{$location->state}}</td>
                                                   <td class="text-center">{{$location->city}}</td>
                                                   <td class="text-center">{{$location->street_address}}</td>
                                                   <td class="text-center">{{$location->phone_number}}</td>
                                                   <td class="text-center">{{ $location->created_at->diffForHumans() }}</td>
                                                   <td class="text-center">
                                                       <a class="modal-effect btn btn-sm btn-warning" data-effect="effect-scale"  data-toggle="modal" href="#edit{{$location->id}}"><i class="las la-pen"></i></a>
                                                       <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$location->id}}"><i class="las la-trash"></i></a>
                                                   </td>
                                               </tr>

                                               @include('Dashboard.Locations.edit')
                                               @include('Dashboard.Locations.delete')
                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div>
                        <!--/div-->

                    @include('Dashboard.Locations.add')
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
