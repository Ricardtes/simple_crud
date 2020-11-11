@extends('welcome')

@section('content')

    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title title "> Posts
                    </h1>

                </div>
                <div class="card-content">
                    <div class="card-body mb-5 mt-4">

                        <a class="row add-btn btn float-right" href="{{route('posts.create')}}">
                            <i class="bx bx-plus"></i> Create post
                        </a>
                    </div>

                @include('partials.errors')
                @include('partials.success')
                <!-- table head dark -->
                    <div class="table-responsive p-1">
                        <table class="table mb-0">
                            <thead class=" ">
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td class="text-bold-500">{{$post->id}}</td>
                                <td><a href="{{route('posts.show',  $post->id)}}">  {{$post->title}}</a></td>
                                <td>{{$post->text}}</td>
                                <td>
                                   <div class="row">
                                            <a href="{{route('posts.edit', $post->id)}}" >
                                                <span class="btn btn-info">Edit</span>
                                            </a>

                                            {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) !!}

                                                 <button type="submit" class="btn btn-danger ml-1" >
                                                     <i class="bx bx-check d-block d-sm-none"></i>
                                                     <span class="d-none d-sm-block">Delete</span>
                                                 </button>
                                            {!! Form::close() !!}

                                  </div>
                                </td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

