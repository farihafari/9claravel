@include("components.header")



            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded mx-0">
                    <div class="col-md-12">
                        <h3>All categoriers</h3>
                        <table class="table">
                            <thead>
                                <tr>
                             
                                    <th scope="col"> Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allCat as $values)
                                    
                               
                                <tr>
                                    <th scope="row">{{$values['name']}}</th>
                                    <td><img src="assets/img/categories/{{$values['image']}}" alt="" srcset="" width="90px"></td>
                                    <td><a href="" class="btn btn-info">Edit</a></td>
                                    <td><a href="" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
@include("components.footer")
