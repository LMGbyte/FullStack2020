let moving = false;
let forward = true;
let mobj = document.getElementById('m-obj');
let curr_pos = mobj.style.left;
let curr_pos_num = parseInt(curr_pos.substring(0,curr_pos.length-2));
let pos = curr_pos_num;

let stepx = parseInt(document.getElementById('speed-in').value);

let max_x = document.getElementsByClassName('main')[0].clientWidth;
let score_max = max_x;
let score_c = score_max;
let score_b = score_max;

document.getElementById('start-btn').addEventListener('click', function(){
    if (!moving){
        score_c = document.getElementsByClassName('main')[0].clientWidth;
        score_b = document.getElementsByClassName('main')[0].clientWidth;
        document.getElementById('speed-value').innerHTML = `Speed: ${stepx*100} px/s`;
        document.getElementById('current').innerHTML = `Current: ${score_c} px`;
        document.getElementById('best').innerHTML = `Best: ${score_b} px`;
        move(stepx);
    };
});
document.getElementById('stop-btn').addEventListener('click', function(){
    moving = false;
});

document.getElementById('figures').addEventListener('change', function(){
    mobj.src = document.getElementById('figures').value;
});

document.getElementById('reverse-btn').addEventListener('click', function(){
    if (forward){
        score_c = pos;
    }
    forward = !forward;
});

function return_score (){
    if (score_max < score_c) {
        score_c = score_max;
        return score_c;
    }
    return score_c;
}

function move(stepx) {
    moving = true;
    pos = curr_pos_num;
    var id = setInterval(frame, 10);
    function frame() {
      stepx = parseInt(document.getElementById('speed-in').value);
      document.getElementById('speed-value').innerHTML = `Speed: ${stepx*100} px/s`;
      if (!moving) {
          curr_pos_num = pos;
          document.getElementById('speed-value').innerHTML = 'Speed: 0 px/s';
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
            document.getElementById('current').innerHTML = `Current: ${return_score()} px`
            if (score_c < score_b){
                score_b = score_c;
                document.getElementById('best').innerHTML = `Best: ${score_b} px`
            }
        }
      }
    }

}

