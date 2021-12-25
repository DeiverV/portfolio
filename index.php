<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio!</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="shortcut icon" href="./icons/favicon.png" type="image/x-icon">
    
</head>
<body>
    <div class="cube"> 
        <div class="topCube"></div>
        <div>
            <span style="--i:0;"></span>
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
        </div>
    </div>
    <section id="home">
        <div id="containerIndex">
            <div id="infoDeiber">
               <div id="tittle">
                    <h1>Portfolio || </h1>
                    <h2>&nbsp; Deiber Verano</h2>
               </div>
               <div id="imgProgrammer">
                   <img src="./img/yo.jpeg" alt="Deiber.jpg">
               </div> 
               <div id="socialMedia">
                   <div id="containerSocialMedia">
                       <a href="https://www.facebook.com/deiver.veranoavila" target="_blank">
                           <img src="./icons/facebook.png" alt="">
                           <h4>Deiber Verano</h4>
                       </a>
                       <a href="https://github.com/DeiverV" target="_blank">
                           <img src="./icons/githubWhite.png" alt="">
                           <h4>DeiverV</h4>
                       </a>
                       <a href="https://www.linkedin.com/in/deiber-david-verano-avila-a5b629217/" target="_blank">
                            <img src="./icons/linkedin.png" alt="">
                            <h4>Deiber Verano Avila</h4>
                       </a>
                       <a href="http://" target="_blank">
                           <img src="./icons/gmail.png" alt="" >
                           <h4>Deiberveranodev@gmail.com</h4>
                       </a>
                   </div>
               </div>
               <div id="littleSocial">
                <a href="https://www.facebook.com/deiver.veranoavila" target="_blank">
                    <img id="facebook" src="./icons/facebook.png" alt="">
                </a>
                <a href="https://github.com/DeiverV" target="_blank">
                    <img id="github" src="./icons/githubWhite.png" alt="">
                </a>
                <a href="https://www.linkedin.com/in/deiber-david-verano-avila-a5b629217/" target="_blank">
                    <img id="linkedin" src="./icons/linkedin.png" alt="">
                </a>
                <a href="http://" target="_blank">
                    <img id="gmail" src="./icons/gmail.png" alt="">
                </a>
               </div>
            </div>
            <div id="description">
                <h3>About Me:</h3>
                <p>
                    Hi! I'm Deiber Verano Avila, i'm 17 Years Old and I am a Software developer, I love the technology
                    see what it is able to do. Now maybe i can consider myself a Junior Developer.
                    I like study a lot in order to improve my knowledge and skills about programming
                    (Cause develop and be creative is my passion). I have knowledge and basic skills in: Python,
                     Java, JavaScript, Css, PHP, MySQL, PostgreSQL, GIT - GITHUB. Also i have been worked with SCRUM methodology.
                </p>
                <div id="particles-js">
                    <canvas class="particles-js-canvas-el">
                    </canvas>
                    <div id="imgsflotantes">
                        <img src="./icons/git.png" alt="">
                        <img src="./icons/githab.png" alt="">
                        <img src="./icons/html.png" alt="">
                        <img src="./icons/js.png" alt="">
                        <img src="./icons/mysql.png" alt="">
                        <img src="./icons/php.png" alt="">
                        <img src="./icons/posgre.png" alt="">
                        <img src="./icons/css.png" alt="">
                        <img src="./icons/python.png" alt="">
                    </div>
                </div>
            </div>
            <nav id="menu">
                <div id="homeDivBtn">
                    <button id="homeBtn">Home</button>
                </div>
                <div>
                    <button id="certificatesBtn">Certificates</button>
                </div>
                <div>
                    <button id="proyectsBtn">Proyects</button>
                </div>
                <div>
                    <button id="blogBtn">Blog</button>
                </div>
                
            </nav>
        </div>
    </section>
    <section id="certificates">
        <div id="containerCertificates">
            <h1>CERTIFICATES</h1>
            <figure id="closeCategorie">X</figure>
            <div class="certificate">
                <div class="certificateInfo">
                    <h3>Systemic Thinking - UTADEO</h3>
                    <p>A course about Systems. what are the systems? how are they composed? and how they are modeled</p>
                </div>
                <img src="./img/pensamientoSistemico.jpg" alt="" srcset="">
            </div>
            <div class="certificate">
                <div class="certificateInfo">
                    <h3>Digital skills for information management - SENA</h3>
                    <p>How the information needs to be manage via socialMedia and other digital skills.</p>
                </div>
                <img src="./img/gestionInfo.jpg" alt="" srcset="">
            </div>
            <div class="certificate">
                <div class="certificateInfo">
                    <h3>University CSS - Global Mentoring (UDEMY)</h3>
                    <p>All about CSS. How to give good styles to a web page</p>
                </div>
                <img src="./img/ucss.jpg" alt="" srcset="">
            </div>
            <div class="certificate">
                <div class="certificateInfo">
                    <h3>University HTML - Global Mentoring (UDEMY)</h3>
                    <p>All about HTML. How to make a good web taking into consideration the best practices with semantic Tags</p>
                </div>
                <img src="./img/uhtml.jpg" alt="" srcset="">
            </div>
            <div class="certificate">
                <div class="certificateInfo">
                    <h3>Exercises of SQL - Numpi (UDEMY)</h3>
                    <p>Exercises to practice SQL sentences. (SELECT, UPDATE, DELETE, INSERT, WHERE, JOINS)</p>
                </div>
                <img src="./img/ejerciciosSQL.jpg" alt="" srcset="">
            </div>
            <div class="certificate"> 
                <div class="certificateInfo">
                    <H3>Creation of SQL DataBases - Numpi (UDEMY)</H3>
                    <p>A little course about create databases in MySQL taking into consideration the best practices in DB structure.</p>
                </div>
                <img src="./img/creacionSQL.jpg" alt="" srcset="">
            </div>
            <div class="certificate">
                <div class="certificateInfo">
                    <h3>Innovative entrepreneurship - SENA</h3>
                    <p>A course about how to build a entrepreneur and keep doing innovative things.</p>
                </div>
                <img src="./img/emprendimiento.jpg" alt="" srcset="">
            </div>
            <div class="certificate">
                <div class="certificateInfo">
                    <h3>Job Skills - Telefonica Fundacion (Movistar)</h3>
                    <p>A course about soft skills. how to improve the work teams, how to have assertive communication and how build nice relationships in the work environment.</p>
                </div>
                <img src="./img/habilidadesEmpleo.jpg" alt="" srcset="">
            </div>
            <div class="certificate">
                <div class="certificateInfo">
                    <h3>Skills to create networks and alliances of trust at work - SENA</h3>
                    <p>Course about soft skills, how to create nice alliances and work teams. How to have a assertive comunication, be a good leader.</p>
                </div>
                <img src="./img/derechos-fundamentales.jpg" alt="" srcset="">
            </div>
        </div>
    </section>
    <section id="proyects">
        <div id="proyectsContainer">
            <h1>PROYECTS</h1>
            <figure id="closeProyects">X</figure>
            <div class="proyect">
                <div class="imgProyect">
                    <img src="./img/makefs.jpg" alt="">
                </div>
                <div class="infoProyect">
                    <h3>Makef's</h3>
                    <p>
                        A website / Socialmedia to upload and see food recipes. Also to interact with
                        community. Built with HTML, CSS, JavaScript, PHP, PostgreSQL, Python, MongoDB.
                    </p>
                    <a href="https://www.makefs.site" target="_blank"><button class="seeMoreProyect">See more</button></a>
                </div>
            </div>
            <div class="proyect">
                <div class="imgProyect">
                    <img src="./img/pc24x7.png" alt="">
                </div>
                <div class="infoProyect">
                    <h3>PC24x7</h3>
                    <p>
                        A website for building computer resumes. An administrative web to have better control over the computers that a organization has.
                        Built with Django, SpringBoot, NodeJs, VueJs, ApolloServer, GraphQL, MongoDB, PostgreSQL, Docker.
                    </p>
                    <a href="https://www.youtube.com/watch?v=Q1soOMkoaAM&ab_channel=MisiónTIC2022UNAL" target="_blank"><button class="seeMoreProyect">See more</button></a>
                </div>
            </div>
            <div class="proyect">
                <div class="imgProyect">
                    <img src="./img/dark-souls.jpg" alt="">
                </div>
                <div class="infoProyect"> 
                    <h3>Fan Page DarkSouls</h3>
                    <p>A tribute web to the videogame "DarkSouls". A informative web about the game. Built with HTML, CSS , JavaScript</p>
                    <a href=""><button class="seeMoreProyect">See more</button></a>
                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div id="containerBlog">
            <h1 id="tittleSectionBlog">Welcome to my Blog!<h1>
            <figure id="closeBlog">X</figure>
            
                <?php
                    include("./controllers/conexion.php");
                    $conexion = new Conexion;
                    $conexion = $conexion->Conectar();
                    $select = "SELECT * FROM blog ORDER BY upload DESC";
                    $execute = $conexion->prepare($select);
                    $execute->execute();
                    while($posts = $execute->fetch(PDO::FETCH_ASSOC)){
                        if(isset($posts)){
                            echo <<<EOT
                            <div class="publication">
                                <div class="userPublication">
                                    <div class="infoUserBlog">
                                        <img src="./img/yo.jpeg" alt="me">
                                        <h3>Deiber Verano Avila</h3>
                                    </div>
                                    <h5>$posts[upload]</h5>
                                </div>
                                <div class="bodyPublication">
                                    <h4>$posts[tittle]</h4>
                                    <p>$posts[bodytext]</p>
                                </div>
                            </div>
                            EOT;
                        }else{
                            echo "no hau una monda";
                        }
                    }
                ?>
        </div>
    </section>
    <script src="./js/particles.js"></script>
    <script src="./js/certificates.js"></script>
    <script src="./js/proyects.js"></script>
    <script src="./js/blog.js"></script>
    <script src="./js/home.js"></script>
</body>
</html>