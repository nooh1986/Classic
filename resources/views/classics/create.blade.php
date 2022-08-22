@extends('layouts.master')


@section('title')
    إضافة طلبيه
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
				<h4 class="content-title mb-0 my-auto">إضافة طلبيه</h4>
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
				<div class="card-body">
					<form action="#" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <label>تسلسل الطلبيه</label>
                                <input type="number" name="order"  value="{{old('order')}}" class="form-control  @error('order') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>رقم الزبون</label>
                                <select name="customer_id" class="form-control SlectBox">
                                    <option value="" selected disabled>------</option>
                                    @foreach($customers as $name => $id)
                                        <option value="{{$id}}">{{$name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>رقم الطلب</label>
                                <input type="number" name="num-order"  value="{{old('num-order')}}" class="form-control @error('num-order') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>رقم التوجيه</label>
                                <input type="number" name="route"  value="{{old('route')}}" class="form-control @error('route') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>المسنن</label>
                                <input type="number" name="gears"  value="{{old('gears')}}" class="form-control @error('gears') is-invalid @enderror">
                            </div>
                        </div>    
                        <br><br>

                        <div class="row">
                            <div class="col">
                                <label>الدسان</label>
                                <select name="design_id" class="form-control SlectBox">
                                    <option value="" selected disabled>------</option>
                                    @foreach($designs as $name => $id)
                                        <option value="{{$id}}">{{$name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>التصنيف</label>
                                <select name="category_id" class="form-control SlectBox">
                                    <option value="" selected disabled>------</option>
                                    @foreach($categories as $name => $id)
                                        <option value="{{$id}}">{{$name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>رقم الماكينه</label>
                                <select name="machine_id" class="form-control SlectBox">
                                    <option value="" selected disabled>------</option>
                                    @foreach($machines as $name => $id)
                                        <option value="{{$id}}">{{$name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>اللون</label>
                                <input type="text" name="color"  value="{{old('color')}}" class="form-control  @error('color') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>تاريخ الطلبيه</label>
                                <input type="date" name="create"  value="{{old('create')}}" class="form-control  @error('create') is-invalid @enderror">
                            </div>
                        </div>   
                        <br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>رقم التوب</label>
                                <input type="number" name="name" class="form-control">
                            </div>

                            <div class="col-md-2">
                               <input class="btn btn-danger btn-block mt-30" data-repeater-delete type="button" value="Delete"/>
                            </div>

                            <div class="form-group clearfix mb-20">
                                <input class="btn btn-success" data-repeater-create type="button" value="إضافه توب"/>
                            </div>
                        </div>   
                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">حفظ</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
		<!--/div-->
		
	</div>

@endsection


@section('js')
	<!--Internal  Notify js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
    
    <!--Form Repater -->
    <script src="{{URL::asset('assets/plugins-jquery.js')}}"></script>
@endsection
