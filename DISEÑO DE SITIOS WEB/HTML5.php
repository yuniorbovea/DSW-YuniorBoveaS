<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
       <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        </button>
         <a class="navbar-brand" href="#">YUNIOR BOVEA</a>
       </div>
         <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
         <li class="active"><a href="DISEÑO DE SITIOS WEB/HTML5.php">HTML5</a></li>
         <li><a href="DISEÑO DE SITIOS WEB/objetivos.php">Objetivos</a></li>
         <li><a href="DISEÑO DE SITIOS WEBestructura basica de HTML5.php">Estuctura HTML</a></li>
         <li><a href="DISEÑO DE SITIOS WEB/recursos del sitio web.php">Recursos del Sitio Web</a></li>
       </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Registrarse</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Inicar Sesión</a></li>
        </ul>
        </div>
      </div> 
     </nav>
       <div class="container-fluid">
        <div class="center jumbotron">
    <h1>BLOG de programación</h1>
    <p>HTML, CSS y JS para el desarrollo de proyectos receptivos y moviles en la web.</p>
          </div>
           <div class="row content">
            <div class="col-sm-9 text-justify">
              <div class="panel panel-primary">
                <div class="panel-heading">Bienvenidos</div>
                  <div class="panel-body"><center> <p> HTML5, lo basico</center></br>
HTML5 es la versión 5 del lenguaje de marcado HTML. Un documento escrito en HTML tiene una estructura básica como la siguiente:</br>
"<!DOCTYPE html>" Lo primero que nos encontramos es la declaración del tipo de documento que se está mostrando. El DOCTYPE variará según el tipo de documento realizado, en nuestro ejemplo hemos utilizado el doctype del HTML5 que es maravillosamente sencillo.</br>
• html Tras declarar el tipo de documento, indicamos que iniciamos nuestro documento HTML. Esta etiqueta se cierra cuando finalizamos el documento. Vemos que lleva un atributo lang, esto sirve para indicar el idioma del documento (en nuestro caso español)</br>
• head En un documento HTML tenemos una cabecera dónde colocaremos los metadatos de la página, el código JavaScript y el CSS que utilizará el navegador para renderizar la página.</br>
• meta charset Obligatorio en HTML5, informa el juego de caracteres del documento, debería ser siempre utf-8. Como todo metadato debe ir dentro del head</br>
• title Es un tipo de metadato especial que nos proporciona el título de la página. Por motivos de posicionamiento (SEO) se recomienda que el meta title sea parecido al H1 del documento y a la URL de la página.</br>
• body En su interior tendremos el contenido de la página.</br>

<center>HTML5, lo nuevo</center></br>
HTML5 ha venido a solucionar, entre otras cosas, la falta de un criterio para definir el contenido semántico de una página web agregando una serie de etiquetas destinadas a facilitar la estructura del documento desde el punto de vista de su significado.</br>

• section: Esta etiqueta sirve para agrupar elementos relacionados entre sí de forma temática. Los section creados a nivel del body serán aquellos cuyo contenido de significado a la página, o sea, formen el contenido principal de la misma.</br>
• article: Esta etiqueta es «la última etiqueta con significado semántico». Habitualmente se utiliza dentro de un section para separar las unidades de contenido con significado semántico.</br>
• header: Creada para incluir información destinada a ayudar en la navegación. Suele incluir un H1 y, de declararse a nivel de body, la etiqueta nav.</br>
• nav: Esta etiqueta la utilizaremos para incluir el menú de navegación.</br>
• footer: Destinada a incluir la información sobre el elemento que lo contiene (autoría, propiedad, enlaces…)</br>
• aside: Su uso indicado es para agrupar el contenido a visualizar en la página, pero que no forma parte del contenido principal de la página.</br>
• Estas nuevas etiquetas permiten varios niveles de anidamiento entre sí. Por ejemplo, un section (por definición del estándar) debe tener un header y un footer, además de los article necesarios, pudiendo incluso tener otros section en su interior.</br>

A nivel de body también podemos tener un header y footer, estando dentro del header la etiqueta nav con el menú del sitio web.</br>

Los aside también pueden estar a nivel de body, section e incluso article.</br>

Todo esto aporta un alto grado de complejidad a la estructura del documento, aunque aporta una enorme flexibilidad para estructurar correctamente el contenido de la página desde le punto de vista semántico.
</p></div>
                </div>
                </div>
                <div class="col-sm-3 sidenav">
                  <div class="panel panel-primary">
                     <div class="panel-heading">SENA Blog</div>
                      <div class="panel-body">
                      <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#section1">SofiaPlus</a></li>
                        <li ><a href="#section2">Blackboard</a></li>
                        <li><a href="#section3">Platzi</a></li> 
                      </ul><br>
                      <div class="input-group">
                        <input type="text" class="form-control"placeholder="buscar...">
                        <span  class="input-group-btn">
                          <button class="btn btn-default" type="button">
                            <span  class="glyphicon glyphicon-search"></span>
                          </button>
                        </span>
                      </div>
                    </div>
                           </div> 
                 </div>
              </div>
              </div>
 <footer class="container-fluid text-center">
  <p>BLOG 2018</p>
 </footer>
</body>
</html>