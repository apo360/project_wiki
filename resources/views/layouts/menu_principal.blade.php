
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    /* ---* INICIO MENU *--- */
    .img_logo_header{
      width: 65px;
      border-radius: 50%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 6px rgba(0, 0, 0, 0.19);
    }
    nav, .navigation_header{
      display: flex;
      flex-direction: row;
      align-items: center;
    }
    nav{
      background-color: #ddd;
      box-shadow: 1px 1px 4px #ddd;
      height: 6.5em;
      justify-content: space-between;
      padding: 0 10%;
    }
    .navigation_header{
      gap: 3em;
      z-index: 2;
    }
    .navigation_header a{
      text-decoration: none;
      color: black;
      transition: 1s;
      font-weight: bold;
      font-size: 14px 16px;
    }
    .navigation_header a:hover{
      text-decoration: underline;
      text-shadow: 2px 2px 8px black;
      text-transform: uppercase;
      text-size-adjust: 22px;
    }
    .btn_icon_header{
      background-color: transparent;
      border: none;
      cursor: pointer;
      color: white;
      display: none;
    }

    .FixoNoTopo{
      position: fixed;
      top: 0;
      width: 100%;
    }

    .content{
      text-align: center;
      padding-top: 5em;
      height: 100vh;
      transition: 1s;
    }

        /* Buttom Login and Register*/

 .header__nav__link--cta {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  min-width: 10.9em;
  background-color: #3e868d;
  font-weight: 700;
  box-shadow: rgba(0 0 0 .2) 0 .3em .7em 0;
  padding: 1.4em 1.5em;
  border-radius: 1.5em;
}

.header__nav__link {
  margin-left: 1.363em;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  text-decoration: none;
  font-size: 11px;
}

    @media screen and (max-width: 768px){

      .btn_icon_header{
        display: block;
      }

      /* SideBar Menu */
      .navigation_header{
        position: absolute;
        flex-direction: column;
        top: 0;
        background-color: #ddd;
        height: 90%;
        width: 55vw;
        padding: 1em;
        animation-duration: 1s;
        margin-left: -100vw;
        
      }

      .navigation_header a{
        padding: 1.4em 1.5em;
        border-bottom: #be2623 1px solid;
    }

      .toggleButtonRegisterLogin{
        animation-duration: 1s;
        height: 11%;
        width: 100vw;
        background-color: black;
        position: absolute;
        flex-direction: row;
        top: 169vw;
        bottom: 0;
        left: 0;
      }


      @keyframes showSidebar {
        form {margin-left: -100vw;}
        form {margin-left: -10vw;}
      }
    }
  </style>
</head>
<body>
    <header class = "">
      <!-- header section strats -->
        <h2>PACA</h2>
        <p>O conhecimento em um clique</p>
      <!-- end header section -->
    </header>

  <nav class="" id="header">

    <button class="btn_icon_header" onclick="toggleSidebar()">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </button>

    <div class="logo_header">
      <a class="navbar-brand" href="/" :active="request()->routeIs('/')">
        <img src="images/favicon.png" alt = "Plataforma Academica" class="img_logo_header">
      </a>
    </div>

    <div class="navigation_header" id="navigation_header">

      <button class="btn_icon_header" onclick="toggleSidebar()">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
      </button>

      <a href="/" :active="request()->routeIs('/')" >
        Home
      </a>

      <a href="#" class="">{{__('Apoio Académico')}}</a>
      <a href="#" class="">{{__('Colaboradores')}}</a>
      <a href="#">{{__('Anúncios')}}</a>
      <a href="#" class="">{{__('Ajuda')}}</a>

      <div class="toggleButtonRegisterLogin">
        <a href="#" class="header__nav__link header__nav__link--cta">{{__('Entrar')}}</a>
        <a href="#" class="header__nav__link header__nav__link--cta">{{__('Registar')}}</a>
      </div>
    </div>

  </nav>
  
</body>

<script>
  var header = document.getElementById('header');
  var navigatioHeader = document.getElementById('navigation_header');
  var content = document.getElementById('content');
  var showSidebar = false;

  var topoNav = header.offsetTop;

  function toggleSidebar(){
    showSidebar = !showSidebar;

    if (showSidebar) {
      navigatioHeader.style.marginLeft = '-10vw';
      navigatioHeader.style.animationName = 'showSidebar';
      content.style.filter = 'blur(3px)';
    } else {
      navigatioHeader.style.marginLeft = '-100vw';
      navigatioHeader.style.animationName = '';
      content.style.filter = '';
    }
  }

  function closeSidebar(){
    if(showSidebar){
      toggleSidebar();
    }
  }

  function fixar_menu() {  
    if (window.pageYOffset >= topoNav) {
      header.classList.add("FixoNoTopo");
    }else{
      header.classList.remove("FixoNoTopo");
    }
  }

  window.onscroll = function(){
    fixar_menu();
  }

  window.addEventListener('resize', function(event){
    if (window.innerHeight > 768 && showSidebar) {
      toggleSidebar();
    }
  })
</script>