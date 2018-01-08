@include('admin.inc.header')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Slide
        <small>Create New Slide</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slide</a></li>
        <li class="active">Add Slide</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <div class="box">
            <div class="box-body">
              {!! Form::open
                (
                  array(
                  'url'     => 'admin/slide',
                  'method'  => 'post',
                  'files'   => true,
                  'role'    => 'form',
                  'id'    => 'form2'
                  )
                )
              !!}
                <div class="form-horizontal">
                <!-- <div class="">
                    <div class="successHandler alert alert-success no-display alert-dismissible fade in">
                      <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                      <strong>Your detail has been submitted!</strong>Thank you </div>
                    <div class="errorHandler alert alert-danger no-display alert-dismissible fade in">
                      <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                      <strong>You have some form errors!</strong> Please check below. </div>
                  </div> -->
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Title <span class="symbol required"></span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control"   placeholder="Enter your title" name="titlename" required >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Link <span class="symbol required"></span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="" placeholder="www.exaple.com" name="slidelink" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Upload Image <span class="symbol required"></span></label>
                    <div class="col-sm-9">
                      <div class="file-upload">
                          <input type="file" class="file-input ImgeInput" id="uploadpicture" accept="image/*" name="uploadpicture" required />
                           {!! HTML::image('public/images/targetImage.png', 'alt', array( 'class' => 'targetImage', 'name' => 'uploadpicture')) !!}
                       </div>
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-9">
                      <textarea class="textarea" name="description" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                      </textarea>
                      <!-- <textarea  class="form-control summernote" name="description"></textarea> -->
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" value="Submit" class="btn btn-success">
                      <input type="button" value="Cancel" class="btn btn-danger">
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
            </div>
          </div>

        </div>
      </div>
      
    </section>

  </div>


@include('admin.inc.footer')

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>