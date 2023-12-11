<x-admin.layout.header>

    <x-admin.layout.nav>
    </x-admin.layout.nav>

    <div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Basic Datatable</h5>
              <div class="table-responsive">
                <table
                  id="zero_config"
                  class="table table-striped table-bordered"
                >
                  <thead>
                    <tr>
                      <th>CategoryName</th>
                      <th>Productname</th>
                      <th>Price</th>
                      <th>img</th>
                      <th>descrip</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product )

                    <tr>
                      <td>{{$product->category->name}}</td>
                      <td>{{$product->name}}</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    @endforeach

                  </tbody>

                </table>
              </div>
            </div>
          </div>
    </div>
</div>

  </x-admin.layout.header>
