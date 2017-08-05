Vue.component('message', {
    'props': ['id', 'full_name'],
    'template': `<div class="container">
<div style="margin-top:10px" class="panel panel-primary" v-show="isVisible" >

    <!-- Default panel contents -->
    <div class="panel-heading">
    {{full_name}} <span @click="isVisible=false" class="glyphicon glyphicon-remove pull-right"></span></div>
    <div class="panel-body">
        <p> {{id}}</p>
    </div>

</div></div>`,
    'data': function () {
        return {
            isVisible: true
        }
    }
});

// HTML - Navbar Section // Can't rename it to Navbar or includenavbar!
Vue.component('includebar', {
    'template': `<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src=" http://codelab.camp/logo.jpg" style="width:40px;margin-top:-10px;" class="img-responsive"
                     alt="Responsive image">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Day1 <span class="sr-only">(current)</span></a></li>
                                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Day 2 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="day201.html">Homw Work 1</a></li>
                        <li><a href="day202.html">Homw Work 2</a></li>
                    </ul>
                </li>
                <li><a href="day301.html">Day3</a></li>
                <li><a href="#">Day4</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Sign out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>`,
});

// HTML - Footer Section


Vue.component('includeter', {
    'template': ` <footer class="footer">
    <div class="container">
        <span class="text-muted">By Mohamed Baqir Al-Oraibi</span>
    </div>
</footer>

`,
});