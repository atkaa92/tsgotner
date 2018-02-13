<div class="wrap">
	<div id="content">
		<span class="expand"></span>
	</div>
</div>
<nav class="menu">
	<button class="toggle_nav"><i class="fa fa-bars"></i></button>
	<div class="logo">
		<a href="/"><img src="/img/logo.png" alt="logo"></a>
	</div>
	<ul class="menuList" id="demos">
		@foreach($rooms as $r)
			<li><a class="{{ $r->slug == request()->segment(3) ? 'active' : '' }}" href="/room/{{$r->slug}}">{{ getPropByLang($r,'name') }}</a></li>
		@endforeach
		<li><a href="#" data-name="about">{{ trans('data.menu-about') }}</a></li>
<!--			<li><a href="#" data-name="reserv">Reservation</a></li> -->
	</ul>
	<ul class="language" style="color:#fff">
		@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
			<li >
				<a  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
					{{ $properties['native'] }}
				</a>
			</li>
		@endforeach
	</ul>
</nav>
<section class="content" id="about">
	<div id="en" class="about_col">
		<h1 class="title" >{{ trans('data.menu-about') }}</h1>
		<div class="text">
			<p>
				{!! trans('data.about') !!}
			</p>
		</div>
	</div>
 </section>
 <section class="content" id="reserv">
	<div id="en" class="text">
		<h1 class="title">Reservation</h1>
		<form action="#" class="reservForm">
			<dl class="select">
				<dt><span>Rooms</span> <i class="fa fa-angle-right"></i></dt>
				<dd>Big Russian</dd>
				<dd>Mini Russian</dd>
				<dd>Edem</dd>
				<dd>Mirage</dd>
				<dd>Royal</dd>
				<dd>Cottage</dd>
			</dl>
			<select>
				<option value="Russian">Big Russian</option>
				<option value="Laguna">Mini Russian</option>
				<option value="Edem">Edem</option>
				<option value="Mirage">Mirage</option>
				<option value="Royal">Royal</option>
				<option value="Cottage">Cottage</option>
			</select>
			<div class="input-group clockpicker">
				<input type="text" class="form-control" value="09:30">
				<i class="fa fa-clock-o"></i>
			</div>
			<div class="input-group clockpicker">
				<input type="text" class="form-control" value="09:30">
				<i class="fa fa-clock-o"></i>
			</div>
			<div class="inputWrap">
				<input type="text" id="datepicker" value="Data">
				<i class="fa fa-calendar"></i>
			</div>
			<div class="clear messageWrap">
				<label for="n">Name &#40;Required&#41;</label>
				<input type="text" id="n">
				<label for="p">Phoe number &#40;Required&#41;</label>
				<input type="text" id="p">
				<label for="n">Message</label>
				<textarea></textarea>
			</div>
			<button class="reservBtn" type="submit">Send</button>
		</form>			
	</div>
	<div id="ru" class="text">
		<h1 class="title">Резервация</h1>
	</div>
	<div id="arm" class="text">
		<h1 class="title">Մեր մասին</h1>
	</div>
</section>