@extends('layouts/archi', ['titre' => 'Contact'])

@section('content')
    <div class="container" id="contact_center">
        <!-- si on a un ecran moyen prenez 8 colonne et laissez 2 col à guache et 2 col à droite  -->
        <!-- si on a un ecran small prenez 10 colonne et laissez 1 col à guache et 1 col à droite  -->
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h2>Get in Touch </h2>
            <!-- text-muted va rendre le texte trasparent -->
            <p class="text-muted">If you having trouble with this service, please <a href="{{ config('laracarte.email_admin')}}">ask for help.</a> </p>

            <form action="{{ route('contact')}}" method="POST" novalidate>
                {{ csrf_field() }}

                <!-- on aapplique le has-error ssi on a un champs nommé name -->
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} ">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name='name' id='name' class="form-control" value="{{ old('name')}}" required='required' >
                    {!! $errors->first('name', '<p class="help-block msg_error">:message</p>') !!}
                </div>
            
                 <!-- on aapplique le has-error ssi on a un champs nommé email -->
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name='email' id='email'  class="form-control"  value="{{ old('email')}}" required='required'>
                    {!! $errors->first('email', '<p class="help-block msg_error">:message</p>') !!}
                </div>
               
                <!-- on aapplique le has-error ssi on a un champs nommé message -->
                 <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                    <label for="message" class="control-label">Message</label>
                    <textarea name="message" id="message" cols="10" rows="10"  required='required' class="form-control"> {{ old('message')}}</textarea>
                    {!! $errors->first('message', '<p class="help-block msg_error">:message</p>') !!}
                </div>

                <div class="form-group">
                    <button type='submit' class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                </div>
       
             </form>
     
        </div>

    </div>
@stop 