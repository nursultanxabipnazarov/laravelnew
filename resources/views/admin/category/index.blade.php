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
                    
                    <th scope="col">Rendering engine</th>
                    <th scope="col">Browser</th>
                    <th scope="col">Platform(s)</th>
                    <th scope="col">Engine version</th>
                  </tr>
                </thead>
                <tbody class="customtable">
                  <tr>
                    
                    @forelse ($categories as  $category)

                    <td>{{$category->name}}</td>
                    <td>{{$category->desc}}</td>
                    <td ><a class="badge bg-primary" href="{{ route('categories.edit', ['category'=>$category->id]) }}">edit</td>
                      <td>
                        <a href="">
                          <form action="{{ route('categories.destroy', ['category'=>$category->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger" type="submit">
                              DELETE
                            </button>
                          </form>
                        </a>
                      </td>
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
  