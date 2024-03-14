<div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i> &nbsp;

                                    @if(Route::has('login'))
                                    @auth

                                    <span class="label-user">
                                    
                                    @php
                                    $user = Auth::user();
                                    print($user->user_name);
                                    @endphp
                                    </span>

                                    &nbsp; 

                                    <div class="menu" >
                                    <a  id="item" href="#"> <img class="img-logo" src="user//images/img_avatar_male.png"> </a>
                                        <div id="submenu" style="float:left">
                                            <a href="{{url('user/profile')}}">My Profile</a>
                                            <a href="{{ url('/logout') }}">Log out</a>
                                        </div>
                                    </div>
                                
                                    
                                    
                                    @else
                                    <a class="link-login" href="{{route('login')}}">Log in</a> | <a class="link-register" href="{{route('register')}}">Register</a>
                                    
                                    @endauth
                                    @endif
                                
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->