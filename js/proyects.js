let btnToOpenProyects = document.querySelector("#proyectsBtn");
let proyects = document.querySelector("#proyects");
let btnCloseProyects = document.querySelector("#closeProyects");


btnCloseProyects.addEventListener("click",(e)=>{
    e.preventDefault();
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

btnToOpenProyects.addEventListener("click",(e)=>{
    e.preventDefault();
    btnToOpenProyects.style.zIndex="99";
    setTimeout(()=>{
        btnToOpenProyects.style.background="#FFD100";
        btnToOpenProyects.style.color="#202020";
        btnToOpenProyects.style.paddingLeft="90vw";
        btnToOpenProyects.style.fontFamily='josefinSans-mediumItalic';
    },100)
    
    setTimeout(()=>{
        btnToOpenProyects.style.paddingBottom="99vh"
        btnToOpenProyects.style.color="transparent";
        btnToOpenProyects.style.marginRight="10vh";
    },500)
    setTimeout(()=>{
        proyects.style.display="block";
        proyects.style.zIndex="100"
        setTimeout(()=>{
            proyects.style.opacity="1"
        },50)
    },800)
})