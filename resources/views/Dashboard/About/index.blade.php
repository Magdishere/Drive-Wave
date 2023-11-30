@extends('Dashboard.layouts.master')
@section('title')
    {{trans('Dashboard/main-sidebar_trans.About Company Page')}}
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
							<h4 class="content-title mb-0 my-auto">{{trans('Dashboard/About_trans.About Company Page')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('Dashboard/About_trans.Settings')}}</span>
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
                                            {{trans('Dashboard/About_trans.Add About Section')}}
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example2">
                                            <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0 text-center">#</th>
                                                <th class="wd-15p border-bottom-0 text-center">{{trans('Dashboard/About_trans.Title')}}</th>
                                                <th class="wd-15p border-bottom-0 text-center">{{trans('Dashboard/About_trans.Main Image')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/About_trans.Paragraph')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/About_trans.Icon Image')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/About_trans.Info')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/About_trans.Added Date')}}</th>
                                                <th class="wd-20p border-bottom-0 text-center">{{trans('Dashboard/About_trans.Actions')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($abouts as $about)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center" >{{$about->title}}</td>
                                                    <td class="text-center">
                                                        @if($about->image_path)
                                                            <img src="{{ asset('storage/' . $about->image_path) }}" alt="{{ $about->title }} Logo" width="50">
                                                        @else
                                                            <!-- You can add a placeholder image or message for brands without a logo -->
                                                            <img src="{{ asset('path/to/placeholder-image.png') }}" alt="No Logo" width="50">
                                                        @endif
                                                    </td>
                                                    <td class="text-center" >{{$about->paragraph}}</td>
                                                    <td class="text-center">
                                                        @if($about->icon_image)
                                                            <img src="{{ asset('storage/' . $about->icon_image) }}" alt="{{ $about->info }} Logo" width="50">
                                                        @else
                                                            <!-- You can add a placeholder image or message for brands without a logo -->
                                                            <img src="{{ asset('path/to/placeholder-image.png') }}" alt="No Logo" width="50">
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{$about->info}}</td>
                                                    <td class="text-center">{{ $about->created_at->diffForHumans() }}</td>
                                                    <td class="text-center">
                                                        <a class="modal-effect btn btn-sm btn-warning" data-effect="effect-scale" data-toggle="modal" href="#edit{{$about->id}}"><i class="las la-pen"></i></a>
                                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale" data-toggle="modal" href="#delete{{$about->id}}"><i class="las la-trash"></i></a>
                                                    </td>
                                                </tr>

                                                @include('Dashboard.About.edit')
                                                @include('Dashboard.About.delete')
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div>
                        <!--/div-->

                    @include('Dashboard.About.add')
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
