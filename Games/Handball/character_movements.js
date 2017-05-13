
// Copyright 2011 William Malone (www.williammalone.com)
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//   http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

var canvas;
var context;
var images = {};
var totalResources = 6;
var numResourcesLoaded = 0;
var fps = 30;
var x = 245;
var y = 185;
var breathInc = 0.1;
var breathDir = 1;
var breathAmt = 0;
var breathMax = 2;
var breathInterval = setInterval(updateBreath, 1000 / fps);
var maxEyeHeight = 14;
var curEyeHeight = maxEyeHeight;
var eyeOpenTime = 0;
var timeBtwBlinks = 4000;
var blinkUpdateTime = 200;                    
var blinkTimer = setInterval(updateBlink, blinkUpdateTime);
var fpsInterval = setInterval(updateFPS, 1000);
var numFramesDrawn = 0;
var curFPS = 0;

function updateFPS() {
	
	curFPS = numFramesDrawn;
	numFramesDrawn = 0;
}		
function prepareCanvas(canvasDiv, canvasWidth, canvasHeight)
{
	// Create the canvas (Neccessary for IE because it doesn't know what a canvas element is)
	canvas = document.createElement('canvas');
	canvas.setAttribute('width', canvasWidth);
	canvas.setAttribute('height', canvasHeight);
	canvas.setAttribute('id', 'canvas');
	canvasDiv.appendChild(canvas);
	
	if(typeof G_vmlCanvasManager != 'undefined') {
		canvas = G_vmlCanvasManager.initElement(canvas);
	}
	context = canvas.getContext("2d"); // Grab the 2d canvas context
	// Note: The above code is a workaround for IE 8and lower. Otherwise we could have used:
    // context = document.getElementById('canvas').getContext("2d");
    
	loadImage("left-arm");
	loadImage("legs");
	loadImage("torso");
	loadImage("right-arm");
	loadImage("head");
	loadImage("hair");
}

function jamaica(){
    context.beginPath();
    context.rect(20, 20, 150, 100);
    context.fillStyle = "red";
    context.fill();

}
function loadImage(name) {

  images[name] = new Image();
  images[name].onload = function() { 
	  resourceLoaded();
  }
  images[name].src = "images/" + name + ".png";
}

function resourceLoaded() {

  numResourcesLoaded += 1;
  if(numResourcesLoaded === totalResources) {
  
	setInterval(redraw, 1000 / fps);
  }
}

function redraw() {
				
  canvas.width = canvas.width; // clears the canvas 

  jamaica();
  drawEllipse(x + 55, y + 88, 190 - breathAmt, 10); // Shadow

  context.drawImage(images["left-arm"], x + 2, y - 32 - breathAmt);
  context.drawImage(images["legs"], x, y);
  context.drawImage(images["torso"], x - 5, y - 75 - breathAmt);
  context.drawImage(images["head"], x - 10, y - 125 - breathAmt);
  context.drawImage(images["hair"], x - 15, y - 148 - breathAmt);
  context.drawImage(images["right-arm"], x - 35, y - 52 - breathAmt);
	
  drawEllipse(x + 58, y - 72 - breathAmt, 8, curEyeHeight); // Left Eye
  drawEllipse(x + 66, y - 72 - breathAmt, 8, curEyeHeight); // Right Eye
  
  context.font = "bold 12px sans-serif";
  context.fillText("fps: " + curFPS + "/" + fps + " (" + numFramesDrawn + ")", 40, 200);
  ++numFramesDrawn;
}

function drawEllipse(centerX, centerY, width, height) {

  context.beginPath();
  
  context.moveTo(centerX, centerY - height/2);
  
  context.bezierCurveTo(
	centerX + width/2, centerY - height/2,
	centerX + width/2, centerY + height/2,
	centerX, centerY + height/2);

  context.bezierCurveTo(
	centerX - width/2, centerY + height/2,
	centerX - width/2, centerY - height/2,
	centerX, centerY - height/2);
 
  context.fillStyle = "black";
  context.fill();
  context.closePath();	
}

function updateBreath() { 
				
  if (breathDir === 1) {  // breath in
	breathAmt -= breathInc;
	if (breathAmt < -breathMax) {
	  breathDir = -1;
	}
  } else {  // breath out
	breathAmt += breathInc;
	if(breathAmt > breathMax) {
	  breathDir = 1;
	}
  }
}

function updateBlink() { 
				
  eyeOpenTime += blinkUpdateTime;
	
  if(eyeOpenTime >= timeBtwBlinks){
	blink();
  }
}

function blink() {

  curEyeHeight -= 1;
  if (curEyeHeight <= 0) {
	eyeOpenTime = 0;
	curEyeHeight = maxEyeHeight;
  } else {
	setTimeout(blink, 10);
  }
}