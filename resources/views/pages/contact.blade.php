@extends('main')

@section('title', 'İletişim')

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h1>İletişim</h1>
        <hr>
        <form action="{{ url('contact') }}" method="POST">
          @csrf
          <div class="form-group">
            <label>E-posta</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Konu</label>
            <input type="text" id="konu" name="subject" class="form-control">
          </div>
          <div class="form-group">
            <label>Mesaj</label>
            <textarea  id="mesaj" name="message" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
           <input type="submit" class="btn btn-success" value="Gönder"> 
         </div>
       </form>
     </div>
   </div>
@endsection