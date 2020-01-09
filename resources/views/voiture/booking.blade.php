@extends('master.layout')
@section('content')
    
<div  class="container col-md-8" style="margin-bottom: 0px;
margin-block-end: inherit;
margin-top: 190px;">
        <div class="form-group @if($errors->get('name')) has-error @endif">
                <label for=""></label>
            <input type="text" name="name" placeholder="name" class="form-control" value="{{old('name')}}" >
           @if ($errors->get('name'))
           @foreach ($errors->get('name') as $message)
            <li>{{$message}}</li>
           @endforeach    
           @endif
        </div>
        <div class="form-group @if($errors->get('nom')) has-error @endif">
                <label for=""></label>
            <input type="text" name="nom" placeholder="nom" class="form-control" value="{{old('nom')}}" >
           @if ($errors->get('nom'))
           @foreach ($errors->get('nom') as $message)
            <li>{{$message}}</li>
           @endforeach    
           @endif
            </div>
            <div class="form-group @if($errors->get('prenom')) has-error @endif">
                    <label for=""></label>
                <input type="text" name="prenom" placeholder="prenom" class="form-control" value="{{old('prenom')}}" >
               @if ($errors->get('prenom'))
               @foreach ($errors->get('prenom') as $message)
                <li>{{$message}}</li>
               @endforeach    
               @endif
                </div>
                <div class="form-group @if($errors->get('phone')) has-error @endif">
                        <label for=""></label>
                    <input type="text" name="phone" placeholder="phone" class="form-control" value="{{old('phone')}}" >
                   @if ($errors->get('phone'))
                   @foreach ($errors->get('phone') as $message)
                    <li>{{$message}}</li>
                   @endforeach    
                   @endif
                    </div>





                    <div class="container">
                            <div class='col-md-5'>
                                <div class="form-group">
                                   <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker7"/>
                                        <div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-5'>
                                <div class="form-group">
                                   <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker8"/>
                                        <div class="input-group-append" data-target="#datetimepicker8" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
</div>







    
@endsection
