<div class="row odd">
    <div class="col-md-6 text">
        <h2>{{$project->title}}</h2>
        <a href="/projects/{{$project->slug}}">Read more</a>
    </div>
    <div class="col-md-6 image">
        <img src="/uploads/project/medium/{{$project->image}}" alt=""/>
    </div>
</div>