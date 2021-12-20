let btnHome = document.querySelector("#homeBtn");

btnHome.addEventListener("click",(e)=>{
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

    proyects.style.opacity="0";
    setTimeout(()=>{
        proyects.style.display="none";
    },200)
    setTimeout(()=>{
        btnToOpenProyects.style.paddingBottom="0"
        btnToOpenProyects.style.marginRight="0";
    },400)
    setTimeout(()=>{
        btnToOpenProyects.style.color="#FFD100";
        btnToOpenProyects.style.paddingLeft="0";
        btnToOpenProyects.style.fontFamily='josefinSans-thin';
        
    },800)
    setTimeout(()=>{
        btnToOpenProyects.style.background="linear-gradient(90deg,transparent, #d6d6d60e)";
        btnToOpenProyects.style.zIndex="0"
        proyects.style.zIndex="0"
        
    },900)
})

