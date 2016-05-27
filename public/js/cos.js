$(document).ready(function(){
  var baseUrl="dukun/";
  var uri=window.location.href;
  var urisection=[];
  if(uri===baseUrl){
    urisection=[baseUrl];
  }else{
    urisection=uri.split("?");
  }
  console.log(uri);
  $("#"+urisection[1]).addClass("selected");
  $("#"+urisection[1]).find("a").css("color","#000");
  //
  if(urisection.length < 2){
    $("#pageSide").load("home.php",function(){
      $(".scroll").click(function(event){
        var $target=$(this).attr("href");
        $('html, body').stop().animate({
          scrollTop: $($target).offset().top - 90
        }, 1500,'easeInOutExpo');
        event.preventDefault();
        return false;
      });
    });
  }else{
    var splits=urisection[1];
    var splitAgain=splits.split("#");
    var sectionThis="";
    if(splitAgain.length > 1){
      sectionThis=splitAgain[0];
    }else{
      sectionThis=splitAgain[0];
    }
    $("#pageSide").load(sectionThis+".php",function(){
      $(".scroll").click(function(event){
        var $target=$(this).attr("href");
        $('html, body').stop().animate({
          scrollTop: $($target).offset().top - 90
        }, 1500,'easeInOutExpo');
        event.preventDefault();
        return false;
      });
      //
      $(".second").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function(){
          //set layout
          $('.col-3').masonry({
        		itemSelector: '.clm'
        	});
          //set slideMaster
          $("#second-box").slideMaster({"targetItem":".head-master","timing":5000});
        });
        $(".col-4").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
          function(){
            //set slideMaster
            if(sectionThis != "detail"){
            $("#second-box").slideMaster({"targetItem":".head-master","timing":5000});
          }
          });
        //

        $(".dataForm").submit(function(){
          var contentType ="application/x-www-form-urlencoded; charset=utf-8";
          var saveRel=$(this).attr("action");
          $.ajax({
      			url:saveRel,
      			type:"POST",
      			contentType:contentType,
      			data:$(this).serialize(),
      			success:function(ret){
      			  console.log(ret);
      				if(ret){
      				  swal("Terima Kasih Komentarnya","","success");
              }else{
                swal("Gagal Simpan Data","","error");
              }
      			}
      		});
          $(this).find("input[type='text']").val("");
          $(this).find("textarea").val("");
          return false;
        });
        //
        if(sectionThis === "detail"){
          $(".menu").css({"top":400});
        }
    });
  }
  //
  $(window).scroll(function(e){
    var U=window.location.href;
    var Yo=U.split("?");
    var Mn=[];
    if(typeof Yo[1] == "undefinied"){
      Mn=["http","non"];
    }else{
      Mn=Yo[1];
    }
    var sp=Mn.split("#");
    //var spA=sp.split("#");
    var positionTarget=$("#section-1").offset().top;
    var M=window.pageYOffset+150;
    if(sp[0]==="detail"){
      if(M > positionTarget-60){
        $(".menu").css("top",-30);
        $(".to-top").fadeIn();
        $(".to-top").click(function(event){
          $('html, body').stop().animate({
            scrollTop: 0
          }, 1500,'easeInOutExpo');
          event.preventDefault();
        });
      }else{
          $(".menu").css("top","400px");
          $(".to-top").fadeOut();
      }
    }else{
      if(M > positionTarget){
        $(".menu").css("margin-top","-10px");
        $(".to-top").fadeIn();
        $(".to-top").click(function(event){
          $('html, body').stop().animate({
            scrollTop: 0
          }, 1500,'easeInOutExpo');
          event.preventDefault();
        });
      }else{
          $(".menu").css("margin-top","30px");
          $(".to-top").fadeOut();
      }
    }
  });
//
})
