@include("components.header")

  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
    <div class="row bg-light rounded mx-0">
        <div class="col-md-12">
            <h3>Add Category</h3>
            <form method="post" action="{{url('edit')}}" enctype="multipart/form-data">
                <input type="hidden" value="{{$data['id']}}" name="cid">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" name="cname" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$data['name']}}">
                    <div id="emailHelp" class="form-text">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">image</label>
                    <input type="file" name="cimage" class="form-control" id="exampleInputPassword1">
                <img src="assets/img/categories/{{$data['image']}}" width="90px" alt="">
                </div>
           
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Blank End -->
@include("components.footer")