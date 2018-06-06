<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="For PandoraCube">
    <meta name="robots" content="noindex">
    <meta http-equiv="author" content="MJ">
    <link href="/PMML/Stylesheets/testStyleSheet.css" type="text/css" rel="stylesheet" />
    <link href="/PMML/materialize/css/materialize.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>PMML</title>
    <script src="/PMML/materialize/js/materialize.js"></script>
    <script src="/PMML/Jquery/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
</head>

<body class="#eceff1 blue-grey lighten-5">
    <header class="no-padding">
        <div class="navbar-fixed">
            <nav class="navfeature #37474f blue-grey darken-1">
                <div class="container nav-wrapper">
                    <a href="#" class="waves-effect waves-light brand-logo">
                  <span style="font-size:1.5em;">PMML</span>
                  </a>
                    <ul id="nav" class="hide-on-med-and-down right">
                        <li><a href="study.html" style="font-size:1.3em;">About</a></li>
                        <li><a href="list.html" style="font-size:1.3em;">List</a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/14pDCMfhYCyTRfsl_RaWa-_viDwsNpGyLSRhHFMH3R1s/edit?usp=sharing" style="font-size:1.3em;">Edit</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container #ffffff white">
        <div id="app">
            <div class="row">
                <div class="input-field col s6">
                    <input id="name1" type="text" class="validate" v-on:input="updateValue($event.target.value)">
                    <label class="active" for="name1">이름</label>
                </div>
            </div>

            <br> 이름 : <span v-html="name"></span>
            <br> 학번 : <span v-html="stuID"></span>
            <br> 남은날 : <span v-html="dday"></span>
            <br> 입대일 : <span v-html="inday"></span>
            <br> 전역일 : <span v-html="outday"></span>
            <br> 소속 : <span v-html="regiment"></span>
            <br> 보직 : <span v-html="assignment"></span>
        </div>


        <iframe id="googlesheet" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQquO5M8p9wZZZGKpHRW5kUM_6BRZxxtFiVjiXIMzqmjarCmx4H9tcHVYNiZsJinCKZIX0XDn8AsiXk/pubhtml/sheet?headers=false&gid=0"></iframe>
    </div>
    <!--
         시트 쿼리
         https://docs.google.com/spreadsheets/d/14pDCMfhYCyTRfsl_RaWa-_viDwsNpGyLSRhHFMH3R1s/gviz/tq?tqx=out:html&tq&gid=0
         
         시트 JSON
         https://spreadsheets.google.com/feeds/list/14pDCMfhYCyTRfsl_RaWa-_viDwsNpGyLSRhHFMH3R1s/1/public/basic?alt=json-in-script
         https://spreadsheets.google.com/feeds/cells/14pDCMfhYCyTRfsl_RaWa-_viDwsNpGyLSRhHFMH3R1s/1/public/basic?alt=json-in-script&min-row=1&min-col=1
         인프런
         codemike
         #zh!(qth^9Via(xA
         -->
    <script src="/PMML/JS/finder.js"></script>
</body>

</html>