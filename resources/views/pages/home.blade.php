 @extends('layouts.master')

@section('content')

	
	<center>
    <h1 id="info">Info</h1>
</center>
    <p class="lead">
        Selamat Datang di data pasien rumah sakit, di sini Kamu dapat memasukan data pasien yang baru masuk ke rumah sakit ini,
        mulai dari rawat jalan sampai rawat inap. Di sini kamu juga dapat mengedit dan delete Data pasien yang telah Di buat,
    </p>
    <hr>
<div id="bla">
    <a href="{{ route('tasks.index') }}" class="btn btn-info">Lihat Pasien</a>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Tambah Pasien</a>
</div>

@stop

<body>
<header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">Data Pasien</div>
           <div class="intro-lead-in">Selamat Datang di CRUD pasien. Di sini kamu dapat Mengatur data pasien yang kamu inginkan.</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#info">INFO</a>
        </div>
      </div>
     
    </header>

    </body>

<style type="text/css">
header.masthead{
    text-align:center;
    color:#fff;
    background-image:url(/images/hospital4.jpg);
    background-repeat:no-repeat;
    background-attachment:scroll;
    background-position:center center;
    background-size:100%;
}
header.masthead .intro-text{
    padding-top:150px;
    padding-bottom:100px
}
header.masthead .intro-text .intro-lead-in{
    font-size:22px;
    font-style:italic;
    line-height:22px;
    margin-bottom:25px;
    font-family:'Droid Serif',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'
}
header.masthead .intro-text .intro-heading{
    font-size:50px;
    font-weight:700;
    line-height:50px;
    margin-bottom:25px;
    color: #FFDC09;
    font-family:Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'

     font-size:22px;
    font-style:italic;
    line-height:22px;
    margin-bottom:25px;
    font-family:'Droid Serif',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'
}
@media (min-width:768px){
    header.masthead .intro-text{
        padding-top:300px;
        padding-bottom:200px
    }
    header.masthead .intro-text .intro-lead-in{
        font-size:40px;
        font-style:italic;
        line-height:40px;
        margin-bottom:25px;
        color: #FFDC09;
        font-family:'Droid Serif',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'
    }
    header.masthead .intro-text .intro-heading{
        font-size:75px;
        font-weight:700;
        line-height:75px;
        margin-bottom:50px;
        font-family:Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'
    }
    #bla{
    	padding-bottom: 40px;
    	text-align: center;	
    }
    .btn-xl{
    font-size:18px;
    padding:20px 40px;
	}
	.btn-primary{
    background-color:#fed136;
    border-color:#fed136;	
	}
	 .btn-primary:active,.btn-primary:focus, .btn-primary:hover{
    background-color:#fec810!important;
    border-color:#fec810!important;
    color:#fff
}
 .btn-primary:active,.btn-primary:focus{
    -webkit-box-shadow:0 0 0 .2rem rgba(254,209,55,.5)!important;
    box-shadow:0 0 0 .2rem rgba(254,209,55,.5)!important;
}

    </style>

