$(window).on( "load", function(){


// ################################
// #### VARIABLES AND SETTINGS ####
// ################################

var w = $(window);

var screenWidth = screen.width;
var screenHeight = screen.height;

// height of sidebar
var sidebar = $(".wSidebar");

// min width to html top
var minHtmlOffset = $("header").height();




// ####################
// #### INITIALIZE ####
// ####################

var toggleHandler = new ToggleSidebarPosition( sidebar );
toggleHandler.toggle();

w.on( "resize", function(){

	toggleHandler.toggle();

});

w.on( "scroll", function() {

		toggleHandler.scrollHandler();

});


// ###############################
// #### FUNCTIONS AND CLASSES ####
// ###############################

function ToggleSidebarPosition( sidebar ) {

	/* variables */

	// height of sidebar
	this.hSidebar = sidebar.height();
	this.hScreen = w.height();
	// sidebar fits screen
	this.fits;

	// stored area
	this.sOffsetSidebarTop;
	this.sOffsetSidebarBottom;
	// scroll direction
	this.scrollDirection;
	// last window offset
	this.lastOffsetWindow;
	// sidebar position fixed
	this.fixed;
	this.fixedTop;
	this.fixedBottom;
	// initialized top border
	this.initSidebarTop;
	// initialized bottom border
	this.initSidebarBottom;

	this.suppScrollOffset = 20;




	/*
	
		handles window resize

	*/

	this.toggle = function() {
		
		var offsetWindow = w.scrollTop();

		/*
		
			this.fits == false
	
		*/

		// window size is too small for the sidebar + top and bottom offset
		if( w.innerHeight() < this.hSidebar + ( this.suppScrollOffset * 2 ) ) {

			// position absolute 
			if( w.scrollTop() < minHtmlOffset ) {

				sidebar.css( "position", "absolute" );
				sidebar.css( "top", minHtmlOffset + this.suppScrollOffset );
				this.fixedBottom = false;
				this.fixedTop = false;
				this.fits = false;

			} else {

				sidebar.css({ "position" : "fixed", "top" : this.suppScrollOffset });
				this.fixedTop = true;
				this.fixedBottom = false;

				// store area information
				this.fits = false;
				this.sOffsetSidebarTop = offsetWindow;
				this.sOffsetSidebarBottom = offsetWindow + this.hSidebar;
				this.lastOffsetWindow = offsetWindow;

				this.initSidebarTop = offsetWindow + this.suppScrollOffset;
				this.initSidebarBottom = offsetWindow + ( 2 * this.suppScrollOffset ) + this.hSidebar;

			}

		/*
		
		
			this.fits == true
	
		*/

		} else {

			if( w.scrollTop() < minHtmlOffset ) {

				sidebar.css( "position", "absolute" );
				sidebar.css( "top", minHtmlOffset + this.suppScrollOffset );
				this.fixedBottom = false;
				this.fixedTop = false;
				this.fits = true;

			} else {

				sidebar.css( "position", "fixed" );
				sidebar.css( "top", this.suppScrollOffset );
				this.fixedTop = true;
				this.fits = true;

			}

		}

	} // END OF this.toggle()




	this.scrollHandler = function() {

		if( !this.fits ) {

			if( w.scrollTop() < minHtmlOffset ) {

				console.log("<");
				sidebar.css( "position", "absolute" );
				sidebar.css( "top", minHtmlOffset + this.suppScrollOffset );
				this.fixedBottom = false;
				this.fixedTop = false;
				return;

			}

			// previous sidebar offset (top)
			var pOffsetSidebarTop = this.sOffsetSidebarTop;
			// current sidebar offset (top)
			var cOffsetSidebarTop = sidebar.offset().top - this.suppScrollOffset;
			// current sidebar offset (bottom)
			var cOffsetSidebarBottom = sidebar.offset().top + this.hSidebar + this.suppScrollOffset;
			// current window offset (top)
			var cOffsetWindowTop = w.scrollTop();
			// current window offset (bottom)
			var cOffsetWindowBottom = w.scrollTop() + w.innerHeight();
			// window height
			var hWindow = w.innerHeight();

			// detect scroll direction
			( cOffsetWindowTop > pOffsetSidebarTop ) ? this.scrollDirection = "down" : this.scrollDirection = "up"; 





			/*

				### scroll up ###
	
			*/

			if( this.scrollDirection == "up" ) {

				if( this.fixedBottom ) {

					var position = sidebar.offset().top;
					sidebar.css( "position", "absolute" );
					sidebar.css( "top", position );

					this.fixedBottom = false;

				// bottom not fixed
				} else {

					// scrolled beyond top sidebar border
					if( cOffsetSidebarTop >= cOffsetWindowTop ) {

						sidebar.css( "position", "fixed" );
						sidebar.css( "top", this.suppScrollOffset );

						this.fixedTop = true;

					}

				}

			} // END OF : scroll down





			/*

				### scroll down ###
	
			*/

			if( this.scrollDirection == "down" ) {

				if( this.fixedTop ) {

					var position = sidebar.offset().top;
					sidebar.css( "position", "absolute" );
					sidebar.css( "top", position );

					this.fixedTop = false;

				// top not fixed
				} else {

					// scrolled beyond bottom sidebar border
					if( cOffsetWindowBottom >= cOffsetSidebarBottom  ) {

						var position = sidebar.offset().top;
						sidebar.css( "position", "fixed" );
						sidebar.css( "top", - ( this.hSidebar - hWindow + this.suppScrollOffset ) );

						this.fixedBottom = true;

					}

				}

			} // END OF : scroll down




			this.sOffsetSidebarTop = cOffsetWindowTop;
			this.sOffsetSidebarBottom = cOffsetWindowTop + this.hSidebar;

		} else {

			if( w.scrollTop() < minHtmlOffset ) {

				sidebar.css( "position", "absolute" );
				sidebar.css( "top", minHtmlOffset + this.suppScrollOffset );

			} else {

				sidebar.css( "position", "fixed" );
				sidebar.css( "top", this.suppScrollOffset );

			}

		}

	}

}

}); // END OF window.load()