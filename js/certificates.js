let btnToOpen = document.querySelector("#certificatesBtn");
let certificates = document.querySelector("#certificates");
let btnCloseCategorie = document.querySelector("#closeCategorie");
let imgsCertificates = document.querySelectorAll('.imgCertificado');

imgsCertificates.forEach(certificate => {
    certificate.addEventListener('click', (e) =>{
        certificate.style.position="absolute";
        certificate.style.top="0";
        certificate.style.left="0";
        certificate.style.width="50vh";
    })
});

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
