window.onload = function() {

    // ! Esta funcio un TOGGLE de la clase 'switchColor del Navbar'
    window.addEventListener("scroll", () => {
        let scrollTop = document.documentElement.scrollTop;
        let refer = document.querySelector(".contact-icons");
        let nav = document.querySelector(".nav-container");
        
        let scrollElement = refer.offsetTop + 100;

        nav.classList.toggle("switchColor", scrollTop >= scrollElement)
    })
    
    // ! Codigo para las animaciones al hacer scroll
    const contentWayPointAnimalo = () => {
        // ! Con Javascript
        var waypoints = document.querySelectorAll('.animalo');
        waypoints.forEach( waypoint => {
            let _waypoint = new Waypoint ({
                element: waypoint,
                handler: function(direction){
    
                    if(direction === 'down' && !this.element.classList.contains('animated')){
    
                        waypoint.classList.add('item-animate');
                        
                        setTimeout(() => {
                            let el = document.querySelectorAll('.animalo.item-animate');
    
                            el.forEach((e, index) =>{
                                
                                setTimeout( () => {
                                    let effect = e.dataset.animateEffect;
                                    e.classList.add(effect, 'animated');
                                    e.classList.remove('item-animate');
                                },  index * 350 , 'easeInOutExpo');
    
                            })
    
                        }, 100);
                    }
                }, offset: '80%'
            })
        } )
    }
    contentWayPointAnimalo()

    // ! Codigo que hace funcionar el Slider
    if( document.querySelector("#slider") ) {

        let _area = document.querySelector(".mask");
        const _slider_ = document.querySelector("#slider");
        let sliderSection = document.querySelectorAll(".slider__section");
        let sliderSectionLast = sliderSection[sliderSection.length -1];
        const btnPrev = document.querySelector("#prev");
        const btnNext = document.querySelector("#next");
        _slider_.insertAdjacentElement("afterbegin", sliderSectionLast);
        
        let sliderSectionActive = document.querySelectorAll(".slider__section")[1];
        let _h = sliderSectionActive.children[1].children[0];
        let _p = sliderSectionActive.children[1].children[1];
        
        _h.classList.remove('hidden');
        _p.classList.remove('hidden');
        
        
        const Next = () => {
        
            let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
        
            _slider_.style.marginLeft = "-200%";
            _slider_.style.transition = "margin-left 1.3s ease-in-out";
        
            setTimeout(() => {
                _slider_.style.transition = "none";
                _slider_.insertAdjacentElement('beforeend', sliderSectionFirst);
                _slider_.style.marginLeft = "-100%"
        
                removeClass()
        
        
            }, 1300);
        }
        
        const Prev = () => {
            let sliderSection = document.querySelectorAll(".slider__section");
            let sliderSectionLast = sliderSection[sliderSection.length -1];
            _slider_.style.marginLeft = "0";
            _slider_.style.transition = "margin-left 1.3s ease";
        
            setTimeout(() => {
                _slider_.style.transition = "none";
                _slider_.insertAdjacentElement("afterbegin", sliderSectionLast);
                _slider_.style.marginLeft = "-100%"
        
                removeClass()
        
            }, 1300);
        }
        
        btnNext.addEventListener('click', () => {
            intervalStop();
            btnNext.disabled = 'true';
            btnPrev.disabled = 'true';
            Next();
            setTimeout(() => {
                intervalInit();
            }, 500);
        });
        
        btnPrev.addEventListener('click', () => {
            intervalStop();
            btnNext.disabled = 'true';
            btnPrev.disabled = 'true';
            Prev();
            setTimeout(() => {
                intervalInit();
            }, 500);
        });
        
        const removeClass = () => {
        
            let _Class = document.querySelectorAll('.animated')
            _Class.forEach( _element => {
                _element.classList.add('hidden');
            } )
        
            let sliderSectionActive = document.querySelectorAll(".slider__section")[1];
            let _h = sliderSectionActive.children[1].children[0];
            let _p = sliderSectionActive.children[1].children[1];
        
            _h.classList.remove('hidden');
            _p.classList.remove('hidden');
        
            btnNext.disabled = 'false'
            btnPrev.disabled = 'false'
        
        }
        
        const intervalInit = () => {
            _init = setInterval(() => {
                Next()
            }, 10000 );
        }
        
        const intervalStop = () => {
            clearInterval(_init)
        }
        
        intervalInit();
        
        _area.onmouseover = () => {
            // console.log('mouse-over')
            intervalStop()
        }
        _area.onmouseout = () => {
            // console.log('mouse-out')
            intervalInit()
        }
    }
}

// *! *******************************************
// *? ************ Menu Hamburguesa *************
// *! *******************************************

function classChange() {
    let getNav = document.querySelector('.navbar');
    let getToggle = document.querySelector('.menu-toggle');
    getNav.classList.toggle('nav-hidden');
    getToggle.classList.toggle('open');
}


const linkActive = (link = null, section = null) => {

    if( link ) {
        const e = document.querySelector(link);
        e.classList.add('active');
    }

    if(section) {
        const e = document.querySelector(section);
        e.classList.add('active');
    }

}