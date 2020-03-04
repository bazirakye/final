@extends('layouts.custodian.custodian')
@section ('content')

<div class="content-wrapper">
	<section class="content">
		<div class="card-header">
           <h3 class="card-title">My hostel</h3>              			
        </div>

        <div class="card card-primary">      
        	<div class="card-body col-10">
        		 <form method="post" action="{{ route('custodian.update') }}">@csrf
        		 	@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
        			<strong>{{ $message }}</strong>
					</div>
					@endif

					@if ($message = Session::get('error'))
					<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
        			<strong>{{ $message }}</strong>
					</div>
					@endif

					@if ($message = Session::get('warning'))
					<div class="alert alert-warning alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
					<strong>{{ $message }}</strong>
					</div>
					@endif

					@if ($message = Session::get('info'))
					<div class="alert alert-info alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
					<strong>{{ $message }}</strong>
					</div>
					@endif

					@if ($errors->any())	
					<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>	
					Please check the form below for errors
					</div>
					@endif

					<div class="form-group">

                    <label for="name">hostel name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" value="" required="required">
	                </div>

	                <div class="form-group">  
                    <label for="description">description</label>
                    <div class="card card-outline card-info">
                      <div class="card-body pad">
                        <div class="mb-3">
                          <textarea class="textarea" name="hosteldescription" id="hosteldescription" required="" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
             
                      </div>
                    </div>
                </div>


        		 </form>
        	</div>
        </div>
	</section>
</div>

@endsection