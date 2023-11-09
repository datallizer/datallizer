<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEVANA</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link rel="shortcut icon" href="assets/img/favicon.png">
</head>

<body>
    



	<script src="assets/js/lotes.js"></script>
<script>
	const myModal = new bootstrap.Modal(document.getElementById("exampleModal"), {});
$(function() {
	// console.log("JQuery");
	let obj = new Object();
	let _curr; // lote actual
	// [0] click en lote (svg)
	$("[id*='lote_']").on('click', function(e){
		e.preventDefault();
		let num = $(this).attr('id').split("_");
		_curr = parseInt(num[1]) || (Math.floor(Math.random()*10));
		// $('#exampleModalLabel').text("Hola mundo " + _curr); // MODAL TITLE
		mostrarLote(_curr);
		// open Modal
		myModal.show();
	});
	// [00] click en lotePrev y loteNext
	$("#lotePrev, #loteNext").on('click', function(e){
		e.preventDefault();
		console.log( $(this).attr('id'), lotes.length, _curr );
		if ($(this).attr('id') == "loteNext"){
			_curr = (_curr==117)?117:_curr+1;
		} else{
			_curr = (_curr==1)?1:_curr-1;
		}
		mostrarLote(_curr);
	});
	//
	function mostrarLote(_curr){
		obj = lotes[_curr-1];
		if(obj!=undefined){
			let _class = obj.cls;
			$("#lvnId").text(obj.id);
			$("#lvnMzn").text(obj.mzn);
			$("#lvnCateg").text(obj.categ);
			$("#lvnMt").text(obj.mt);
			$('#lvnCategClr').attr('class','').addClass(_class);
			$('#minimap').attr('class','').addClass('mmap_'+obj.id);
			if(obj.id < 118){
				$('#minimap').addClass('mmap-show');
			}
			console.log("LOTE_ = ", obj, '_class = '+_class, "_curr = "+_curr);
		}
	
	}

}); // JQuery	

/* ZOOM */
  // Init: Fx arrastrar mouse
  let moving;
  function mouseDown(e){ //	mouse click para empezar a arrastrar
	moving = true
}
function drag(e){ //	arrastrando obj
	if(moving === true){
    //	1. Obtener valor inicial de viewBox que originalmente Str, split en Arr para facilitar cálculos posteriores
    let startViewBox = svg.getAttribute('viewBox').split(' ').map( n => parseFloat(n));
    //	2. Obtener valor de coord del cliente en viewBox actual del mouse
    let startClient = {x: e.clientX, y: e.clientY};
    //	3. Calcular valor de coordenada SVG correspondiente
    let newSVGPoint = svg.createSVGPoint();
    let CTM = svg.getScreenCTM();
    newSVGPoint.x = startClient.x;
    newSVGPoint.y = startClient.y;
    let startSVGPoint = newSVGPoint.matrixTransform(CTM.inverse());
    //	4. Calcular coords de cliente de ViewBox donde está el mouse después de arrastrar
    let moveToClient = {
    	x: e.clientX + e.movementX,	//	movement obtiene desplazamiento del mouse
      y: e.clientY + e.movementY
    }
    //	5. Calcular valor de coordenada SVG correspondiente
    newSVGPoint = svg.createSVGPoint();
    CTM = svg.getScreenCTM();
    newSVGPoint.x = moveToClient.x;
    newSVGPoint.y = moveToClient.y;
    let moveToSVGPoint = newSVGPoint.matrixTransform(CTM.inverse());
    //	6. Calcular desplazamiento
    let delta = {dx: startSVGPoint.x - moveToSVGPoint.x, dy: startSVGPoint.y - moveToSVGPoint.y};
    //	7. establecer nuevo valor de viewBox
    let xRange, yRange
    if(Math.abs(startViewBox[0] + delta.dx) > svg.getAttribute('width')){
      if(startViewBox[0] + delta.dx > 0){
         xRange = svg.getAttribute('width')
      }else{
         xRange = -svg.getAttribute('width')
      }
    }else{
      xRange = startViewBox[0] + delta.dx
    }
    if(Math.abs(startViewBox[1] + delta.dy) > svg.getAttribute('height')){
      if(startViewBox[1] + delta.dy > 0){
        yRange = svg.getAttribute('height')
      }else{
        yRange = -svg.getAttribute('height')
      }
    }else{
      yRange = startViewBox[1] + delta.dy
    }
    let moveToViewBox = `${xRange} ${yRange} ${startViewBox[2]} ${startViewBox[3]}` 
    svg.setAttribute('viewBox', moveToViewBox)
  }
}
//	Acciones de clic (arrastre)
function mouseUp(){
	moving = false
}	//	Fin, acc de arrastrar
	
// Init: Efecto Zoom
function zoom(e, zoomLvl, zoom){
    zoom = (typeof zoom !== 'undefined') ?  zoom : 'wheel';
		//	1. Obtener viewBox inicial。
  	let startViewBox = svg.getAttribute('viewBox').split(' ').map( n => parseFloat(n))
    //	2. Obtener coord del cliente viewPort de posicion zoom del mouse y usar CTM para obtener coords del SVG correspondientes。
    //	2.1 Obtener pos del mouse para realizar zoom
    let startClient = {x: e.clientX, y: e.clientY}
    //	2.2 Convertir a puntos de coords SVG en sistems de coordenadas SVG
    let newSVGPoint = svg.createSVGPoint()
    let CTM = svg.getScreenCTM()
    newSVGPoint.x = startClient.x
    newSVGPoint.y = startClient.y
    let startSVGPoint = newSVGPoint.matrixTransform(CTM.inverse())
		//	3.Escala, si se quiere duplicar el tamaño original
    //	3.1 Establecer relación del zoom
    let r 
    let zoomWidth
    let zoomHeight
    if (e.deltaY > 0 || zoom == 'zoomOut') { // encoger, disminuir
      r = 1.5
      if(startViewBox[2] * r > svg.getAttribute('width')){
        zoomWidth = svg.getAttribute('width')
        zoomHeight = svg.getAttribute('height')
      }else{
        zoomWidth = startViewBox[2] * r 
        zoomHeight = startViewBox[3] * r 
      }
    } else if (e.deltaY < 0 || zoom == 'zoomIn') { // poner, aumentar
      r = (2/3)
      if(startViewBox[2] * r < svg.getAttribute('width') * Math.pow(r, zoomLvl)){
        zoomWidth = svg.getAttribute('width') * Math.pow(r,zoomLvl)
        zoomHeight = svg.getAttribute('height') * Math.pow(r,zoomLvl)
      }else{
        zoomWidth = startViewBox[2] * r
        zoomHeight = startViewBox[3] * r
      }
    }
    //	3.2 Hacer Zoom
    svg.setAttribute('viewBox', `${startViewBox[0]} ${startViewBox[1]} ${zoomWidth} ${zoomHeight}`)
    //	4.Use nuevo CTM para convertir las coords del cliente viewPort de la posición de zoom del mouse en coordenadas SVG correspondientes.
    CTM = svg.getScreenCTM()
    let moveToSVGPoint = newSVGPoint.matrixTransform(CTM.inverse())
    
    //	5.Obtener desplazamiento del punto durante el zoom `(svgX0 - svgX1)`。
    let delta = {
    	dx: startSVGPoint.x - moveToSVGPoint.x,
      dy: startSVGPoint.y - moveToSVGPoint.y
    }
    
    //	6.Establecer final viewBox2 
  	let middleViewBox = svg.getAttribute('viewBox').split(' ').map( n => parseFloat(n))
    let moveBackViewBox = `${middleViewBox[0] + delta.dx} ${middleViewBox[1] + delta.dy} ${middleViewBox[2]} ${middleViewBox[3]}` 
    svg.setAttribute('viewBox', moveBackViewBox)

	// test
	// let CTM2 = svg.getBBox();
	// let CTM3 = svg.DOMMatrixReadOnly();
	// console.log(CTM, zoomWidth, zoomHeight, '|||', CTM2 , '|||', r);
}	//	Fin: fx Zoom del mouse

// Nw (Moviendo mapa con flechas)
function moveMap (zoomLvl, moveArr){
	console.log('fn::moveMap', zoomLvl, moveArr)
	// const { scale, x, y } = getTransformParameters(svg);
	let CTM = svg.getScreenCTM();
	let CTM2 = svg.getAttribute('viewBox').split(' ').map( n => parseFloat(n));
	let svgWidth = svg.getAttribute('width'), svgHeight = svg.getAttribute('height');
	let dx = 0, dy = 0;
	// Mover mapa
	zoomLvl = CTM.a; // escala actual
	let e_x = CTM2[0], f_y = CTM2[1];
	let nwVBox;
	let factor = 20
  switch (moveArr) {
    case "left":
      dx = -(factor);
      break;
    case "right":
      dx = factor;
      break;
    case "up":
      dy = -(factor);
      break;
    case "down":
      dy = factor;
      break;
  }
  e_x = (e_x<=0) ? 0 : (e_x + (dx * zoomLvl));
  f_y = (f_y<=0) ? 0 : (f_y + (dy * zoomLvl));
  nwVBox = [e_x, f_y, CTM2[2], CTM2[3]];
  // svg.style.transform = getTransformString(scale, x + dx, y + dy); // getTransformString(scale, x + dx, y + dy), 
  //console.log(CTM2, svgWidth, svgHeight, zoomLvl);
  // console.log("MAPA : ", nwVBox.join(" "));
  // console.log("MAPA Y: ", f_y);
  // if(zoomLvl > 1)
  $(svg).attr('viewBox', nwVBox.join(" "));
  // else $(svg).attr('viewBox', '0 0 765 520');
}

const svg = document.getElementById('svgmap')
const zoomIn = document.getElementById('zoomIn')
const zoomOut = document.getElementById('zoomOut')
// Nw
const moveLeft = document.getElementById('moveLeft')
const moveRight = document.getElementById('moveRight')
const moveUp = document.getElementById('moveUp')
const moveDown = document.getElementById('moveDown')

let zoomLvl = 2
//	Eventos
svg.addEventListener('mousedown', mouseDown, false)
//svg.addEventListener('touchStart', mouseDown, false)
svg.addEventListener('mousemove', drag, false)
svg.addEventListener('mouseup', mouseUp, false)
//	Evento Zoom
svg.addEventListener('wheel', function(e){zoom(e, zoomLvl, zoom)}, false)
zoomIn.addEventListener('click', function(e){zoom(e, zoomLvl, 'zoomIn')}, false)
zoomOut.addEventListener('click', function(e){zoom(e, zoomLvl, 'zoomOut')}, false)
// Nw
moveLeft.addEventListener('click', function(e){moveMap(zoomLvl, 'left')}, false)
moveRight.addEventListener('click', function(e){moveMap(zoomLvl, 'right')}, false)
moveUp.addEventListener('click', function(e){moveMap(zoomLvl, 'up')}, false)
moveDown.addEventListener('click', function(e){moveMap(zoomLvl, 'down')}, false)

</script>

</body>
</html>