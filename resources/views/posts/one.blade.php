@extends('welcome')
@section('content')

    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <div class="card">
                <div class="card-header">
                    <span class="card-title title field-color "> Post</span>
                </div>

                @include('partials.errors')
                @include('partials.success')
                <div class="card-content pl-3">
                    <div class="card-body mb-5 mt-4">

                    {!! Form::open(['url' => route( ($post->id)?'posts.update': 'posts.store', $post->id), 'method' => ($post->id)?'PUT':'POST',
                     'class' => 'm-form m-form--label-align-right',
                    'enctype' => 'multipart/form-data']) !!}

                    <div class="m-portlet__body">
                        <label class="form-group m-form__group row">
                            Title
                        </label>
                        <div class="col-md-6 position-relative has-icon-left">
                            {!! Form::text('title', old('title',$post->title), ['class' => 'form-control m-input',
                            ]) !!}

                            <div class="form-control-position">
                                <i class="bx bx-post"></i>
                            </div>
                        </div>
                    </div>

                        <div class="m-portlet__body">
                            <label class="form-group m-form__group row">
                                Text
                            </label>
                            <div class="col-md-6 position-relative has-icon-left">
                                {!! Form::text('text', old('text',$post->text), ['class' => 'form-control m-input',
                                ]) !!}
                                <div class="form-control-position">
                                    <i class="bx bx-post"></i>
                                </div>
                            </div>
                        </div>


                    <div class="col-md-12   mt-5">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>

                    {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
