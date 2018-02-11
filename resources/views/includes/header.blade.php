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
		<li><a class="{{ $currPage == 'royal' ? 'active' : '' }}" href="/royal">Royal</a></li>
		<li><a class="{{ $currPage == 'mirage' ? 'active' : '' }}" href="/mirage">Mirage</a></li>
		<li><a class="{{ $currPage == 'bigrussian' ? 'active' : '' }}" href="/bigrussian">Big Russian</a></li>
		<li><a class="{{ $currPage == 'minirussian' ? 'active' : '' }}" href="/minirussian" data-name="laguna">Mini Russian</a></li>
		<li><a class="{{ $currPage == 'edem' ? 'active' : '' }}" href="/edem">Edem</a></li>  
		<li><a class="{{ $currPage == 'eastern' ? 'active' : '' }}" href="/eastern">Eastern</a></li>
		<li><a class="{{ $currPage == 'cottages' ? 'active' : '' }}" href="/cottages">Cottages</a></li>
		<li><a class="{{ $currPage == 'cottage10' ? 'active' : '' }}" href="/cottage10">Cottage #10</a></li>
		<li><a href="#" data-name="about">About Us</a></li>
<!--			<li><a href="#" data-name="reserv">Reservation</a></li> -->
	</ul>
</nav>
<section class="content" id="about">
	<ul class="language">
		<li class="arm">Arm</li>
		<li class="en">En</li>
		<li class="ru">Ru</li>
	</ul>
	<div id="en" class="about_col">
		<h1 class="title" >About Us</h1>
		<div class="text">
			<p>
				Unforgettable healthy recreation - “<strong>Tsghotner</strong>” sauna-hotel complex. “<strong>Tsghotner</strong>”
				is a vast recreational complex, located in the heart of Yerevan and comprising
				Eastern, Russian and Finnish baths, large pools, Jacuzzi, dance and billiard
				halls as well as an exquisite restaurant and comfortable suites. The rooms of
				our hotel will be a pleasant surprise even for the most demanding customers.
				The interior design of the complex is special for its sense of taste and creativity.
				At “<strong>Tsghotner</strong>” highly professional specialists will provide you with unique massage
				and spa services. When we say “<strong>sauna</strong>” we often imagine a hot, stuffy room, where
				you can hardly breathe and which you are eager to escape as quickly as possible.
				In our complex it is also hard to breathe but because of our breathtaking quality and choice.
			</p>
		</div>
	</div>
	<div id="ru" class="about_col ">
		<h1 class="title" >О нас</h1>
		<div class="text">
			<p>
				Незабываемый отдых с пользой для здоровья - сауна-отель комплекс “<strong>Цхотнер</strong>”. “<strong>Цхотнер</strong>” это центр
				отдыха в самом сердце Еревана, включающий в себя восточную, русскую, финскую бани, просторные
				бассейны, джакузи, танцевальный и биллиардный залы, а также изысканный ресторан и комфортабельные
				апартаменты. Номера нашей гостиницы приятно удивят даже самых требовательных клиентов. Дизайн
				интерьера комплекса отличается особым вкусом и креативностью.  В “<strong>Цхотнер</strong>” к вашим услугам
				профессиональные специалисты в области массажа и спа-услуг.  Часто, под словом <strong>сауна</strong> мы представляем 
				аркую, душную комнату, где трудно дышать и откуда хочется поскорее выбраться. В “<strong>Цхотнер</strong>” у Вас
				также захватит дыхание, но уже от обилия и качества наших услуг.
			</p>
		</div>
	</div>
	<div id="arm" class="about_col">
	<h1 class="title" >Մեր մասին</h1>
		<div class="text">
			<p>
				«<strong>Ծղոտներ</strong>» սաունա-հյուրանոցային համալիր- անմոռանալի հանգիստ՝ օգտակար առողջության համար «<strong>Ծղոտներ</strong>»-ը հանգստյան
				կենտրոն է հենց Երևանի սրտում, որն իր մեջ ներառում է արևելյան, ռուսական, ֆիննական բաղնիքներ, ընդարձակ լողավազաններ,
				ջակուզիներ, բիլիարդի համար նախատեսված սրահներ և պարահրապարակներ, ինչպես նաև ընտիր ռեստորան և հարմարավետ շքեղ
				հարկաբաժիններ։ Մեր հյուրանոցի համարները հաճելիորեն կզարմացնեն նույնիսկ ամենապահանջկոտ հաճախորդներին։  Համալիրի ներքին
				ձևավորումը աչքի է ընկնում յուրահատուկ ճաշակով և ինքնատիպությամբ «<strong>Ծղոտներ</strong>»-ում Ձեր տրամադրության տակ են մերսման և
				SPA-ծառայությունների արհեստավարժ մասնագետներ։ Հաճախ «<strong>սաունա</strong>» ասելով պատկերացնում ենք շոգ, հեղձուցիչ սենյակ, որտեղ
				դժվար է շնչել և որտեղից ուզում ես ժամ առաջ դուրս պրծնել…«<strong>Ծղոտներ</strong>»-ում նույնպես Ձեր շունչը կկտրվի, բայց այս անգամ արդեն
				մեր ծառայությունների բարձր որակից և առատությունից։
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