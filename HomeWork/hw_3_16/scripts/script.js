let moving = false;
let forward = true;
let mobj = document.getElementById('m-obj');
let curr_pos = mobj.style.left;
let curr_pos_num = parseInt(curr_pos.substring(0,curr_pos.length-2));

let stepx = parseInt(document.getElementById('speed-in').value);

let max_x = document.getElementsByClassName('main')[0].clientWidth;

document.getElementById('start-btn').addEventListener('click', function(){
    if (!moving){move(stepx)};
});
document.getElementById('stop-btn').addEventListener('click', function(){
    moving = false;
});

document.getElementById('figures').addEventListener('change', function(){
    mobj.src = document.getElementById('figures').value;
});

document.getElementById('reverse-btn').addEventListener('click', function(){
    forward = !forward;

});

function move(stepx) {
    moving = true;
    var pos = curr_pos_num;
    var id = setInterval(frame, 1);
    function frame() {
      stepx = parseInt(document.getElementById('speed-in').value);
      if (!moving) {
          curr_pos_num = pos;
          clearInterval(id);
      } else {
        if (forward) {
            pos+=stepx;
        } else {
            pos-=stepx;
        }; 
        mobj.style.left = pos + 'px'; 
        max_x = document.getElementsByClassName('main')[0].clientWidth;
        if (pos >= max_x-50 && forward){
            forward = false;
        };
        if (pos <= 0 && !forward){
            forward = true;
        }
      }
    }

}