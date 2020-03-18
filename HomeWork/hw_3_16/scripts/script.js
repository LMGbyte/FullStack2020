document.getElementById('start-btn').addEventListener('click', function () {
    let x = document.getElementById('m-obj').style.left;
    console.log(x);
    let mx = 250;
    document.getElementById('m-obj').style.left = mx +'px';
    console.log(document.getElementById('m-obj').style.left);
});

