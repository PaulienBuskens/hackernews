@include('inc.header')

    <div class="container">
        <div class="row">
        <legend>laravel crud application</legend>

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
                        <th scope="col">Action</th>
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
                                    <a href='{{url("/read/{$article->id}")}}' class="btn btn-primary">Read</a> |
                                    <a href='{{url("/update/{$article->id}")}}' class="btn btn-secondary">Update</a> |
                                    <a href='{{url("/delete/{$article->id}")}}' class="btn btn-danger">Delete</a>
                                </td>
                            </tr> 
                        @endforeach
                    @endif
                </tbody>
            </table> 
        </div>
    </div>
@include('inc.footer')