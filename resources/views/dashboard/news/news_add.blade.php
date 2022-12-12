@extends('layouts.adminpanel.admin')
@section('content')

@if (Session()->has('success'))
<div class="alert alert-success" role="alert">
 {{Session()->get('success')}}
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <div>
          <p>Something wrong...</p>
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <div class="d-flex flex-row justify-content-between">
            <p>ADD News</p>
            <a class="btn btn-lihat-sm" href="{{url('admin/news')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <label for="author" class="form-label">Author</label>
              <input type="text" class="form-control" id="author" name="author" autocomplete="off">
            </div>
            <div class="col-md input-group">
              <input type="file" class="form-control" id="image" name="image">
              <label class="input-group-text" for="image">Upload</label>
            </div>
            <div class="col-md-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" autocomplete="off">

            </div>
            <div class="col-md-12">
              <label for="content" class="form-label">Content</label>
              <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-lihat-sm">Add</button>
            </div>
          </form>
    </div>
  </div>
@endsection

@section('script')
<script>
  tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
</script>
@endsection