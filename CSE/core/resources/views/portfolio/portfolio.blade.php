<!DOCTYPE html>
<html lang="en">

@include('portfolio.partials.head')

<body>
 

 

<?php
function luminance($hexcolor, $percent)
{
  if ( strlen( $hexcolor ) < 6 ) {
    $hexcolor = $hexcolor[0] . $hexcolor[0] . $hexcolor[1] . $hexcolor[1] . $hexcolor[2] . $hexcolor[2];
  }
  $hexcolor = array_map('hexdec', str_split( str_pad( str_replace('#', '', $hexcolor), 6, '0' ), 2 ) );

  foreach ($hexcolor as $i => $color) {
    $from = $percent < 0 ? 0 : $color;
    $to = $percent < 0 ? $color : 255;
    $pvalue = ceil( ($to - $from) * $percent );
    $hexcolor[$i] = str_pad( dechex($color + $pvalue), 2, '0', STR_PAD_LEFT);
  }

  return '#' . implode($hexcolor);
}
 

$col = "#ff0000";
?>
<section id="homeSection">
 
    @include('portfolio.partials.header')
    <section class="mainContent">
        <div class="container" style="margin-top: 100px;margin-bottom: 140px;">
            <div class="tiles row align-items-center">
               

                <div class="row mt-4">

                    @foreach($pro as $project)

                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                      <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 bg-transparent">
                          <div class="border-radius-lg py-3 pe-1" style="background-color: <?php echo luminance($project->project_color, 0.8);?>;box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px <?php echo luminance($project->project_color, 0.1);?> !important; }">
                            <div class="chart align-items-center">
                              
                                <div style="height: 170px;text-align:center;">
                                  <div class="icon " style="  height: 100%; width: 100%;   background-size: cover;text-align:center; background: url('{{ asset('/core/public/post/'. $project->project_logo) }}') center center no-repeat">  
                                  </div>
                                </div>

                                    {{-- <div class="icon-box6" style="height: 170px;text-align:center; " onclick="buttonClick('iconId{{$project->id}}','<?php echo luminance($project->project_color, 0.5);?>')" data-aos="zoom-in-left" data-aos-delay="500" id="tile6" style="border-style: none; background-color: <?php echo luminance($project->project_color, 0.8);?>"> 
                        
                                         <h4 class="title"><a href="" style="text-decoration: none;color: {{$project->project_color}}">{{$project->project_title}}</a></h4>
                                    </div> --}}
                             
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="mb-0 ">{{$project->project_title}}</h6>
                          <p class="text-sm ">Lorem, ipsum dolor sit ipsum!</p>
                          <hr class="dark horizontal">
                          <div class="d-flex ">
                            <i class="material-icons text-sm my-auto me-1">schedule</i>
                            <p class="mb-0 text-sm"> updated 2 days ago </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 mt-4 mb-4">
                      <div class="card  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 bg-transparent">
                          <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                            <div class="chart">
                              <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="mb-0 "> Daily Sales </h6>
                          <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
                          <hr class="dark horizontal">
                          <div class="d-flex ">
                            <i class="material-icons text-sm my-auto me-1">schedule</i>
                            <p class="mb-0 text-sm"> updated 4 min ago </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 mt-4 mb-3">
                      <div class="card ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 bg-transparent">
                          <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                            <div class="chart">
                              <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="mb-0 ">Completed Tasks</h6>
                          <p class="text-sm ">Last Campaign Performance</p>
                          <hr class="dark horizontal">
                          <div class="d-flex ">
                            <i class="material-icons text-sm my-auto me-1">schedule</i>
                            <p class="mb-0 text-sm">just updated</p>
                          </div>
                        </div>
                      </div>
                    </div> --}}

                    @endforeach
                  </div>
                {{-- <div class="col-lg-4 mt-5">
                  
                   
                    <button class="icon-box6" onclick="buttonClick('iconId{{$project->id}}','<?php echo luminance($project->project_color, 0.5);?>')" data-aos="zoom-in-left" data-aos-delay="500" id="tile6" style="border-style: none; background-color: <?php echo luminance($project->project_color, 0.8);?>"> 
                        
                        <div class="icon"> <img src="{{ asset('/core/public/post/'. $project->project_logo) }}" alt="User Image" height="50" ></div>
                        <h4 class="title"><a href="" style="text-decoration: none;color: {{$project->project_color}}">{{$project->project_title}}</a></h4>
                    </button>

                </div> --}}
           
         
                


            </div>

        </div>
    </section>
    
</section>

<section id="iframeSection">
    <iframe src="" id="frame" name="myFrame" style="width: 100%;height: 100vh;"></iframe>
</section>


<nav class="bottomNav" id="frame"  >

 

    {{$pro->links('vendor.pagination.custom')}}
    <a class="links0" href="" target="myFrame"><i class="icon0 las la-home"></i></a> 
            @foreach($pro as $project)
    
 
            <a onclick="buttonClick('iconId{{$project->id}}','<?php echo luminance($project->project_color, 0.5);?>')" id="iconId{{$project->id}}" class="ics" href="{{$project->project_link}}" style="background-color: <?php echo luminance($project->project_color, 0.8);?>;border-radius:50%;padding: 7px;,margin-left:10px;margin-right:10px;margin-bottom:25px;text-align:centre"  target="myFrame"><img  src="{{asset('/core/public/post/'.$project->project_icon)}}"> </a>
            @endforeach
     {{$pro->links('vendor.pagination.custom2')}}
   
</nav>





<script type="text/javascript">
    $(document).ready(function(){
        // Set div display to none
        $(".link_project").click(function(){
            $("#content").css("display", "none");
            $("#myframe").css("display", "block");

        });
        
    });


</script>




<script>
    function buttonClick(plc,color){
    var _iframe = document.getElementById("iframeSection");
    var _home = document.getElementById("homeSection");
    var _frame = document.getElementById("frame");
    var _iconId = document.getElementById(plc);
    var _iconClass = document.getElementsByClassName('ics');
    _iframe.style.display = "block";
    _home.style.display = "none";
    _frame.src = "http://192.168.100.2/sidlogdev/";
   
    var elements = document.getElementsByClassName('ics'); // get all elements
	for(var i = 0; i < elements.length; i++){
		elements[i].style.backgroundColor = "#ffffff";
        elements[i].style.padding = "7px";
	}
    _iconId.style.background=color;
    _iconId.style.padding = "14px";
    $(".icon0").removeClass("highlight0");
      
}
  
$(document).ready(function(){
        $(".icon0").addClass("highlight0");

$(".links0").click(function() {

    var _iframe = document.getElementById("iframeSection");
    var _home = document.getElementById("homeSection");
    _home.style.display = "block";
    _iframe.style.display = "none";
  

    var elements = document.getElementsByClassName('ics'); // get all elements
	for(var i = 0; i < elements.length; i++){
		elements[i].style.backgroundColor = "#ffffff";
        elements[i].style.padding = "7px";
	}

    $(".icon0").addClass("highlight0");
});

  
 
 
    });

    function displayCurrentTime() {
        let currentTime = new Date();
        let hours = currentTime.getHours();
        let minutes = currentTime.getMinutes();
        let seconds = currentTime.getSeconds();
        let amOrPm = hours < 12 ? "AM" : "PM";
        hours = hours === 0 ? 12 : hours > 12 ? hours - 12 : hours;
        hours = addZero(hours);
        minutes = addZero(minutes);
        seconds = addZero(seconds);
        let timeString = `${hours} : ${minutes} : ${seconds} ${amOrPm}`;
        document.getElementById("clock").innerText = timeString;
        let timer = setTimeout(displayCurrentTime, 1000);
    }
    function addZero(component) {
        return component < 10 ? "0" + component : component;
    }
    displayCurrentTime();


    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

    document.getElementById("date").innerHTML = date
</script>

</body>

</html>
