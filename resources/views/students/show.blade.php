@include('partials.head')

<div class="student-main">
    <div>
        <img class="img-student" src="{{ $student->photo_path }}">
    </div>
    <div class="student-information">
        <h2 class="log-student-information">{{ $student->name }}</h2>
        <p>{{ nl2br($student->description) }}</p>
    </div>
</div>

@include('partials.footer')