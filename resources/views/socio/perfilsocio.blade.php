@extends('layouts.layaut')
@section('link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@section('content')

    
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading">
                                <h4>perfil de usuario</h4>
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                          <span class="navbar-toggler-icon"></span>
                                        </button>
                                      
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                          <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="#">Link</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                              </a>
                                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                              </div>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                          </ul>
                                          <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                          </form>
                                        </div>
                                      </nav>
                            </header>
                            <div class="panel-body">
                                
                            </div>
                        </section>
                    </div>
                </div>
        </section>
    </section>



@endsection