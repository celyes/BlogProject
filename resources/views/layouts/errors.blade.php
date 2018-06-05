@if(count($errors))
<div class="form-group">
    <ul class="list-group ">
        <li class="list-group-item">You have errors : 
            <span class="badge badge-danger badge-pill">{{ $errors->count() }}</span>
        </li>
    @foreach($errors->all() as $error)
        <li class="list-group-item">{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif