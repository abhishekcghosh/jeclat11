<script language="javascript" type="text/javascript">
	 var carousel_1;
	function carousel_1_initCallback(carousel) {
			carousel.selected=1
		jQuery('.carousel_1_control a').bind('click', function() {
			carousel.startAuto(0);
			carousel.scroll( this.className);
			return false; 
		});
		jQuery('#box_carousel_next').bind('click', function() {
			carousel.next();
			carousel.startAuto(0);
			return false;
		});
		jQuery('#box_carousel_prev').bind('click', function() {
			carousel.prev();
			carousel.startAuto(0);
			return false;
		});
		carousel.clip.hover(function() {
			carousel.stopAuto();
		}, function() {
			carousel.startAuto();
		});
	};
	function carousel_1_beforeAnimation(carousel,element,i,status){
			$('#carousel_1_slide_'+carousel.selected).attr("src","img/slide_off.gif");    
		var idx = carousel.index(i, carousel.options.size);
			carousel.add(i,carousel.get(idx).html())
		}
	function carousel_1_afterAnimation(carousel,element,index,status){
		var idx = carousel.index(index, carousel.options.size);
			carousel.selected=idx
			$('#carousel_1_slide_'+idx).attr("src","img/slide_on.gif");
			}
	function carousel_1_itemVisibleOutCallback(carousel, item, i, state, evt){
		if (i>carousel.options.size || i<0){
			carousel.remove(i);
			}
		carousel.startAuto();
			};
	jQuery(document).ready(function() {
		jQuery("#carousel_1").css("display","");
		jQuery("#carousel_1").jcarousel({
			scroll: 1,
			auto: 1,
			wrap: 'circular',
			initCallback: carousel_1_initCallback,
			buttonNextHTML: null,
			buttonPrevHTML: null,
			itemVisibleInCallback: {
						onBeforeAnimation: carousel_1_beforeAnimation,
						onAfterAnimation: carousel_1_afterAnimation
							},
					itemVisibleOutCallback:carousel_1_itemVisibleOutCallback
		});
	});
</script>
<ul id="carousel_1" style="display: none">
	<li><img src="gallery/slideshow/gp1.jpg" height="250" width="500" border="0" /></li>
	<li><img src="gallery/slideshow/gp2.jpg" height="250" width="500" border="0" /></li>
	<li><img src="gallery/slideshow/gp3.jpg" height="250" width="500" border="0" /></li>
	<li><img src="gallery/slideshow/gp4.jpg" height="250" width="500" border="0" /></li>
</ul>