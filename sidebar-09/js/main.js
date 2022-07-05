(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);

function switchHome() {
	var lnkHome = document.getElementById("pageHome");
	var lnkLearn = document.getElementById("pageLearn");
	var lnkTech = document.getElementById("pageTech");
	var lnkCamera = document.getElementById("pageCameras");
	var lnkDiscover = document.getElementById("pageDiscover");
	var lnkSupport = document.getElementById("pageSupport");
	var lnkSignout = document.getElementById("pageSignout");

	var pgHome = document.getElementById("secHome");
	var pgLearn = document.getElementById("secLearn");
	var pgTech = document.getElementById("secTechniques");
	var pgDiscover = document.getElementById("secDiscover");
	var pgCamera = document.getElementById("secCamera");
	var pgSupport = document.getElementById("secSupport");


	lnkHome.classList.add("active");
	lnkLearn.classList.remove("active");
	lnkTech.classList.remove("active");
	lnkCamera.classList.remove("active");
	lnkDiscover.classList.remove("active");
	lnkSupport.classList.remove("active");
	lnkSignout.classList.remove("active");

	pgHome.classList.remove("d-none");
	pgLearn.classList.add("d-none");
	pgTech.classList.add("d-none");
	pgDiscover.classList.add("d-none");
	pgCamera.classList.add("d-none");
	pgSupport.classList.add("d-none");
 
 }
 function switchLearn() {
	var lnkHome = document.getElementById("pageHome");
	var lnkLearn = document.getElementById("pageLearn");
	var lnkTech = document.getElementById("pageTech");
	var lnkCamera = document.getElementById("pageCameras");
	var lnkDiscover = document.getElementById("pageDiscover");
	var lnkSupport = document.getElementById("pageSupport");
	var lnkSignout = document.getElementById("pageSignout");

	var pgHome = document.getElementById("secHome");
	var pgLearn = document.getElementById("secLearn");
	var pgTech = document.getElementById("secTechniques");
	var pgDiscover = document.getElementById("secDiscover");
	var pgCamera = document.getElementById("secCamera");
	var pgSupport = document.getElementById("secSupport");

	lnkHome.classList.remove("active");
	lnkLearn.classList.add("active");
	lnkTech.classList.remove("active");
	lnkCamera.classList.remove("active");
	lnkDiscover.classList.remove("active");
	lnkSupport.classList.remove("active");
	lnkSignout.classList.remove("active");

	pgHome.classList.add("d-none");
	pgLearn.classList.remove("d-none");
	pgTech.classList.add("d-none");
	pgDiscover.classList.add("d-none");
	pgCamera.classList.add("d-none");
	pgSupport.classList.add("d-none");
	



 
 }
 function switchTech() {
	var lnkHome = document.getElementById("pageHome");
	var lnkLearn = document.getElementById("pageLearn");
	var lnkTech = document.getElementById("pageTech");
	var lnkCamera = document.getElementById("pageCameras");
	var lnkDiscover = document.getElementById("pageDiscover");
	var lnkSupport = document.getElementById("pageSupport");
	var lnkSignout = document.getElementById("pageSignout");

	var pgHome = document.getElementById("secHome");
	var pgLearn = document.getElementById("secLearn");
	var pgTech = document.getElementById("secTechniques");
	var pgDiscover = document.getElementById("secDiscover");
	var pgCamera = document.getElementById("secCamera");
	var pgSupport = document.getElementById("secSupport");
	
	lnkHome.classList.remove("active");
	lnkLearn.classList.remove("active");
	lnkTech.classList.add("active");
	lnkCamera.classList.remove("active");
	lnkDiscover.classList.remove("active");
	lnkSupport.classList.remove("active");
	lnkSignout.classList.remove("active");

	pgHome.classList.add("d-none");
	pgLearn.classList.add("d-none");
	pgTech.classList.remove("d-none");
	pgDiscover.classList.add("d-none");
	pgCamera.classList.add("d-none");
	pgSupport.classList.add("d-none");
 
 }
 function switchDiscover() {
	var lnkHome = document.getElementById("pageHome");
	var lnkLearn = document.getElementById("pageLearn");
	var lnkTech = document.getElementById("pageTech");
	var lnkCamera = document.getElementById("pageCameras");
	var lnkDiscover = document.getElementById("pageDiscover");
	var lnkSupport = document.getElementById("pageSupport");
	var lnkSignout = document.getElementById("pageSignout");
	lnkHome.classList.remove("active");
	lnkLearn.classList.remove("active");
	lnkTech.classList.remove("active");
	lnkCamera.classList.remove("active");
	lnkDiscover.classList.add("active");
	lnkSupport.classList.remove("active");
	lnkSignout.classList.remove("active");

	var pgHome = document.getElementById("secHome");
	var pgLearn = document.getElementById("secLearn");
	var pgTech = document.getElementById("secTechniques");
	var pgDiscover = document.getElementById("secDiscover");
	var pgCamera = document.getElementById("secCamera");
	var pgSupport = document.getElementById("secSupport");

	pgHome.classList.add("d-none");
	pgLearn.classList.add("d-none");
	pgTech.classList.add("d-none");
	pgDiscover.classList.remove("d-none");
	pgCamera.classList.add("d-none");
	pgSupport.classList.add("d-none");
 
 }
 function switchCameras() {
	var lnkHome = document.getElementById("pageHome");
	var lnkLearn = document.getElementById("pageLearn");
	var lnkTech = document.getElementById("pageTech");
	var lnkCamera = document.getElementById("pageCameras");
	var lnkDiscover = document.getElementById("pageDiscover");
	var lnkSupport = document.getElementById("pageSupport");
	var lnkSignout = document.getElementById("pageSignout");
	lnkHome.classList.remove("active");
	lnkLearn.classList.remove("active");
	lnkTech.classList.remove("active");
	lnkCamera.classList.add("active");
	lnkDiscover.classList.remove("active");
	lnkSupport.classList.remove("active");
	lnkSignout.classList.remove("active");
 
	var pgHome = document.getElementById("secHome");
	var pgLearn = document.getElementById("secLearn");
	var pgTech = document.getElementById("secTechniques");
	var pgDiscover = document.getElementById("secDiscover");
	var pgCamera = document.getElementById("secCamera");
	var pgSupport = document.getElementById("secSupport");

	pgHome.classList.add("d-none");
	pgLearn.classList.add("d-none");
	pgTech.classList.add("d-none");
	pgDiscover.classList.add("d-none");
	pgCamera.classList.remove("d-none");
	pgSupport.classList.add("d-none");

 }
 function switchSupport() {
	var lnkHome = document.getElementById("pageHome");
	var lnkLearn = document.getElementById("pageLearn");
	var lnkTech = document.getElementById("pageTech");
	var lnkCamera = document.getElementById("pageCameras");
	var lnkDiscover = document.getElementById("pageDiscover");
	var lnkSupport = document.getElementById("pageSupport");
	var lnkSignout = document.getElementById("pageSignout");
	lnkHome.classList.remove("active");
	lnkLearn.classList.remove("active");
	lnkTech.classList.remove("active");
	lnkCamera.classList.remove("active");
	lnkDiscover.classList.remove("active");
	lnkSupport.classList.add("active");
	lnkSignout.classList.remove("active");

	var pgHome = document.getElementById("secHome");
	var pgLearn = document.getElementById("secLearn");
	var pgTech = document.getElementById("secTechniques");
	var pgDiscover = document.getElementById("secDiscover");
	var pgCamera = document.getElementById("secCamera");
	var pgSupport = document.getElementById("secSupport");

	pgHome.classList.add("d-none");
	pgLearn.classList.add("d-none");
	pgTech.classList.add("d-none");
	pgDiscover.classList.add("d-none");
	pgCamera.classList.add("d-none");
	pgSupport.classList.remove("d-none");
 
 }
 function switchSignout() {
	var lnkHome = document.getElementById("pageHome");
	var lnkLearn = document.getElementById("pageLearn");
	var lnkTech = document.getElementById("pageTech");
	var lnkCamera = document.getElementById("pageCameras");
	var lnkDiscover = document.getElementById("pageDiscover");
	var lnkSupport = document.getElementById("pageSupport");
	var lnkSignout = document.getElementById("pageSignout");
	lnkHome.classList.remove("active");
	lnkLearn.classList.remove("active");
	lnkTech.classList.remove("active");
	lnkCamera.classList.remove("active");
	lnkDiscover.classList.remove("active");
	lnkSupport.classList.remove("active");
	lnkSignout.classList.add("active");
 
 }