@extends('admin/layouts/app')

@section('main-content')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
@endsection
 



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
           <!-- general form elements -->
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Titles
                </h3>
              </div>  

              @include('includes.messages')
          <!-- form start -->
                <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="card-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label for="subtitle">Post Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle">
                  </div>

                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                  </div>

                </div>    

                 <div class="col-lg-6">
                    <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image" >Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    </div>


                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="status" value="1" id="status">
                    <label class="form-check-label" for="status" >Publish</label>
                  </div>
            </div> 
            <br>
            <div class="col-lg-6">
             <div class="form-group">
                  <label>Select Tag</label>
                  <select class="form-control select2" style="width: 100%;" name="tags[]">
                  @foreach($tags as $tag)
                  
                  <option value="{{ $tag->id }}">{{$tag->name}}</option>
                  @endforeach  
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control select2" style="width: 100%;" name="categories[]" >
                    <@foreach ($categories as $category)
                  
                  <option value="{{ $category->id }}">{{$category->name}}</option>
                  @endforeach  
                  </select> 
                </div>
                </div>              
                  
                </div>
                <!-- /.card-body -->

                 <!-- Main content -->
    
            <div class="card-header">
              <h3 class="card-title">
                Write Post Body Here
                
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" name="body" placeholder="Place some text here" id="editor1"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              
            </div>
            
          </div>
          
      <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
 
        </div>
        <!-- /.col-->
      </div>

      <!-- ./row -->
    </section>
    <!-- /.content -->

           
</div>   
            

   
  </div>
  <!-- /.content-wrapper -->

  @endsection

  @section('footerSection')
  <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
  <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
  <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
  <script>
    $(document).ready(function(){
      $('.select2').select2()
    
    });
    </script>  

 @endsection   
