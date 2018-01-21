@include('inc.header')

    @if(Auth::user())
    <div class="text-center">
    <hr>
    <h2>Welcome to Hackernews</h2>
    </div>
    @endif

    <div class="container">
        <div class="row">
        <legend>Inhouds tafel</legend>

        @if(session('info'))
            <div class='alert alert-success'>
                {{session('info')}}
            </div>
        @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($articles) > 0)
                        @foreach($articles->all() as $article)
                            <tr class="table-active">
                                <th>{{ $article->id}}</th>
                                <td>{{ $article->title}}</td>
                                <td>{{ $article->description}}</td>
                                <td>
                                <a href='{{url("/read/{$article->id}")}}' class="btn btn-primary">Read</a>    
                                </td>
                            </tr> 
                        @endforeach
                    @endif
                </tbody>
            </table> 
        </div>
    </div>
@include('inc.footer')