const box = document.querySelector('.box');
    for (var i = 0 ; i<5;i++){
        const cri = document.createElement('div');
        cri.classList.add('cricle'); //cri is cricle
        cri.style.left = getRandomIntInclusive(0, 1200) + 'px';
        const size = getRandomIntInclusive(50,200);
        cri.style.width = size + 'px';
        cri.style.height = size + 'px';
        //const time = getRandomIntInclusive(0,10);
        cri.style.animationDelay = size/50 + 's';
        //cri.style.animationDirection = size/50 + 'ms';
            box.append(cri);
        }
        function getRandomIntInclusive(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1) + min); // The maximum is inclusive and the minimum is inclusive
        }

