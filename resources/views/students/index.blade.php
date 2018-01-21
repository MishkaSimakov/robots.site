@include('partials.head')

<div class="students">
@foreach ($students as $student)
<a href="{{route('students.show', $student)}}"><div class="studentinstudents">
        <img class="img-studentinstudents" src="{{$student->photo_path}}">
        <div class="name-studentinstudents"><h2>{{$student->name}}</h2></div>
    </div></a>
@endforeach
</div>

@include('partials.footer')