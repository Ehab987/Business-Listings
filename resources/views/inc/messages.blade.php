@if (Session::has('success'))
<div class="alert alert-success mt-3">{{Session::get('success')}}</div>
@endif
@if (Session::has('Update'))
<div class="alert alert-success mt-3">{{Session::get('Update')}}</div>
@endif
@if (Session::has('delete'))
<div class="alert alert-danger mt-3">{{Session::get('delete')}}</div>
@endif