/*değişkenler*/
const hamburger = document.querySelector(".hamburger");
const hamburgerr = document.querySelector(".hamburgerr");
const about = document.querySelector(".about");
const nav = document.getElementById("nav");
const slider = document.getElementById("slider");
const body=document.getElementById("body");
var baglantı=document.getElementById("bt");
const eth=document.querySelector("#BINANCE\\:ETHUSDT");
const çizgicont=document.getElementById("çizgi-conteiner");
const çizgicontt=document.getElementById("çizgi-conteinerr");
const çizgiconttt=document.getElementById("çizgi-conteinerrr");
const li=document.getElementById("iletisim-li");
const lii=document.getElementById("hakkında-li");
const liii=document.getElementById("destek-li");
const t1 = gsap.timeline();



/*değişkenler*/

/*swiper-gsap*/
/*Navbar*/
$(hamburger).click(function() {
  about.classList.toggle("açık");
  nav.classList.toggle("fixed");
  body.classList.toggle("cubuk");

  if (about.classList.contains("açık")) {
    
    t1.to(about, 0.6, { clipPath: "circle(2500px at 100% -20%)" });
    t1.to(".çizgi1", 0.5, { rotate: "45deg", y: "5px" }, "-=0.5");
    t1.set(".çizgi2", { display: "none" }, "-=0.5");
    t1.to(".çizgi3", 0.5, { rotate: "-45deg", y: "-5px" }, "-=0.5");
    t1.fromTo(".social-links", 1, { opacity: 0 }, { opacity: 1 });
  
  } else {
    
    t1.to(about, 0.5, { clipPath: "circle(50px at 100% -20%)" });
    t1.to(".çizgi1", 0.5, { rotate: "0", y: 0 }, "-=0.5");
    t1.set(".çizgi2", { display: "block" }, "-=0.5");
    t1.to(".çizgi3", 0.5, { rotate: "0", y: 0 }, "-=0.5");
  
  }
});
$(hamburgerr).click(function() {
  about.classList.toggle("açık");
  nav.classList.toggle("fixed");

  if (about.classList.contains("açık")) {
    /*t1.set("#slider",{display:"none"});*/
    t1.to(about, 0.6, { clipPath: "circle(2500px at 100% -20%)" });
    t1.to(".çizgi1", 0.5, { rotate: "45deg", y: "5px" }, "-=0.5");
    t1.set(".çizgi2", { display: "none" }, "-=0.5");
    t1.to(".çizgi3", 0.5, { rotate: "-45deg", y: "-5px" }, "-=0.5");
    t1.fromTo(".social-links", 1, { opacity: 0 }, { opacity: 1 });
   /* t1.fromTo(".about-text", 1, { opacity: 0 }, { opacity: 1 }, "-=0.75");*/
  } else {
    
    t1.to(about, 0.5, { clipPath: "circle(50px at 100% -20%)" });
    t1.to(".çizgi1", 0.5, { rotate: "0", y: 0 }, "-=0.5");
    t1.set(".çizgi2", { display: "block" }, "-=0.5");
    t1.to(".çizgi3", 0.5, { rotate: "0", y: 0 }, "-=0.5");
    /*t1.set("#slider",{display:"flex"});*/
  }
});
/*Navbar*/
/*Footer*/ 
$(çizgicont).click(function() {
  li.classList.toggle("none");
  li.classList.toggle("none-556");
var ilk = document.querySelector(".çizgii1");
var iki = document.querySelector(".çizgii2");
var üç = document.querySelector(".çizgii3");
  if(li.classList.contains("none")) {


   ilk.style="transform: translate(0px, 0px) rotate(0deg);";
   iki.style="display:flex;";
   üç.style="transform: translate(0px, 0px) rotate(0deg);";



  } else {
     ilk.style="transform: translate(0px, 5px) rotate(45deg);";
   iki.style="display:none;";
   üç.style="transform: translate(0px, -5px) rotate(-45deg);";

    
  }
});
$(çizgicontt).click(function() {
  lii.classList.toggle("none");
  lii.classList.toggle("none-556"); 
var ilk = document.querySelector(".çizgii1-hakkında");
var iki = document.querySelector(".çizgii2-hakkında");
var üç = document.querySelector(".çizgii3-hakkında");
  if(lii.classList.contains("none")) {


   ilk.style="transform: translate(0px, 0px) rotate(0deg);";
   iki.style="display:flex;";
   üç.style="transform: translate(0px, 0px) rotate(0deg);";



  } else {
     ilk.style="transform: translate(0px, 5px) rotate(45deg);";
   iki.style="display:none;";
   üç.style="transform: translate(0px, -5px) rotate(-45deg);";

    
  }
});
$(çizgiconttt).click(function() {
  liii.classList.toggle("none");
  liii.classList.toggle("none-556");
var ilk = document.querySelector(".çizgii1-destek");
var iki = document.querySelector(".çizgii2-destek");
var üç = document.querySelector(".çizgii3-destek");
  if(liii.classList.contains("none")) {


   ilk.style="transform: translate(0px, 0px) rotate(0deg);";
   iki.style="display:flex;";
   üç.style="transform: translate(0px, 0px) rotate(0deg);";



  } else {
     ilk.style="transform: translate(0px, 5px) rotate(45deg);";
   iki.style="display:none;";
   üç.style="transform: translate(0px, -5px) rotate(-45deg);";

    
  }
});
/*$(çizgicont).click(function() {
  li.classList.toggle("none");
 
  var iki=document.getElementsByClassName("çizgii2");
  var üç=document.getElementsByClassName("çizgii3");

  if (about.classList.contains("none")) { var ilk = document.querySelector(".çizgii1");
   ilk.style="width:100px";
 console.log("gsds");
  } else {
    
    
    t1.to(".çizgi1", 0.5, { rotate: "0", y: 0 }, "-=0.5");
    t1.set(".çizgi2", { display: "block" }, "-=0.5");
    t1.to(".çizgi3", 0.5, { rotate: "0", y: 0 }, "-=0.5");

  }
});*/
/*Footer*/
/*swiper-gsap*/
/*slider*/
var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
	/*slider*/

function idekleme(){

	
}
idekleme();
/*baglantı.addEventListener("click", function (){
		var ilk = document.querySelector('[aria-label="Go to slide 1"].swiper-pagination-bullet-active');
		var iki = document.querySelector('[aria-label="Go to slide 2"].swiper-pagination-bullet-active');
		var üç = document.querySelector('[aria-label="Go to slide 3"].swiper-pagination-bullet-active');
		var dört = document.querySelector('[aria-label="Go to slide 4"].swiper-pagination-bullet-active');
		var beş = document.querySelector('[aria-label="Go to slide 5"].swiper-pagination-bullet-active');
   
	
if (ilk) {
  kk.click();
  console.log(1);
 
}
else if(iki){
	console.log(2);
}
else if(üç){
	console.log(3);
}
else if(dört){
	console.log(4);
}
else if(beş){
console.log("clk");
  var iframe = document.getElementById('takip1');

// Iframe içindeki belgeye eriş
var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

// Butona eriş
var button = iframeDoc.getElementById('BITSTAMP:ETHUSD');

// Butona tıklama işlemi
button.click();
	console.log(5);

}
      
     
   });*/
function checkChar() {
    var allowedChar = 300;
    var content = document.getElementById("yorum");
    var contLength = content.value.length;
    
    if (contLength >= allowedChar) {
      var content = document.getElementById("yorum");
      content.value = content.value.substring(0, allowedChar);
      content.style="border-color: red; border-width: 3px;";
      document.getElementById("report").innerHTML = "<span style='color:red;'>UYARI: En fazla " + allowedChar + " karakter girebilirsiniz</span>";
    }
    else if (contLength >= 150 && contLength <= 250) {
      content.style="border-color: yellow;  border-width: 3px;";
      document.getElementById("report").innerHTML = "<span style='color:white;'>Karakter Sayı Limiti: " +allowedChar +"/"+ contLength + "</span>";
    }
     else if (contLength >= 50 && contLength <= 150) {
      content.style="border-color: green; border-width: 3px;";
      document.getElementById("report").innerHTML = "<span style='color:white;'>Karakter Sayı Limiti: " +allowedChar +"/"+ contLength + "</span>"; 
       }
    else if (contLength >= 250 && contLength <= 299) {
      content.style="border-color: orange; border-width: 3px;";
      document.getElementById("report").innerHTML = "<span style='color:white;'>Karakter Sayı Limiti: " +allowedChar +"/"+ contLength + "</span>";
        }
    else{
      var content = document.getElementById("yorum");
      content.style="border-color: white;  border-width: 3px;";
      document.getElementById("report").innerHTML = "";
      document.getElementById("report").innerHTML = "<span style='color:white;'>Karakter Sayı Limiti: " +allowedChar +"/"+ contLength + "</span>";
        }
  }
  
  



