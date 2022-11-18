<!--父視圖-->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bload - @yield('title')</title>
  <link rel="stylesheet" href="{{asset('dashboard/style.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
@yield('css')
</head>
<body>
@section('contect')
    <div>可被選擇繼承的內容</div>
@show
<!-- partial:index.partial.html -->
<header class="new">
  Did you tried to add <a href="https://codepen.io/elrumordelaluz/full/pHKcC?harlem=shake">?harlem=shake</a> at the end of the Pen url?
</header>
<section class="section shamrock">
   <h1>CS<span class="shake shake-delay">Shake</span></h1>
	  <h4>Some CSS classes to <span class="shake">move your DOM!</span></h4>
			<ul class="previews">
				<li>
					<i class="preview-item shake">
						Bs
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Basic Shake</p>
				</li>
				<li>
					<i class="preview-item shake shake-slow">
						Ss
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Slow Shake</p>
				</li>
				<li>
					<i class="preview-item shake shake-little">
						Ls
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Little Shake</p>
				</li>
				<li>
					<i class="preview-item shake shake-hard">
						Hs
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Hard Shake</p>
				</li>
				<li>
					<i class="preview-item shake shake-horizontal">
						&#8644;
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Fixed Horizontal</p>
				</li>
				<li>
					<i class="preview-item shake shake-vertical">
						&#8693;
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Fixed Vertical</p>
				</li>
				<li>
					<i class="preview-item shake shake-rotate">
						&#8635;
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Fixed Rotation</p>
				</li>
				<li>
					<i class="preview-item shake shake-opacity">
						Os
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Opacity Shake</p>
				</li>
				<li>
					<i class="preview-item shake shake-crazy">
						✌
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Crazy Shake</p>
				</li>
				<li>
					<i class="preview-item shake shake-constant">
						&#8455;
						<span class="flip"></span>
					</i>
					<p class="preview-desc">Constant Shake</p>
				</li>
			</ul>
  <footer>Made with <span class="shake shake-slow shake-constant">&#9829;</span> by <a class="shake shake-constant hover-stop" href="https://twitter.com/elrumordelaluz">@elrumordelaluz</a>, using <a href="http://sass-lang.com/">Sass</a><br>Full project page <a href="https://elrumordelaluz.github.io/csshake">elrumordelaluz.github.io/csshake</a> </footer>
</section>
















<audio id="track" preload="auto">
  <source src="http://elrumordelaluz.com/audio/harlemshake.ogg" type="audio/ogg">
  <source src="http://elrumordelaluz.com/audio/harlemshake.mp3" type="audio/mpeg">
</audio>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/elrumordelaluz/pen/OJLYwM.js'></script><script  src="{{ asset('dashboard/script.js')}}"></script>
@yield('js');
</body>
</html>
