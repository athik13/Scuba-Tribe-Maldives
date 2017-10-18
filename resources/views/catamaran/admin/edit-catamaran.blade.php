@extends('layouts.app-admin')

@section('content')

    <div class="content-body" style="margin-top: 100px">
      <section class="page-section pt-0 pb-50">
        <div class="container">
          <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              
              @endif
            @endforeach
          </div> 
          <!-- end .flash-message -->
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">Edit <strong>{{ $catamaran->name }}</strong> Catamaran</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
          <form class="form clearfix" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="review-content pattern relative mb-15" style="">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="trans-uppercase mb-10">Basic Details</h6>
                  <div class="cws_divider mb-30"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                  <label for="name">Name</label>
                  <input value="{{ $catamaran->name }}" id="name" itype="text" name="name" size="191" placeholder="   Name of Catamaran" aria-required="true" class="form-row">
                </div>
                <div class="col-md-2">
                  <label for="rating">Select rating</label>
                  <select class="form-control form-row" name="star" id="rating">
                    @for($i = 1; $i <= 5; $i++)
                      <option value="{{ $i }}" {{ ($catamaran->star == $i ? 'selected' : '') }} >{{ $i }}</option>    
                    @endfor
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="description">Description</label>
                  <textarea class="description" id="description" name="description" cols="40" rows="4" placeholder="Write a description" aria-invalid="false" aria-required="true" class="mb-20">
                    {!! $catamaran->description !!}
                  </textarea>
                </div>
                <div class="col-md-12">
                  <label for="features">Features</label>
                  <textarea class="boat_features" id="features" name="features" cols="40" rows="4" aria-invalid="false" aria-required="true" class="mb-20">
                    {!! $catamaran->features !!}
                  </textarea>
                </div>
              </div>
            </div>
            
            <div class="review-content pattern relative mb-15" style="">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="trans-uppercase mb-10">Add Photos to gallery</h6>
                  <div class="cws_divider mb-30"></div>
                </div>
              </div>
              <div class="row mt-15">
                <div class="col-md-12">
                    <input type="file" class="form-control" id="images" name="image[]" onchange="preview_images();" multiple/>
                </div>
              </div>
              <div class="row mt-15 mb-15" id="image_preview" style="margin-top: 10px"></div>
              <div class="row mt-15 mb-15" id="image_preview_old" style="margin-top: 10px">
                <div class="col-md-12">
                  <h6>Old Images 
                    <strong>
                      (Before deleting any image make sure to save all changes to other fields) 
                      <br>
                      <br>
                      Click any image to preview it.
                    </strong>
                  </h6>
                </div>
                @foreach($catamaran->images as $image)
                  <div class="clearfix col-lg-2 col-md-2 col-sm-4 col-xs-6" style="width: 200px; height:100%; margin-top: 10px; margin-bottom: 10px;">
                    <a href="{{ $image->photo_url }}" data-title="{{ $catamaran->name }}'s image" data-toggle="lightbox">
                      <img class='img-responsive img-thumbnail' src="{{ $image->photo_url }}" style="width: 200px; height:130px;">
                    </a>
                    <center>
                      <a href="{{ url('admin/catamaran/edit/') }}/{{ $catamaran->slug }}/image/delete/{{ $image->id }}" onclick="return confirm('Are you sure you want to delete this image?');" class="btn btn-danger" style="margin-top: 3px;">Delete</a>
                      @if($image->main == '0')
                        <a href="{{ url('admin/catamaran/edit/') }}/{{ $catamaran->slug }}/image/main/{{ $image->id }}" class="btn btn-warning" style="margin-top: 3px;">Main Photo</a>        
                      @else
                        <a href="" class="btn btn-warning disabled" style="margin-top: 3px;" disabled>Current Main</a>
                      @endif                      
                    </center>
                    </center>
                  </div>
                @endforeach
              </div>
              <div class="row mt-15">
                <div class="col-md-12">
                  <input type="submit" value="Update Catamaran" class="cws-button alt float-right">
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>

@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
<!-- Include Editor style. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />    

<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" type="text/css" />

<style>
.grid-item {
    width: 100%;
    height: 130px;
}
</style>

@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/js/froala_editor.pkgd.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script> 
$(function() { 
  $('.description').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
  $('.boat_features').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
  $('.food_and_drinks').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
  $('.diving').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
  $('.gear_rental').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  }) 
}); 

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    alwaysShowClose: true,
    event.preventDefault();
    $(this).ekkoLightbox();
});
</script>
<script>
  function preview_images() {
      var total_file = document.getElementById("images").files.length;
      for (var i = 0; i < total_file; i++) {
          $('#image_preview').append("<div class='col-md-3' style='margin: 5px'><img class='img-responsive img-thumbnail' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
      }
  }
</script>
@endsection