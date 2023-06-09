<!DOCTYPE html>
<html lang="fr">
@include('layouts.admin.components.partials.topbar')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.admin.components.partials.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.admin.components.partials.sidenav')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>List Client</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">List Client</li>
              </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
        
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">List</h5>                     
        
                      <!-- Table with stripped rows -->
                      <table class="table datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Job</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <th scope="row">#{{ $user->id}}</th>
                            <td> {{$user->name}}</td>
                            <td>Tel : <bold> {{$user->phone}} </bold> Email : <bold>{{$user->email}}</bold></td>
                            <td>{{$user->job}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <button type="button" class="btn btn-info"><a href="{{ route('administrateur.userdetail', [$user->id])}}"><i class="bi bi-eye"></i></a></button>                            
                                </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>        
                    </div>
                  </div>
        
                </div>
              </div>
        </section>
    </main>
    @include('layouts.admin.components.partials.footer')
</body>
</html>