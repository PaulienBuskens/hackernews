@include('inc.header')

<div class="container">
    <div class="row">
        <legend>Read Article</legend>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">{{$articles->title}}</div>
        <div class="card-body">
        <p class="card-text">{{$articles->description}}</p>
        </div>
        </div>
    </div>
</div>

@include('inc.footer')
