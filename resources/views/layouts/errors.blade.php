@if(count($errors))
<div class="form-group">
    <ul class="list-group">
    @foreach($errors->all() as $error)
        <li class="list-group-item bg-danger text-light">{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif