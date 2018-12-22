<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li><a href="{{url('/home')}}">Home</a></li>
			    	<li><a href="{{url('/about')}}">About</a></li>
			    	<li><a href="{{url('/delivery')}}">Delivery</a></li>
			    	<li><a href="{{url('/news')}}">News</a></li>
			    	<li><a href="{{url('/Contact_us')}}">Contact</a></li>
                                <li><a href="{{url('/login')}}">Login</a></li>
                                <li><a href="{{url('/registration')}}">Register</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     <!--	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	</div>-->
             </div>
              <div class="form-group">
                    {{ Form::label('searchbar:', null) }}
                    {{ Form::text('searchbar', '', ['placeholder' => '' , 'id' => 'searchText' , 'class' => 'searchbar' ]) }}
                </div>
                <input type="submit" id="searchBtn" onclick="event.preventDefault();getSearchProducts()" value="search">
             <div class="clear">
             
	     </div>