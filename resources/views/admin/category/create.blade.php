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
            <div class="card">
                <form action="" method="post">
                <div class="card-body">
                  <h5 class="card-title">Category create</h5>
                  <div class="row mb-3 align-items-center">
                    <div class="col-lg-4 col-md-12 text-end">
                      <span>Category</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                      <input
                        type="text"
                        data-toggle="tooltip"
                        title="A Tooltip for the input !"
                        class="form-control"
                        id="validationDefault05"
                        placeholder="name"
                        required
                      />
                    </div>
                  </div>
                  <div class="row mb-3 align-items-center">
                    <div class="col-lg-4 col-md-12 text-end">
                      <span>Discreption</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="description"
                        required
                      />
                      <button
                      type="button"
                      class="btn btn-success btn-sm text-white"
                    >
                      ADD
                    </button>
                    </div>
                    
                  </div>
                  
                </div>
            </form>
              </div>
          </div>
          
    </div>
  
  </x-admin.layout.header>
  