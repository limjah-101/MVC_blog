@extends('admin.layout.master')   

@section('content')
       
<div class="row">
   <div class="col-md-12">
       <div class="card">
           <div class="card-header">
               <strong class="card-title">{{ $page_name }}</strong>
           </div>
           <div class="card-body">
               <!-- Credit Card -->
               <div id="pay-invoice">
                   <div class="card-body">
                       <div class="card-title">
                           <h3 class="text-center">EDIT PERMISSION</h3>
                       </div>
                       <hr>

                       {{ Form::model($permission, ['route' => ['permission-edit', $permission->id], 'method' => 'put']) }}
                                                  
                           <div class="form-group">                               
                               {{ Form::label('name', 'Name') }}
                               {{ Form::text('name', null, ['class' => 'form-control']) }}
                           </div>
                           <div class="form-group">                               
                               {{ Form::label('display_name', 'Display Name') }}
                               {{ Form::text('display_name', null, ['class' => 'form-control']) }}
                           </div>
                           <div class="form-group">                               
                               {{ Form::label('description', 'Description') }}
                               {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                           </div>
                          
                           <div>
                               <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                   <i class="fa fa-lock fa-lg"></i>&nbsp;
                                   <span id="payment-button-amount">UPDATE</span>
                                   <span id="payment-button-sending" style="display:none;">Sending…</span>
                               </button>
                           </div>
                           {!! Form::close() !!}

                       <!-- </form> -->
                   </div>
               </div>
           </div>
       </div> <!-- .card -->
   </div>
</div>
   

@endsection