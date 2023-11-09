/* Stop IE crying if there is not console support */
if(!(window.console && console.log)) {
	console = {
	log: function(){},
	debug: function(){},
	info: function(){},
	warn: function(){},
	error: function(){}
	};
}

jQuery(function($){
     console.log("Iniciando EJ4");
    var r = Raphael('chaptersMap', 400, 502);
	r.safari();
	var _label = r.popup(50, 50, "").hide();
    attributes = {
            fill: '#898989',
            stroke: '#FFFFFF',
            'stroke-width': 2,
            'stroke-linejoin': 'round'
        },
    arr = new Array();
     
    for (var country in paths) {
        var obj = r.path(paths[country].path);
        arr[obj.id] = country;
		obj.attr(attributes);
        obj
        .hover(function(){
            this.animate({
                fill: '#8fbf27'
            }, 300);
			bbox = this.getBBox();
			console.log("Y:" + _label.items[1].attrs.y + " - X:" + _label.items[1].attrs.x + " - PATH:" + _label.items[1].attrs.path);
			switch(paths[arr[this.id]].slug) {
				case 'scotland' :
				case 'south-west' :
				case 'wales' :
					_label.attr({text: paths[arr[this.id]].name}).update(bbox.x + bbox.width/3, bbox.y + bbox.height/1.8, bbox.width).toFront().show();
					break;
				default :
					_label.attr({text: paths[arr[this.id]].name}).update(bbox.x, bbox.y + bbox.height/2, bbox.width).toFront().show();
					break;
			}
        }, function(){
            this.animate({
                fill: attributes.fill
            }, 300);
			_label.hide();
        })
        .click(function(){
            
			location.href = paths[arr[this.id]].url;
             
        })
		

    }
             
});
jQuery.expr[':'].raph=function
(objNode,intStackIndex,arrProperties,arrNodeStack){var c=objNode.getAttribute('class');return(c&&c.indexOf(arrProperties[3])!=-1);}