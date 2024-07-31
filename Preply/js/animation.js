let ani2= document.querySelector('.animationStar');
let ani1 = document.querySelector('.AllAnimation');
        function clickAnimation(){
            
            ani1.classList.add('animationEnd1');
        
            ani2.classList.add('animationEnd2');
            const ani3 = document.createElement('div');
            ani3.classList.add('animationEnd3');
            ani2.append(ani3);
            document.getElementsByClassName("icon_nav").click();
            
        }

        