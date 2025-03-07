<?php
/**
 * Displays preloader
 *
 * @package Magty
 */
?>
<style type="text/css">
.magty-preloader{--loader-size:35px;--loader-speed:0.8s;--loader-color:var(--global--color-accent);position:relative;display:inline-block;height:var(--loader-size);width:var(--loader-size);animation:uf-spin calc(var(--loader-speed) * 2.5) infinite linear}.magty-preloader__dot{position:absolute;height:100%;width:30%}.magty-preloader__dot:after{content:"";position:absolute;height:0%;width:100%;padding-bottom:100%;background-color:var(--loader-color);border-radius:50%}.magty-preloader__dot:first-child{bottom:5%;left:0;transform:rotate(60deg);transform-origin:50% 85%}.magty-preloader__dot:first-child::after{bottom:0;left:0;animation:wobble1 var(--loader-speed) infinite ease-in-out;animation-delay:calc(var(--loader-speed) * -.3)}.magty-preloader__dot:nth-child(2){bottom:5%;right:0;transform:rotate(-60deg);transform-origin:50% 85%}.magty-preloader__dot:nth-child(2)::after{bottom:0;left:0;animation:uf-wobble1 var(--loader-speed) infinite calc(var(--loader-speed) * -.15) ease-in-out}.magty-preloader__dot:nth-child(3){bottom:-5%;left:0;transform:translateX(116.666%)}.magty-preloader__dot:nth-child(3)::after{top:0;left:0;animation:uf-wobble2 var(--loader-speed) infinite ease-in-out}@keyframes uf-spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes uf-wobble1{0%,100%{transform:translateY(0) scale(1);opacity:1}50%{transform:translateY(-66%) scale(.65);opacity:.8}}@keyframes uf-wobble2{0%,100%{transform:translateY(0) scale(1);opacity:1}50%{transform:translateY(66%) scale(.65);opacity:.8}}
</style>
<div id="magty-preloader-wrapper">
	<div class="preloader-loader-wrapper">
		<div class="magty-preloader">
			<div class="magty-preloader__dot"></div>
			<div class="magty-preloader__dot"></div>
			<div class="magty-preloader__dot"></div>
		</div>
	</div>
</div>