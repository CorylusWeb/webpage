$(document).ready(main);

var isMenuOpen = 0;

function main() {
    
    var body = document.getElementById('body');
    var content = document.getElementById('content');
    var wrapper = document.getElementById('wrapper');
    var cover = document.getElementById('cover');
    var w_fixer = document.getElementById('w_fixer');
    var m_link = document.getElementById('menu_link');
    
    $('.menu_bar').click(function(){
        
        abrirMenu();   
        
    });
    
    $('.menu_link').click(function(){
        
        cerrarMenu();   
        
    });

    $('.w_fixer').click(function(){

        cerrarMenu();

    });
        
    $('.cerrar').click(function(){
        
        cerrarMenu();
        
    });
    
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 420) {
            $("header").css("background","#FFF");
            $("header").css("border-bottom","1px solid #F8F8F8");
            
            if (window.innerWidth > 600) {
                $(".header_contact").css("display","block");
            }
            else {
                 $(".header_contact").css("display","none");
            }
            /*
            $("header").css("-webkit-box-shadow","0px 1px 5px 0px rgba(50, 50, 50, 0.50)");
            $("header").css("-moz-box-shadow","0px 1px 5px 0px rgba(50, 50, 50, 0.50)");
            $("header").css("box-shadow","0px 1px 5px 0px rgba(50, 50, 50, 0.50)");*/
        }
        else {
            $("header").css("background","none");
            $("header").css("border-bottom","none");
            $(".header_contact").css("display","none");
            /*
            $("header").css("-webkit-box-shadow","none");
            $("header").css("-moz-box-shadow","none");
            $("header").css("box-shadow","none");*/
            
        }
     });
    
    
};

function cerrarMenu() {
    
    $('nav').animate({
        right: '-320px'
    });

    $('.wrapper').animate({
        right: '0'
    });
    
    $('#cover').animate({
        right: '0' 
    });

    body.style.overflowY = 'visible';
    
    w_fixer.style.display = 'none';
    
    cover.style.display = 'none';
    cover.style.zIndex = '0';
    
    isMenuOpen = 0;
    
};

function abrirMenu() {
    
    $('nav').animate({
        right: '-320' 
        
    });

    $('.wrapper').animate({
        right: '320px' 
    });
    
    $('#cover').animate({
        right: '320px' 
    });

    body.style.overflowY = 'hidden';
    
    cover.style.display = 'block';
    cover.style.zIndex = '99999';
    
    w_fixer.style.display = 'block';
    w_fixer.style.backgroundColor = '#FFF';
    
    isMenuOpen = 1;
    
};

function openService(evt, serviceName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(serviceName).style.display = "block";
    evt.currentTarget.className += " active";
}

