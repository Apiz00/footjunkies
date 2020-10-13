@extends('layouts.manager')

@section('content')
<div class="main-panel">
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
    >
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:;">Manager Dashboard</a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          aria-controls="navigation-index"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">

          <ul class="navbar-nav">
         

            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="javascript:;"
                id="navbarDropdownProfile"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">Account</p>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdownProfile"
              >

                <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Used Space</p>
                <h3 class="card-title">
                  49/50
                  <small>GB</small>
                </h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons text-danger">warning</i>
                  <span>Get More Space...</span>
                </div>
              </div>
            </div>
          </div>




          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          href="#profile"
                          data-toggle="tab"
                        >
                          <i class="material-icons">api</i> Tasks :
                          <div class="ripple-container"></div>
                        </a>
                      </li>


                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <table class="table">
                        <tbody>
                            @foreach ($tasks as $task)
                            <form action="{{'/manager/task/delete/'.$task->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            <tr>
                                {{-- <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""
                                                checked />
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                            </td> --}}
                                <td>
                                   {{$task->description}}
                                </td>
                                <td class="td-actions text-right">
                                    <button type="submit" rel="tooltip" title="Remove"
                                        class="btn btn-done btn-link btn-sm">
                                        <i class="material-icons">done</i>
                                    </button>
                                </td>
                            </tr>
                        </form>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="messages">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  checked
                                />
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>
                            Flooded: One year later, assessing what was lost
                            and what was found when a ravaging rain swept
                            through metro Detroit
                          </td>
                          <td class="td-actions text-right">
                            <button
                              type="button"
                              rel="tooltip"
                              title="Edit Task"
                              class="btn btn-primary btn-link btn-sm"
                            >
                              <i class="material-icons">edit</i>
                            </button>
                            <button
                              type="button"
                              rel="tooltip"
                              title="Remove"
                              class="btn btn-danger btn-link btn-sm"
                            >
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                />
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>
                            Sign contract for "What are conference
                            organizers afraid of?"
                          </td>
                          <td class="td-actions text-right">
                            <button
                              type="button"
                              rel="tooltip"
                              title="Edit Task"
                              class="btn btn-primary btn-link btn-sm"
                            >
                              <i class="material-icons">edit</i>
                            </button>
                            <button
                              type="button"
                              rel="tooltip"
                              title="Remove"
                              class="btn btn-danger btn-link btn-sm"
                            >
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="settings">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                />
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>
                            Lines From Great Russian Literature? Or E-mails
                            From My Boss?
                          </td>
                          <td class="td-actions text-right">
                            <button
                              type="button"
                              rel="tooltip"
                              title="Edit Task"
                              class="btn btn-primary btn-link btn-sm"
                            >
                              <i class="material-icons">edit</i>
                            </button>
                            <button
                              type="button"
                              rel="tooltip"
                              title="Remove"
                              class="btn btn-danger btn-link btn-sm"
                            >
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  checked
                                />
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>
                            Flooded: One year later, assessing what was lost
                            and what was found when a ravaging rain swept
                            through metro Detroit
                          </td>
                          <td class="td-actions text-right">
                            <button
                              type="button"
                              rel="tooltip"
                              title="Edit Task"
                              class="btn btn-primary btn-link btn-sm"
                            >
                              <i class="material-icons">edit</i>
                            </button>
                            <button
                              type="button"
                              rel="tooltip"
                              title="Remove"
                              class="btn btn-danger btn-link btn-sm"
                            >
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  checked
                                />
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>
                            Sign contract for "What are conference
                            organizers afraid of?"
                          </td>
                          <td class="td-actions text-right">
                            <button
                              type="button"
                              rel="tooltip"
                              title="Edit Task"
                              class="btn btn-primary btn-link btn-sm"
                            >
                              <i class="material-icons">edit</i>
                            </button>
                            <button
                              type="button"
                              rel="tooltip"
                              title="Remove"
                              class="btn btn-danger btn-link btn-sm"
                            >
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- <footer class="footer">
      <div class="container-fluid">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://creative-tim.com/presentation">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          , made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com" target="_blank"
            >Creative Tim</a
          >
          for a better web.
        </div>
      </div>
    </footer> -->
  </div>
@endsection
