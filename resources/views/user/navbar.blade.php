 <!--header starts-->

	<header>

		<a href="{{url('/')}}"  class="logo"><img src="images/model logo.png"><p>TMA</p></a>

		<nav class="navbar">
			<a class="active" href="{{ url('/')}}">home</a>
			<a href="{{url('models')}}">models</a>
			<a href="{{url('apply')}}">Apply</a>
			<a href="#contact_us">contact us</a>
		</nav>

       <!-- <a href="#"><i class="fas fa-bars"></i></a> -->

	     <div class="icons">
			<i class="fas fa-bars" id="menu-bars"></i>
			<i class="fas fa-search" id="search-icon"></i>
		</div>

	</header>
 <!--header ends-->

    <!--search form starts-->
    <form action="" method="post" id="search-form">
        <input type="search" placeholder="search here..." id="search-box" name="">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!--search form ends-->


 
