<div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>
              {{__('messages.pageTitle')}}
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('home')}}">{{__('messages.home')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">{{__('messages.about')}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('service')}}"> {{__('messages.services')}} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('guard')}}"> {{__('messages.guards')}} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">{{__('messages.contactUs')}}</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>