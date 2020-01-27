<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">

<nav> 
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
 </nav>

  

  <script src="{{ asset('js/materialize.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  </script>