@extends('admin.layout.master')   

@section('content')
       
<div class="row">
   <div class="col-md-12">
       <div class="card">
           <div class="card-header">
               <strong class="card-title">Create Permission</strong>
           </div>
           <div class="card-body">
               <!-- Credit Card -->
               <div id="pay-invoice">
                   <div class="card-body">
                       <div class="card-title">
                           <h3 class="text-center">CREATE PERMISSION</h3>
                       </div>
                        @if(count($errors) > 0)
                        <div class="alert alert-danger" role="alert">                            
                                @foreach($errors->all() as $error)
                                <span>{{ $error }}</span>
                                @endforeach                            
                        </div>
                        @endif

                       <hr>

                       {!! Form::open(['url' => 'administrator/permission/store', 'method' => 'post']) !!}
                                                  
                            <div class="form-group">                               
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', '', ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">                               
                                {{ Form::label('display_name', 'Display Name') }}
                                {{ Form::text('Display_name', '', ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">                               
                                {{ Form::label('description', 'Description') }}
                                {{ Form::textarea('Description', '', ['class' => 'form-control']) }}
                            </div>
                            
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">CREATE</span>
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