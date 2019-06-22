//@prepros-append vendors/charming.js;

charming(document.querySelector('.catchphrase__text'));
charming(document.querySelector('.catchphrase__author'));

setTimeout(function(){
  Array.prototype.forEach.call( document.querySelectorAll('.charming, .reveal, .reveal-opacity'), function( node ) {
    node.classList.add('animated');
  });
}, 1000);


let paths = document.querySelectorAll('svg path');

for(let path of paths){
  // path.addEventListener('mouseenter', showPoints);
  // path.addEventListener('mouseleave', hidePoints);
}

function showPoints(){
  console.log(this.getAttribute('d'));
  let commands = this.getAttribute('d').match(/(?:\s|\,*)(([MmZzLlHhVvCcSsQqTtAa])|([+-]?([0-9]*[.])?[0-9]+))(?:\s|\,*)/g);
  commands = commandsToArray(commands);

  let points = commandsToPoints(commands);
  displayPoints(points, this);
}

function hidePoints(){
  Array.prototype.forEach.call( document.querySelectorAll('.svg__inserted'), function( node ) {
    node.remove();
  });
}

function commandsToArray(commands){
  let counter = 0;
  let instructions = [];

  for(let command of commands){
    commands[counter] = command.trim().replace(',', '').replace('-.', '-0.');
    let parsedIntruction = parseFloat(commands[counter], 10);

    if(isNaN(parsedIntruction)){
      instructions.push([commands[counter]]);
    }else{
      instructions[instructions.length - 1].push(parsedIntruction);
    }
    counter++;
  }

  return instructions;
}

function commandsToPoints(commands){
  let points = [];
  commands.forEach(function(command, index, array){
    if(command[0] == "M"){
      points.push(`<circle class="svg__inserted" cx="${command[1]}" cy="${command[1]}" r="10" stroke="black" stroke-width="1" fill="red" />`);
    }
  })
  return points;
}

function displayPoints(points, pathElement){
  let adjacentHTML = '';
  points.forEach(function(command, index, array){
    adjacentHTML += points;
  });
  closest(pathElement, 'svg').insertAdjacentHTML('beforeend', points);
}

function closest(el, selector, stopSelector) {
  let retval = null;
  while (el) {
    if (el.matches(selector)) {
      retval = el;
      break
    }
    el = el.parentElement;
  }
  return retval;
}