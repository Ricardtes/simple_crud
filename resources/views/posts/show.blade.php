@extends('welcome')
@section('content')

    <div class="card">
        <div class="card-header">
                <a href="{{route('posts.index')}}" class="card-title  ">Posts</a>
        </div>
        <div class="card-content">
            <div class="card-body ">
                <div class="m-portlet__body row ml-5">
                    <label class="form-group m-form__group field-size">
                        Title
                    </label>
                    <div class="col-md-4">
                        {!! Form::text('title', old('title',$post->title ), ['class' => 'form-control m-input', 'required' => 'required', 'readonly']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="card-content">
            <div class="card-body ">
                <div class="m-portlet__body row ml-5">
                    <label class="form-group m-form__group field-size">
                        Text
                    </label>
                    <div class="col-md-4">
                        {!! Form::text('text', old('text',$post->text ), ['class' => 'form-control m-input', 'required' => 'required', 'readonly']) !!}
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection
