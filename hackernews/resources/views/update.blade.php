@include('inc.header')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method = "POST" action=" {{ url('/edit', array($articles->id)) }}">
                   {{csrf_field()}}
                    <fieldset>
                        <legend>laravel crud application</legend>
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                {{$error}}
                                </div>
                            @endforeach
                        @endif
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?php echo $articles->title; ?>" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Description</label>
                            <textarea type="text" name="description" class="form-control" id="exampleTextarea" rows="3"  placeholder="Enter description"><?php echo $articles->description; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Update</button>
                        
                        <a href="{{ url('/')}}" class="btn btn-outline-primary">Back</a>

                    </fieldset>
                </form>
            </div>
        </div>  
    </div>

@include('inc.footer')