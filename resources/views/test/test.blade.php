@extends('back.pages.admin.home')
@section('content')



<form-group>
<form action="{{route('doneTest')}}"  method="POST">

    @csrf
<h6>DRIVER'S TEST PART I</h6><br>
    <label>Enter LearnerID</label>
    <input type="text"  name="candidateId"  value="" placeholder="WY2v8#......"><br><br>
    <label>Enter Officer ID.</label>
    <input type="text"  name="officerId"  value="" placeholder="shelby@ntsa...."><br><br>
    <label>Theory Test Score</label>
 <hr>
    <select name="theoryTest">
    
         <option value="Passed">Passed</option>
         <option value="Failed">Failed</option>

    </select>
    <br><hr>
     <button type="submit" class="btn btn-secondary">Submit Score</button>
     
     <br>
     <br>
     <br>
     
</form>
</form-group>


<a href="{{route('admin.home')}}" class="btn btn-light"><h6> SELECT PART II</h6></a>

<!-- report errors --> 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
     
    @endif

@endsection