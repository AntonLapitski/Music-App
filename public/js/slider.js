var counter = 1;

function slideUp() {

    var one = document.getElementsByClassName('intro');

    if(counter === 1) {
        one[0].style.background =  "url('./img/slide_2.jpg') no-repeat center";
        one[0].style.backgroundSize = 'cover';
        console.log(counter);
    }

    if(counter === 2){
        one[0].style.background =  "url('./img/slide_3.jpg') no-repeat center";
        one[0].style.backgroundSize = 'cover';
        console.log(counter);
    }

    if(counter === 3){
        one[0].style.background =  "url('./img/slide_1.jpg') no-repeat center";
        one[0].style.backgroundSize = 'cover';
        console.log(counter);
        counter = 0;
    }

    counter++;
}

setInterval(slideUp, 7000);
