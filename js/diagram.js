// JavaScript Document
(function() {
	"use strict";
/*variables*/
	var diagram = document.querySelector("#diagramSvg");
	console.log("Diagram SEAF");
	var targetDiagram;
	var intestines;
	var kidneys;
	var lungs;
	var pancreas;
	var liver;
	var heart;
	var bone;
	var eyes;
	var diagramOverlay = document.querySelector("#diagramBubble");
	var diagramClose = document.querySelector("#diagramClose");
	//Diagram Swap Variables
	var docSubHeader = document.querySelector(".main-copy h4");
	var docSubText = document.querySelector(".main-copy p");
	var appliedClass;

/*functions*/
///Loads SVG and it's embeded click and swap functions
	function diagramLoaded(e) {
		console.log("svg has loaded");
		targetDiagram = e.currentTarget.contentDocument;
		//console.log(targetDiagram);
		intestines = targetDiagram.querySelector("#intestines");
		kidneys = targetDiagram.querySelector("#kidneys");
		lungs = targetDiagram.querySelector("#lungs");
		pancreas = targetDiagram.querySelector("#pancreas");
		liver = targetDiagram.querySelector("#liver");
		heart = targetDiagram.querySelector("#heart");
		bone = targetDiagram.querySelector("#bone");
		eyes = targetDiagram.querySelector("#eyes");
		//console.log(heart);
		var organs = targetDiagram.querySelectorAll(".organs");
		var i;
		for (i = 0; i < organs.length; i++) {
			organs[i].addEventListener("click", heartInfo, false);
		}
///Swaps Diagram Info
		function infoSwap() {
			docSubHeader.classList.remove(appliedClass);
			appliedClass = this.id;
			docSubHeader.classList.add(this.id);
			docSubHeader.firstChild.nodeValue = organInfo[this.id].headline;
			docSubText.firstChild.nodeValue = organInfo[this.id].text;
		}
		[].forEach.call(organs, function(item) {
			item.addEventListener('click', infoSwap, true);
		});
///Pull organ id and opens diagram bubble
		function heartInfo(e) {
			var organSelect = e.currentTarget.id;
			/*console.log(organSelect);*/
			displayBubble();
		}
///Displays diagram bubble
		function displayBubble() {
			console.log("bubble");
			diagramOverlay.style.display = "block";
		}
///Hides diagram bubble
		function closeBubble() {
			console.log("close bubble");
			diagramOverlay.style.display = "none";
		}
		console.log("diagramLoaded");
		diagramClose.addEventListener("click", closeBubble, false);
	}
/*listeners*/
	diagram.addEventListener("load", diagramLoaded, false);
})();