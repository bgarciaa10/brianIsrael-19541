@extends('app')

@section('content')
    <div class="container" id="form">

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form class="shadow-lg" action="{{route('correo.store')}}" method="post" >

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control col-md-auto"  type="text"  name="name" id="name" value="{{old('name')}}" maxlength="50"
                       required="required">

                @if($errors->has('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="email">Correo Electronico</label>
                <input class="form-control col-md-auto"  type="email"  name="email" id="name" value="{{old('email')}}" maxlength="50"
                       required="required">

                @if($errors->has('email'))
                    <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input class="form-control col-md-auto"  type="tel"  name="phone" id="phone" value="{{old('name')}}" maxlength="8"
                       required="required">

                @if($errors->has('phone'))
                    <p class="text-danger">{{$errors->first('phone')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="subject">Asunto</label>
                <input class="form-control col-md-auto"  type="text"  name="subject" id="subject" value="{{old('subject')}}" maxlength="125"
                       required="required">

                @if($errors->has('subject'))
                    <p class="text-danger">{{$errors->first('subject')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="message">Mensaje</label>
                <input class="form-control col-md-auto"  type="text"  name="message" id="message" value="{{old('message')}}" maxlength="125"
                       required="required">

                @if($errors->has('message'))
                    <p class="text-danger">{{$errors->first('message')}}</p>
                @endif
            </div>

            <div class="centrar">
                <input type="submit" name="send" value="Guardar" class="btn btn-success mr-auto">
            </div>
        </form>


    </div>
@endsection
