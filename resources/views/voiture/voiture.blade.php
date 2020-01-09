@extends('master.layout')

@section('content')
    




       <div class="row">
         @foreach ($data  as $item)
        <div class="col-sm-3 col-md-2 ml-2" style="margin-left: 23px;
        margin-top: 144px;
        width: 262px;
        height: 227px;">
          <div class="thumbnail">
          <img src="{{asset('storage/'.$item->image)}}" alt="..." style="margin-left:0px;width:263px;height:227px;">
            <div class="caption">
            <h3>{{ $item->name }}</h3>
            
              <div class="form-group">
                  <a  class="btn btn-success" role="button">Reservé</a>   
              </div>
          
            </div>
          </div>
        </div>  
        @endforeach
       </div>

       



@endsection