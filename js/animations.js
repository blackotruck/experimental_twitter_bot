
/* JQUERY ANIMATIONS*/




function trenAnimate()
{
	$('#tren').delay(800).show().animate(
	{
		left:'-30px'
	},3000,"easeOutQuad"
	);
}

function logoAnimate()
{
	$('#logo').delay(3800).animate(
	{
		opacity:1
	},1000,"easeOutQuad"
	);
}

function regalosAnimate(){
	$('#regalos').delay(3800).animate(
	{
		top:0
	},3000,"linear"
	);
}




function menuAnimate()
{
	var enlaces=$('#menu-top').children();
	var n = enlaces.length;
	var i;
	var e;
	for (i=0;i<n;i++){
		e= $('#enlace'+i);
		e.delay(3800+(i*400)).fadeIn(4000);
	}
	

}


function indexTop()
{
	trenAnimate();
	regalosAnimate();
	logoAnimate();
	menuAnimate();
}


$('#clickme').click(function() {
  $('#book').animate({
    width: 'toggle',
    height: 'toggle'
  }, {
    duration: 5000,
    specialEasing: {
      width: 'linear',
      height: 'easeOutBounce'
    },
    complete: function() {
      $(this).after('<div>Animation complete.</div>');
    }
  });
});