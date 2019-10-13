var colors = {
    "65" : "red",
    "68" : "blue",
    "83" : "green"
}

$.get.JSON('colors.json', function(data){
    console.log(data);
    colors = data;
})    

function setBg(c){
    document.bgColor = c;
}

/*function keyHandler(e) {
    switch (e.keyCode) {
        case 65: setBg('red'); break;
        case 68: setBg('blue'); break;
        case 83: setBg('green'); break;
    }
}*/

function keyHandler(e) {
    setBg(colors[e.keyCode]);
}
