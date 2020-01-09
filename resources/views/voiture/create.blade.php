<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<div class="container" align="">
    <div class="row">
        <div class="col-md-6">
        <form action="{{url('store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group @if($errors->get('name')) has-error @endif">
                    <label for=""></label>
                <input type="text" name="name" placeholder="name" class="form-control" value="{{old('name')}}" >
               @if ($errors->get('name'))
               @foreach ($errors->get('name') as $message)
                <li>{{$message}}</li>
               @endforeach    
               @endif
                </div>
                    <div class="form-group @if($errors->get('image')) has-error @endif">
                        <label >image</label>
                        <input  class="form-control  " type="file" name="image">
                        @if ($errors->get('image'))
                            @foreach ($errors->get('image') as $message)
                                <li> {{$message}}</li>
                            @endforeach
                        @endif
                    </div>

                   
                    
                        <div class="form-group">
                                <input type="submit" value="save" class="form-control btn btn-primary">
                            </div>
                                        
            </form>

        </div>
    </div>
</div>  
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>