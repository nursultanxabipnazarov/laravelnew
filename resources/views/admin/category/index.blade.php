<x-admin.layout.header>
     
    <x-admin.layout.nav>
    </x-admin.layout.nav>
  
    <div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-0">Static Table With Checkboxes</h5>
              <h4 >   @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
    </h4>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th>
                      <label class="customcheckbox mb-3">
                        <input type="checkbox" id="mainCheckbox" />
                        <span class="checkmark"></span>
                      </label>
                    </th>
                    <th scope="col">Rendering engine</th>
                    <th scope="col">Browser</th>
                    <th scope="col">Platform(s)</th>
                    <th scope="col">Engine version</th>
                  </tr>
                </thead>
                <tbody class="customtable">
                  <tr>
                    <th>
                      <label class="customcheckbox">
                        <input type="checkbox" class="listCheckbox" />
                        <span class="checkmark"></span>
                      </label>
                    </th>
                    @forelse ($categories as  $category)

                    <td>{{$category->name}}</td>
                    <td>{{$category->desc}}</td>
                    <td><a href="{{ route('categories.edit', ['category'=>$category->id]) }}">edit</td>
                    <td>4</td>
                  </tr>
                  @empty
                  <tr>
                      <td colspan="3">No categories found</td>
                  </tr>
              @endforelse
                  
                  
                </tbody>
              </table>
            </div>
          </div>
    </div>
    ?
  
  </x-admin.layout.header>
  