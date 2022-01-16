let btnToOpen = document.querySelector("#certificatesBtn");
let certificates = document.querySelector("#certificates");
let btnCloseCategorie = document.querySelector("#closeCategorie");
let sectionCertificatesImg = document.querySelectorAll('.sectionImgCertificado');

sectionCertificatesImg.forEach(sectionCer => {
    sectionCer.addEventListener('click',(e)=>{
        e.preventDefault();
        sectionCer.style.position="fixed";
        sectionCer.style.top="0";
        sectionCer.style.left="0";
        sectionCer.style.width="100%";
        sectionCer.style.height="100%";
        sectionCer.style.background="#00000082";
        sectionCer.style.backdropFilter="blur(3px)";
        sectionCer.style.display="flex";
        sectionCer.style.justifyContent="center";
        sectionCer.style.alignItems="center";
        sectionCer.firstElementChild.style.height="70%";
        sectionCer.lastElementChild.style.display="flex";
    })
    sectionCer.lastElementChild.addEventListener('click',(e)=>{
        e.preventDefault();
        setTimeout(()=>{
            sectionCer.lastElementChild.style.display="none";
            sectionCer.style.position="inherit";
            sectionCer.style.top="0";
            sectionCer.style.left="0";
            sectionCer.style.width="auto";
            sectionCer.style.height="auto";
            sectionCer.style.background="rgb(0 0 0 / 0%)";
            sectionCer.style.backdropFilter="blur(0px)";
            sectionCer.style.display="block";
            sectionCer.style.justifyContent="center";
            sectionCer.style.alignItems="center";
            sectionCer.firstElementChild.style.height="40vh";
        },100)
    })
})



if(window.innerWidth>1060){

    btnCloseCategorie.addEventListener("click",(e)=>{
        e.preventDefault();
        certificates.style.opacity="0";
        setTimeout(()=>{
            certificates.style.display="none";
        },200)
        setTimeout(()=>{
            btnToOpen.style.paddingBottom="0"
            btnToOpen.style.marginRight="0";
        },400)
        setTimeout(()=>{
            btnToOpen.style.color="#FFD100";
            btnToOpen.style.paddingLeft="0";
            btnToOpen.style.fontFamily='josefinSans-thin';
            
        },800)
        setTimeout(()=>{
            btnToOpen.style.background="linear-gradient(90deg,transparent, #d6d6d60e)";
            btnToOpen.style.zIndex="0"
            certificates.style.zIndex="0"
            
        },900)
    })
    
    btnToOpen.addEventListener("click",(e)=>{
        e.preventDefault();
        btnToOpen.style.zIndex="99";
        setTimeout(()=>{
            btnToOpen.style.background="#FFD100";
            btnToOpen.style.color="#202020";
            btnToOpen.style.paddingLeft="90vw";
            btnToOpen.style.fontFamily='josefinSans-mediumItalic';
        },100)
        
        setTimeout(()=>{
            btnToOpen.style.paddingBottom="122vh"
            btnToOpen.style.color="transparent";
            btnToOpen.style.marginRight="10vh";
        },500)
        setTimeout(()=>{
            certificates.style.display="block";
            certificates.style.zIndex="100"
            setTimeout(()=>{
                certificates.style.opacity="1"
            },50)
        },800)
    })
}else{
    btnCloseCategorie.addEventListener("click",(e)=>{
        e.preventDefault();
        certificates.style.opacity="0";
        setTimeout(()=>{
            certificates.style.display="none";
        },200)
    })
    
    btnToOpen.addEventListener("click",(e)=>{
        e.preventDefault();
        btnToOpen.style.zIndex="99";
        setTimeout(()=>{
            certificates.style.display="block";
            certificates.style.zIndex="100"
            certificates.style.position="fixed"
            setTimeout(()=>{
                certificates.style.opacity="1"
            },50)
        },800)
    })
}
