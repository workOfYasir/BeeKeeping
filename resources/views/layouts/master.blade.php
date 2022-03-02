<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,inital-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" integrity="sha512-r9kUVFtJ0e+8WIL8sjTUlHGbTLwlOClXhVqGgu4sb7ILdkBvM2uI+n/Fz3FN8u3VqJX7l9HLiXqXxkx2mZpkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>@yield('title') | Five Star Beekeeping</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/assests/css/style.css">
        @stack('css')
       
    </head>
    <body>
        <a href="https://api.whatsapp.com/send?phone=03324010410&text=Hello%21%20Beekeeper%20I%20Have%20a%20query%20." class="float" target="_blank">
            <i class="fab fa-whatsapp my-float"></i>
            </a>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    autoWidth:false,
                    navText: ["<p>Previous</p>","<p>Next</p>"],
                    mouseDrag:true,
                    touchDrag:true,
                    responsiveClass:true,
                    autoplay:true,
                    autoplayTimeout:2000,
                    autoplayHoverPause:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        500:{
                            items:2
                        },
                        1000:{
                            items:4
                        }
                    }
                });
                
            });
    
    </script>
    <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
    
    <script>
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            slideMargin: 0,
            thumbItem: 9
        });
        // // $(function(){
        //     $(".xzoom").xzoom({
        //     zoomWith: 400,
        //     tint:"#333",
        //     Xoffset:15,
        // // });
        // })
        $('#addStar').change('.star', function(e) {     
            $(this).submit();
            e.preventDefault();
        });
        function reply(id,index)
        {
    
            comment_id = $('#comment_id_'+index).val();
    
            if(comment_id=='')
            {
                $('#comment_id_'+index).val(id);
            }else{
                $('#comment_id_'+index).val('');
            }
        
        }
       


    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <script>
    
    var mymap = L.map('mapid');
    var longitude = 0;
    var latitude = 0;
    if(longitude == '' && latitude == ''){
        longitude = 70.16970962757074;
        latitude = 30.16332991435404;      
        zoom = 3;
    }else{
        longitude = $('.longitude').val();
        latitude = $('.latitude').val();
        latitude = parseFloat(latitude);
        longitude = parseFloat(longitude);
        zoom = 13;
    }
    
    console.log(longitude);
    var marker = null;
    var icon = L.icon({iconUrl: "{{asset('/images/vendor/leaflet/dist/marker-icon.png') }}"}); 
        icon.options.shadowSize = [0,0];
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1Ijoid29yay1vZi15YXNpciIsImEiOiJja3h1MGs5MDcxNnJsMndvMGh2YmR3MGNoIn0.gQLKyWvfXm_OanVqhNb9Sw', {
            attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
        }).addTo(mymap);
        mymap.setView(new L.LatLng(latitude,longitude), zoom);
        marker = L.marker([latitude,longitude ]).addTo(mymap)
        $('.latitude').val(longitude);
        $('.longitude').val(latitude);
        mymap.on('click', function(e) {
            // $('#addresses option').remove();
            // $('#addresses').append('<option hidden disabled >Select Val</option>');
            if (marker !== null) {
            mymap.removeLayer(marker);
        }
        longitude = e.latlng.lng;
        latitude = e.latlng.lat;
    
    marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(mymap)
    $('.latitude').val(latitude);
    $('.longitude').val(longitude);
    
     
    latitude = parseFloat(latitude)
    longitude = parseFloat(longitude)   
    console.log(longitude);
        var settings = {
        "url": "http://api.positionstack.com/v1/reverse?access_key=2c8f3fed03eebb532675b86d0776583f&query="+latitude+","+longitude,
        "method": "GET",
        "timeout": 0,
        };
    
        $.ajax(settings).done(function (response) {
        console.log(response.data[0]);
            // for (let indexes = 0; indexes < response.data.length; indexes++) {
            //     $('#addresses').append('<option value="'+indexes+'" >'+response.data[indexes].label+'</option>')
            // }
            // var selectedIndex = $('#addresses').val();
            // console.log(selectedIndex);
            // $('#user_address').val(response.data[0].label)
            // $('#user_address_city').val(response.data[0].county)
            // $('#user_address_country').val(response.data[0].country)
    
        });
    
    });
    
    var settings = {
        "url": "http://api.positionstack.com/v1/reverse?access_key=2c8f3fed03eebb532675b86d0776583f&query="+latitude+","+longitude,
        "method": "GET",
        "timeout": 0,
        };
    $.ajax(settings).done(function (response) {
    console.log(response.data[0]);
        // for (let index = 0; index < response.data.length; index++) {
        //     $('#addresses').append('<option value="'+index+'" >'+response.data[index].label+'</option>')      
        // }
        // var selectedIndex = $('#addresses').val();
        // console.log(response.data[selectedIndex]);
        // $('#user_address').val(response.data[0].name+', '+response.data[0].street+', '+response.data[0].county+', '+response.data[0].region+', '+response.data[0].country)
        // $('#user_address_city').val(response.data[0].county)
        // $('#user_address_country').val(response.data[0].country)
    
    });
    </script>
       @stack('scripts')
    </body>

</html>