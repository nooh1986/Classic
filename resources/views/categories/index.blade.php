@extends('layouts.master')


@section('title')
    التصنيفات
@stop


@section('css')
	<!--Internal   Notify -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection


@section('page-header')
	<!-- breadcrumb -->
	<div class="breadcrumb-header justify-content-between">
		<div class="my-auto">
			<div class="d-flex">
				<h4 class="content-title mb-0 my-auto">التصنيفات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض الكل</span>
			</div>
		</div>
	</div>
	<!-- breadcrumb -->			
@endsection


@section('content')
    @include('layouts.messages_alert')			
	<div class="row row-sm">
		<div class="col-xl-12">
			<div class="card">
				<div class="card-header pb-0">
					<div class="d-flex justify-content-between">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
							إضافه تصنيف
						</button>
					</div>
				</div>
				
				<div class="card-body">
					
					<table class="table text-md-nowrap" id="example1">
						<thead>
							<tr>
								<th class="border-bottom-0">#</th>
								<th class="border-bottom-0">اسم التصنيف</th>
								<th class="border-bottom-0">العمليات</th>
							</tr>
						</thead>
						<tbody>
								
							@foreach ($categories as $category)
							<tr>
								<td>{{ $loop->iteration }}</td>
                                <td>{{$category->name}}</td>
								<td>
									<button type="button" class="btn btn-info btn-sm" data-toggle="modal"
										data-target="#edit{{ $category->id }}" title="تعديل"><i class="fa fa-edit"></i>
									</button>
									<button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
										data-target="#delete{{ $category->id }}" title="حذف"><i class="fa fa-trash"></i>
									</button>
								</td>
							</tr>

								@include('categories.edit')

                                @include('categories.delete')

                            @endforeach
								
						</tbody>
					</table>
					
				</div>
				
			</div>
		</div>
		<!--/div-->
		
		@include('categories.create')
						
	</div>

@endsection


@section('js')
	<!--Internal  Notify js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>	
@endsection
