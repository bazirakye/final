@extends('layouts.custodian.custodian')

@section('content')

	<div class="content-wrapper">
			<section class="content">
      
      			<div class="card">
           			 <div class="card-header">
              			<h3 class="card-title">Rooms</h3>
               			<div>
            				<div class="float-right">
              					<span><a href="{{route('custodian.newroom')}}"><i class="nav-icon fa fa-plus-circle">New room</i></a></span>              
           				 	</div>
         				    </div>
            		</div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Room no</th>
                  <th>Room type</th>
                  <th>DescrIption</th>
                  <th>image</th>
                  <th>status</th>
                  <th>price</th>
                  <th>booking price</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                 
                <tr>
                  <td>bhgd </td>
                  <td>;bl,;ldfb  </td>
                  <td>{lbjkm cvm  </td>
                  <td>{lbjkm cvm  </td>
                  <td>{lbjkm cvm  </td>
                  <td>{lbjkm cvm  </td>
                  <td>{lbjkm cvm  </td>
                  <td><a href="" class = "btn btn-info">Edit</a>
            <a href="" class = "btn btn-danger">Delete</a></td>
          </tr>

                </tr>
              
              </tbody>
              <tfoot>
                  <tr>
                  <th>Room no</th>
                  <th>Room type</th>
                  <th>DescrIption</th>
                  <th>image</th>
                  <th>status</th>
                  <th>price</th>
                  <th>booking price</th>
                  <th>Action</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            
            <!-- /.card-body -->
            	</div>
      		</section>
        </div>     



@endsection