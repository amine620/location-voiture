<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">


<table class="table table-hover">
        <thead>
          <tr>
              <th>name</th>
            
            <th>operations</th>
          </tr>
        </thead>
        @foreach ($data as $item)
         <tbody>
             <tr>
             <th>{{$item->name}}</th>

             <th>
             <form action="{{url('delete/'.$item->id)}}" method="POST">
                {{csrf_field()}};
                {{method_field('DELETE')}};
             <a href="{{url('details/'.$item->id)}}" class="btn btn-primary">Details</a>
             <a href="{{url('edit/'.$item->id)}}" class="btn btn-default">Edit</a>
            <button type="submit" href=""  class="btn btn-danger">Delete</button>
            </form>
                
                 
             </th>
             </tr>
         </tbody>
            
        @endforeach
        </table>
        <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>