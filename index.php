<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Create Your photo</title>
  <link rel="icon" type="image/x-icon" href="/img/favicon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js">
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/theme.css">
  <style>
    * body {
      background: #f7f7f7;
      color: black;
      font-family: 'Poppins', sans-serif;
    }

    .btn {
      background-color: #ff4646;
      border-color: #ff4646;
    }

    .btn:hover {
      background-color: #ff46468c;
      border-color: #ff46468c;
    }

    .btn:active {
      background-color: #ff46468c;
      border-color: #ff46468c;
    }

    @media (max-width:500px) {
      .row {
        flex-direction: column;
      }

      .cards .twibbon {
        max-width: 250px;
        max-height: 250px;
        margin: auto;
        position: relative;
        overflow: hidden;
      }

      .cards {
        max-width: 250px;
        margin: auto;
      }
    }

    .nav {
      margin-top: 0px;
      padding-top: 1rem;
      padding-bottom: 1rem;
      padding-left: 4rem;
      position: relative;
      background-color: white;
    }

    .nav img {
      width: 200px;
      height: auto;
    }

    .cards {
      width: 450px;
      margin: auto;
    }

    .cards h2 {
      margin: 0 0 6px 0;
      text-align: center;
    }

    .cards .twibbon {
      width: 450px;
      width: 450px;
      margin: auto;
      position: relative;
      overflow: hidden;
    }

    img#twibbon {
      width: 100%;

    }

    h2 {
      color: red;
    }

    img#photo {
      z-index: -1;
      position: absolute;
      /*-webkit-clip-path: circle(200px at 50% 50%);
          clip-path: circle(200px at 50% 50%)*/

    }

    .card a {
      display: block;
      text-align: center;
    }

    #download {
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: transparent;
      --blue: #007bff;
      --indigo: #6610f2;
      --purple: #6f42c1;
      --pink: #e83e8c;
      --red: #dc3545;
      --orange: #fd7e14;
      --yellow: #ffc107;
      --green: #28a745;
      --teal: #20c997;
      --cyan: #17a2b8;
      --white: #fff;
      --gray: #6c757d;
      --gray-dark: #343a40;
      --primary: #007bff;
      --secondary: #6c757d;
      --success: #28a745;
      --info: #17a2b8;
      --warning: #ffc107;
      --danger: #dc3545;
      --light: #f8f9fa;
      --dark: #343a40;
      --breakpoint-xs: 0;
      --breakpoint-sm: 576px;
      --breakpoint-md: 768px;
      --breakpoint-lg: 992px;
      --breakpoint-xl: 1200px;
      --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-family: 'Open Sans', sans-serif;
      -webkit-font-smoothing: antialiased;
      text-align: center;
      margin: 0;
      box-sizing: border-box;
      text-decoration: none;
      background: linear-gradient(-45deg, #ff4646, #ff9ca9);
      cursor: pointer;
      font-weight: 600;
      color: #fff;
      letter-spacing: 1px;
      border-radius: 30px;
      text-transform: uppercase;
      display: inline-block;
      vertical-align: middle;
      transform: perspective(1px) translateZ(0);
      position: relative;
      transition: all linear 400ms;
      border: none;
      padding: 12px 24px;
      font-size: 12px;
      line-height: 16px;
      visibility: visible;
      animation-delay: 0.6s;
      animation-name: fadeIn;
    }
  </style>
</head>

<body>
  <div class="nav">
    <a href="https://www.moraspirit.com/"><img src="img/logo.png" alt=""></a>
    
  </div>
  <div class="container mt-5">
    <div class="col">
      <label>Choose Frame</label>
      <select id="twibbonimg" class="form-select">
        <option value="img/COL.png">University of Colombo</option>
        <option value="img/EST.png">Eastern University</option>
        <option value="img/GWU.png">Gampaha Wickramarachchi University</option>
        <option value="img/JAF.png">University of Jaffna</option>
        <option value="img/KEL.png">University of Kelaniya</option>
        <option value="img/MOR.png">University of Moratuwa</option>
        <option value="img/PER.png">University of Peradeniya</option>
        <option value="img/RAJ.png">University of Rajarata</option>
        <option value="img/SAB.png">University of Sabaragamuwa</option>
        <option value="img/SEU.png">University of SEU</option>
        <option value="img/SJP.png">University of Sri Jayawardanapura</option>
        <option value="img/UVA.png">Uva Wellassa University</option>
        <option value="img/VAV.png">University of Vavuniya</option>
        <option value="img/VPA.png">University of VPA</option>
        <option value="img/WAY.png">Wayamba University</option>
      </select>

    </div>

    <div class="form-group col">Photo
      <input class="form-control" type="file" id="photoimg" value="">
    </div>
  </div>

  <!--<div class="row mt-3">
          <div class="col">
            Width <input type="text" class="form-control"id = "width" value="100%">
          </div>  
          <div class="col">
            Height <input type="text" class="form-control" id = "height" value="auto">
          </div>
        
          <div class="col">  
            Top <input type="text" class="form-control" id = "top" value="0px">
          </div>
          <div class="col">  
            Left <input type="text" class="form-control" class="form-control" id = "left" value="0px">
          </div> 
          </div>-->
  </div>
  </div>

  <div class="cards mt-5">
    <h2>Make Your Photo</h2>
    <div class="twibbon mt-3">
      <img src="" id="twibbon" alt="">

      <img src="" id="photo" alt="">
    </div>
    <div class="text-center mb-5 mt-3">
      <a data-wow-delay=".6s" href="#" id="download"  class="butn wow fadeIn" style="visibility: visible;">Download</a>
    </div>
  </div>
  </div>
  <div class="row mt-4">




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

    <script type="text/javascript">
      var photoimg = "";
      // Upload image to the directory
      $(document).ready(function() {
        $('#photoimg').change(function() {
          var formData = new FormData();
          var files = $('#photoimg')[0].files;
          formData.append('photo', files[0]);
          $.ajax({
            url: "upload.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
              photoimg = response;
            }
          });
        });
      });

      // Real time preview twibbon
      setInterval(function() {
        preview();
      }, 0);

      function preview() {
        var twibbonimg = $('#twibbonimg').val();

        var width = '100%'; //$('#width').val();
        var height = 'auto'; //$('#height').val();
        var top = '0px'; //$('#top').val(); 
        var left = '0px'; //$('#left').val();
        $("#photo").attr("src", photoimg);
        $('#twibbon').attr("src", twibbonimg);
        $('#photo').css("width", width);
        $('#photo').css("height", height);
        $('#photo').css("top", top);
        $('#photo').css("left", left);
      }

      // Download twibbon
      var element = $(".twibbon");
      $("#download").on('click', function() {
        html2canvas(element, {
          onrendered: function(canvas) {
            var imageData = canvas.toDataURL("image/png");
            var newData = imageData.replace(/^data:image\/png/, "data:application/octet-stream");
            $("#download").attr("download", "image.png").attr("href", newData);
          }
        });
      });
    </script>
</body>

</html>