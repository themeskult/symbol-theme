
(function($) {
	
var snapper = new Snap({
    element: document.getElementById('page'),
    disable: 'right',
    touchToDrag: false,
    hyperextensible: false
});

var myToggleButton =  document.getElementById('myToggleButton');

if ($("#myToggleButton").length>0) {

    myToggleButton.addEventListener('click', function(){

        if( snapper.state().state=="left" ){
            snapper.close();
        } else {
            snapper.open('left');
        }

    });

};
	
	$('code, pre').addClass('prettyprint');

	prettyPrint();

})( jQuery );
