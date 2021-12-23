let btnToOpenBlog = document.querySelector("#blogBtn");
let blog = document.querySelector("#blog");
let btnCloseBlog = document.querySelector("#closeBlog");


btnCloseBlog.addEventListener("click",(e)=>{
    e.preventDefault();
    blog.style.opacity="0";
    setTimeout(()=>{
        blog.style.display="none";
    },200)
    setTimeout(()=>{
        btnToOpenBlog.style.paddingBottom="0"
        btnToOpenBlog.style.marginRight="0";
    },400)
    setTimeout(()=>{
        btnToOpenBlog.style.color="#FFD100";
        btnToOpenBlog.style.paddingLeft="0";
        btnToOpenBlog.style.fontFamily='josefinSans-thin';
        
    },800)
    setTimeout(()=>{
        btnToOpenBlog.style.background="linear-gradient(90deg,transparent, #d6d6d60e)";
        btnToOpenBlog.style.zIndex="0"
        blog.style.zIndex="0"
        
    },900)
})

btnToOpenBlog.addEventListener("click",(e)=>{
    e.preventDefault();
    btnToOpenBlog.style.zIndex="99";
    setTimeout(()=>{
        btnToOpenBlog.style.background="#FFD100";
        btnToOpenBlog.style.color="#202020";
        btnToOpenBlog.style.paddingLeft="90vw";
        btnToOpenBlog.style.fontFamily='josefinSans-mediumItalic';
    },100)
    
    setTimeout(()=>{
        btnToOpenBlog.style.paddingBottom="150vh"
        btnToOpenBlog.style.color="transparent";
        btnToOpenBlog.style.marginRight="10vh";
    },500)
    setTimeout(()=>{
        blog.style.display="block";
        blog.style.zIndex="100"
        setTimeout(()=>{
            blog.style.opacity="1"
        },50)
    },800)
})