document.querySelector("#first")
document.addEventListener("mousedown", onMouseDown);
document.querySelector("#second")
document.addEventListener("mousedown", onMouseDown);
document.querySelector("#third")
document.addEventListener("mousedown", onMouseDown);

function onMouseDown(event) {
let element = event.target 
let shiftX = event.clientX - element.getBoundingClientRect().left;
let shiftY = event.clientY - element.getBoundingClientRect().top;

moveAt(event.pageX, event.pageY)   
function moveAt(pageX, pageY) {
element.style.left = pageX - shiftX + "px";
element.style.top = pageY - shiftY + "px";
}

function onMouseMove(event) {
moveAt(event.pageX, event.pageY);
}

document.addEventListener("mousemove", onMouseMove);

function onMouseUp(event) {
document.removeEventListener("mousemove", onMouseMove);
element.onmouseup = null;
}

document.addEventListener("mouseup", onMouseUp);
}