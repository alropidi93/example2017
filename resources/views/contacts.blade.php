@extends('layouts.header')
@section('content')
<!-- Main Content -->
<section style="padding-top: 85px; padding-bottom:60px; ">
  <div class="container">
    <h2 class="section-heading c-contact-h2" style="color:black; color: #1E9797; font-size: 70px; text-align: center; padding-bottom: 40px">
      <strong>{{ trans('messages.SENDUS') }}</strong>
    </h2>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo.
        It's recommended that you use a private domain email address! -->
        <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form action= "{{url('contacts')}}" method = "POST" name="sentMessage" id="contactForm" novalidate>
          {{ csrf_field() }}
          <div class="row control-group">
            <div class="form-group col-md-4 floating-label-form-group controls">
              <input type="text" name="nameContacts" class="form-control" placeholder="Name" id="nameContacts" required data-validation-required-message="Please enter your name." style="font-family: open sans; background-color: white">
              <p class="help-block text-danger"></p>
            </div>

            <div class="form-group col-md-4 floating-label-form-group controls">
              <input type="email" name="emailContacts" class="form-control" placeholder="Email Address" id="emailContacts" required data-validation-required-message="Please enter your email address." style="font-family: open sans; background-color: white">
              <p class="help-block text-danger"></p>
            </div>

            <div class="form-group col-md-4 floating-label-form-group controls">
              <input type="tel" name="phoneContacts" class="form-control" placeholder="Phone Number" id="phoneContacts"required data-validation-required-message="Please enter your phone number." style="font-family: open sans; background-color: white">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <textarea  name="messageContacts" rows="5" class="form-control" placeholder="Message" id="messageContacts" required data-validation-required-message="Please enter a message." style="font-family: open sans"></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
      
          <br>
          <div class="row text-center">
            <div class="form-group col-xs-12">
              <input type="submit" value="Send Message" class="btn btn-primary btn-xl page-scroll" style="background-color: #1E9797">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<footer id="contact" class="c-section4 no-padding" style="padding-top: 20px; width: 100%; bottom: 0px; margin-top:240px; position: relative;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <p class="c-footer">{{ trans('messages.footerInfo') }}</p>
      </div>
    </div>
  </div>
</footer>

@endsection
