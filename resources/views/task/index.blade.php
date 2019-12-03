@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Create post</h1>
                        <form action="{{route('tasks.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" name="category" />
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" />
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="5" class="form-control" name="description" ></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </form>
                        <hr class="mt-5"/>
                        <ul class="list-group mt-5">
                            @foreach($data as $item)
                                <li class="list-group-item">
                                    @if($item->anon === 0)
                                        <h3>
                                            <b>Vardas:</b> {{$item->user->name}}
                                        </h3>
                                    @else
                                        <h3>
                                            <b>Vardas:</b> Anonimas
                                        </h3>
                                    @endif
                                    <h4><b>Title:</b> {{$item->title}}</h4>
                                    <p><b>Description:</b> {{$item->description}}</p><hr/>
                                    <p><b>Category:</b> {{$item->category}}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
