$(window).on( "load", function(){

/*

	whole screen resolution

*/

var screenWidth = screen.width;
var screenHeight = screen.height;

// height of sidebar
var sidebar = $(".wSidebar");
var sidebarHeight = sidebar.height();
var sidebarOffsetTop = sidebar.offset().top;

/*

	alternate sidebar position fixed and absolute regarding to screen height –> prevent sidebar from being cut

*/

function ToggleSidebarPosition( sidebar ) {

	this.sidebar = sidebar;
	this.innerHeight;


	this.toggle = function() {

		var w = $(window);

		if( w.innerHeight() < sidebarHeight + sidebarOffsetTop  ) {

			var top = this.sidebar.offset().top;
			this.sidebar.css( "position", "absolute" );
			this.sidebar.css( "top", top );

		} else {

			this.sidebar.css( "position", "fixed" );

		}

	}

}


var toggleHandler = new ToggleSidebarPosition( sidebar );
toggleHandler.toggle();



// function toggleSidebarPosition() {

// 	if( this.innerHeight < sidebarHeight + sidebarOffsetTop  ) {

// 		var top = sidebar.offset().top;
// 		sidebar.css( "position", "absolute" );
// 		sidebar.css( "top", top );
// 		// sidebar.animate({

// 		// 	top: sidebarOffsetTop

// 		// });

// 	} else {

// 		sidebar.css( "position", "fixed" );

// 	}

// }


// toggleSidebarPosition();


// $( window ).on( "resize", function(){

// 	toggleSidebarPosition();

// });



})