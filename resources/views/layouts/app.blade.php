<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>testSell</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="{{asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="app-layout">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
        <script type="text/javascript">
            $counter = 1;
            $max_counter = 7;
            $min_counter = 0;
            function productSlider($id) {
                if ($id === "left-slider-img") {
                    if ($counter < $max_counter) {
                        $left = $counter * (-294);
                        $counter++;
                        document.getElementById("product-slider-container").style.marginLeft = $left + "px";
                        document.getElementById("product-slider-container").style.transition = "1s";
                    }
                } else {
                    if ($counter > $min_counter) {
                        $counter--;
                        $right = $counter * (-294);
                        document.getElementById("product-slider-container").style.marginLeft = $right + "px";
                        document.getElementById("product-slider-container").style.transition = "1s";
                    }
                }
            }


            $current = "";
            $previous = "";
            $item_option_list_pointer = "";
            $item_option_list = "dashboard-left-dropdown-item-option-list-";
            $header_icon = "fa-chevron-right-";
            $toggle = false;
            function dashBoardItemDisplay($id) {
                $previous = $current;
                $item_option_list_pointer = $id.split("-");
                $current = $item_option_list + $item_option_list_pointer[3];
                $header_icon_rotate = $header_icon + $item_option_list_pointer[3];
                if ($previous === "") {
                    document.getElementById($header_icon_rotate).style.WebkitTransform = "rotate(90deg)";
                    document.getElementById($header_icon_rotate).style.marginTop = "15px";
                    document.getElementById($header_icon_rotate).style.marginRight = "10px";
                    document.getElementById($current).style.visibility = "visible";
                    document.getElementById($current).style.height = "205px";
                    $toggle = true;
                    //alert('#1\nid : ' + $id + '\ntoggle : ' + $toggle + '\nprevious : ' + $previous + '\ncurrent : ' + $current);
                } else if ($previous !== $current) {
                    if ($toggle === false) {
                        document.getElementById($header_icon_rotate).style.WebkitTransform = "rotate(90deg)";
                        document.getElementById($header_icon_rotate).style.marginTop = "15px";
                        document.getElementById($header_icon_rotate).style.marginRight = "10px";
                        document.getElementById($current).style.visibility = "visible";
                        document.getElementById($current).style.height = "205px";
                        $toggle = true;
                        //alert('#3\nid : ' + $id + '\ntoggle : ' + $toggle + '\nprevious : ' + $previous + '\ncurrent : ' + $current);
                    } else {
                        document.getElementById($header_icon_rotate).style.WebkitTransform = "rotate(0deg)";
                        document.getElementById($previous).style.visibility = "hidden";
                        document.getElementById($previous).style.height = "0px";
                        document.getElementById($current).style.visibility = "visible";
                        document.getElementById($current).style.height = "205px";
                        document.getElementById($header_icon_rotate).style.marginTop = "0px";
                        document.getElementById($header_icon_rotate).style.marginRight = "0px";
                        $toggle = false;
                        //alert('#3\nid : ' + $id + '\ntoggle : ' + $toggle + '\nprevious : ' + $previous + '\ncurrent : ' + $current);
                    }
                } else {
                    if ($toggle === false) {
                        document.getElementById($header_icon_rotate).style.WebkitTransform = "rotate(90deg)";
                        document.getElementById($header_icon_rotate).style.marginTop = "15px";
                        document.getElementById($header_icon_rotate).style.marginRight = "10px";
                        document.getElementById($current).style.visibility = "visible";
                        document.getElementById($current).style.height = "205px";
                        $toggle = true;
                        //alert('#3\nid : ' + $id + '\ntoggle : ' + $toggle + '\nprevious : ' + $previous + '\ncurrent : ' + $current);
                    } else {
                        document.getElementById($header_icon_rotate).style.WebkitTransform = "rotate(0deg)";
                        document.getElementById($current).style.visibility = "hidden";
                        document.getElementById($current).style.height = "0px";
                        document.getElementById($header_icon_rotate).style.marginTop = "0px";
                        document.getElementById($header_icon_rotate).style.marginRight = "0px";
                        $toggle = false;
                        //alert('#3\nid : ' + $id + '\ntoggle : ' + $toggle + '\nprevious : ' + $previous + '\ncurrent : ' + $current);
                    }
                }
            }

            /****************************************************/
            $current_content = "";
            $previous_content = "";
            function dashBoardItemShowContent($id) {
                $content = $id;
                $item_option_pointer = $content.split("-");
                $current_content = "dashboard-right-item-" + $item_option_pointer[3] + "-option-" + $item_option_pointer[6];
                if ($previous_content === "") {
                    document.getElementById("dashboard-right-item-1-option-1").style.visibility = "hidden";
                    document.getElementById("dashboard-right-item-1-option-1").style.height = "0px";
                    document.getElementById($current_content).style.visibility = "visible";
                    document.getElementById($current_content).style.height = "1600px";
                    $previous_content = $current_content;
                } else if ($current_content !== $previous_content) {
                    document.getElementById($previous_content).style.visibility = "hidden";
                    document.getElementById($previous_content).style.height = "0px";
                    document.getElementById($current_content).style.visibility = "visible";
                    document.getElementById($current_content).style.height = "1600px";
                    $previous_content = $current_content;
                } 
            }
        </script>
    </body>
</html>
