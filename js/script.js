function Check() {
    x = window.innerHeight;
    x = x -53
    document.getElementById("main").style.height = x+"px";
    window.addEventListener("resize", function () {
    x = window.innerHeight -53;
    document.getElementById("main").style.height = x+"px";
    });
  }

    function login() {
      alert('Login');
    }

    function open1() {
      if (document.getElementById("leftBox").style.width == "65px") {
        document.getElementById("leftBox").style.width = "210px";
        document.getElementById("imgid00").setAttribute("src", "../img/Komprimiert/HomeIconLang.png");
        document.getElementById("imgid00").setAttribute("width", "150px");
        document.getElementById("imgid01").setAttribute("src", "../img/Komprimiert/LoginIconLang.png");
        document.getElementById("imgid01").setAttribute("width", "150px");
        document.getElementById("imgid02").setAttribute("src", "../img/Komprimiert/TeacherIconLang.png");
        document.getElementById("imgid02").setAttribute("width", "180px");
        document.getElementById("imgid03").setAttribute("src", "../img/Komprimiert/TopIconLang.png");
        document.getElementById("imgid03").setAttribute("width", "156px");
        document.getElementById("imgid04").setAttribute("src", "../img/Komprimiert/AboutIconLang.png");
        document.getElementById("imgid04").setAttribute("width", "151px");
        document.getElementById("main").style.marginLeft = "245px";
      } else {
      document.getElementById("leftBox").style.width = "65px";
      document.getElementById("imgid00").setAttribute("src", "../img/Komprimiert/HomeIcon.png");
      document.getElementById("imgid00").setAttribute("width", "40px");
      document.getElementById("imgid01").setAttribute("src", "../img/Komprimiert/LoginIcon.png");
      document.getElementById("imgid01").setAttribute("width", "40px");
      document.getElementById("imgid02").setAttribute("src", "../img/Komprimiert/TeacherIcon.png");
      document.getElementById("imgid02").setAttribute("width", "40px");
      document.getElementById("imgid03").setAttribute("src", "../img/Komprimiert/TopIcon.png");
      document.getElementById("imgid03").setAttribute("width", "40px");
      document.getElementById("imgid04").setAttribute("src", "../img/Komprimiert/AboutIcon.png");
      document.getElementById("imgid04").setAttribute("width", "40px");
      document.getElementById("main").style.marginLeft = "80px";
      }
    }

    function kontakt() {
      window.alert('Haben Sie weitere Wünsche, Anregungen oder Verbesserungsvorschläge für RateThem? Einfach eine Email an "schreiner.mattis@gmail.com"');
    }