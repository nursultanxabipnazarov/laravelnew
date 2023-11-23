
<x-admin.layout.header>

  <x-admin.layout.nav>
  </x-admin.layout.nav>




<div class="page-wrapper">
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Form Basic</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
               <div class="row">
                <div class="col-md-6">
                <div class="card">
                <form  action="{{route('products.store')}}" method="POST" class="form-horizontal">

                @csrf
                <div class="card-body">
                  <h5 class="card-title">Form Elements</h5>
                  <div class="form-group row">
                    <label class="col-md-3 mt-3">Category Select</label>
                    <div class="col-md-9">
                      <select name="category_id"
                        class="select2 form-select shadow-none"
                        style="width: 100%; height: 36px"
                      >
                      <option>Categrya tanlan</option>
                      @foreach ($categories as $category )
                          <option value="{{$category->id}}"> {{$category->name}}</option>
                          @endforeach



                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Product name</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          name = "name"
                          class="form-control"
                          id="name"
                          placeholder="Tovar atin kiritin"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Product price</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                        name="price"
                          class="form-control"
                          id="fname"
                          placeholder="tovar senasin jazin"
                        />
                      </div>
                    </div>

                  <div class="form-group row">
                    <label class="col-md-3">File Upload</label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        <input
                          type="file"
                          name="img"
                          class="custom-file-input"
                          id="validatedCustomFile"
                          required
                        />
                        <label
                          class="custom-file-label"
                          for="validatedCustomFile"
                          >Choose file...</label
                        >
                        <div class="invalid-feedback">
                          Example invalid custom file feedback
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Descrption</label
                      >
                      <div class="col-sm-9">
                        <textarea name="desc" class="form-control"></textarea>
                      </div>
                    </div>

                <div class="border-top">
                  <div class="card-body">
                    <button type="submit"  class="btn btn-primary">
                      Submit
                    </button>
                  </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            </div>
            </div>



</div>

</x-admin.layout.header>






















<!--
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" required>

    <label for="category">Category:</label>
    <select name="category" required>

            <option value=""></option>

    </select>

    <button type="submit">Add Product</button>
</form> -->
