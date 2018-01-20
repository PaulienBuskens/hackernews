@include('inc.header')

<div class="container">
    <div class="row">
        <legend>Read Article</legend>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">{{$articles->title}}</div>
                    <div class="card-body">
                        <p class="card-text"><a href="{{$articles->description}}" target="_blank">{{$articles->description}}</a></p>
                        <hr>
                        <div class="comments">
                            <ul class="list-group">
                            @foreach ($articles->comments as $comment)
                                <li class="list-group-item">

                                <strong>
                                {{$comment->created_at->diffForHumans()}}: &nbsp;
                                </strong>
                                    {{ $comment->body}}
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        @if(Auth::user())
                        <hr>
                        
                        <div class="card">
                            <div class="card-block">
                           
                                <form method='POST' action="/articles/{{$articles->id}}/comments">
                                {{csrf_field()}}
                                
                                    <div class="form-group">
                                        <textarea name="body" placeholder="your comments here" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary">Add Comment</button>
                                    </div>    
                                </form>
                               
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            </div>

@include('inc.footer')
