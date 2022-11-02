/**
  * Floating bubbles without collision
  * Learning processing, simple movement.
  *
**/

var balls=[],
		numBalls= 50;

var Ball = function(width, x, y,color, stage,id){

	var _xpos = x,
			_ypos = y,
			_width = width,
			_height = width,
			_rad = _width/2,
			_xspeed = 2.8,
			_yspeed = 2.2,
			_xdirection = 1*(Math.floor(Math.random() * 3) - 1),
			_ydirection = 1*(Math.floor(Math.random() * 3) - 1),
			_element,
			_id = id;

	var _draw = function(){
    
		_element = document.createElement('div');
		_element.className = "ball";
		_element.style.width = _width+'px';
		_element.style.height = _width+'px';
		_element.style.left = _xpos+'px';
		_element.id = _id;
		_element.style.backgroundColor = color;
		_element.style.top = _ypos+'px';
    console.log('drawing');
    console.log(_width);
		stage.appendChild(_element);
	},
	getX = function(){
		return _xpos;
	},
	getY = function(){
		return _ypos;
	},
	getWidth = function(){
		return _width;
	},
	getHeight = function(){
		return _height;
	},
	getRad = function(){
		return _rad;
	},
	getId = function(){
		return _id;
	},
	_updatePos = function(x,y){
		_element.style.left = x+'px';
		_xpos = x;

		_element.style.top = y+'px';
		_ypos = y;
	},
	_move = function(){
		var _engine = setInterval(function(){
			_updatePos( (parseInt(_element.style.left) + (_xspeed * _xdirection)),(parseInt(_element.style.top) + (_yspeed * _ydirection)));

			if(_xpos > stage.clientWidth-(_rad*2) || _xpos < 0){
				_xdirection *=-1;
			}

			if(_ypos > stage.clientHeight-(_rad*2) || _ypos < 0){
				_ydirection *=-1;
			}

		},30);

	};

	var init = function(){
		console.log('init');
		_draw();
		_move();
	};
	

	var module = {
		init : init,
		xpos : getX,
		ypos : getY,
		getRad : getRad,
		getWidth : getWidth,
		getHeight : getHeight,
		id   : _id
	};

	return module;
};


for(var i=0;i<numBalls;i++){
	var stage = document.getElementById('bubbles');
  
  var ballW = (Math.random()*(30 - 25)+5),
			ballX = (Math.random()*((parseInt(stage.clientWidth)-ballW)- 1)+1),
			ballY = (Math.random()*((parseInt(stage.clientHeight)-ballW) - 1)+1);
  
  console.log(ballX);
	balls.push(new Ball(ballW,ballX,ballY,'#'+'ffffff38', document.getElementById("bubbles"),i))
	balls[i].init();
}