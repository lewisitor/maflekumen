@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
            <!--
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
        -->
        <div style="color:yellow;background-color:green;position:absolute;width:100%;left:0;">
            
            <span style="margin: 0px 0px 0px 450px;">MINISTRY OF PUBLIC HEALTH</span>
            <br/>
            <span style="font-size:x-large; margin:0px 0px 0px 195px;"><strong><b>MAFLEKUMEN HIGHER INSTITUTE OF HEALTH SCIENCES TIKO</b></strong></span>
           <br/>
            <marquee>
             <span style="margin: 0px 0px 0px 450px;">ENTREPRENEURIAL HEALTH UNIVERSITY</span></marquee>

        <br/>

        <div style="float:left; position:relative;">
        <span style="color:white; margin:0px 0px 0px 20px;">HND Creation Auth:</span><br>
        <span style="color:white;">08/0105/MINESUP/05/05/2008</span>
        </div>

        <div style="float:left; position:relative; padding:0px 0px 0px 945px;">
        <span style="color:white; margin:0px 0px 0px 20px;">HND Opening Auth:</span><br>
        <span style="color:white;">08/0113/MINESUP/05/05/2008</span>
        </div>


        </div>
        <br/>
        

    </div class="row">
   
 <div class="row featurette" style="margin:120px 0px 0px 0px">
        
        <h2 class="featurette-heading">
    <span style="margin:0px 0px 0px 210px;font-size:xx-large;"><b><i>CONTACT US</i></b></span></h2>
    <div style="font-size:large;" class="col-md-14">
             
    <p class="lead">
             We are proud to be a PARTNER TRAINER with the Ministry of Public Health. <p>For our credibility Check us out with the Regional Delegation of Public Health Buea,</p>
             </p>
             <p>Tel: 233322262 General Office: 2333222210</p>
             <p><b>Visit Us in Long Street Tiko or Call Office: Tel: 233331273</b></p>
        </div>
</div> 


    <div style="background-color:white;border-radius:5%; float:left; position:relative; padding: 0px 0px 0px 10px;margin:0px 0px 0px 10px;" id="1">
        <b><span style="font-size:xx-large; color:red;">PARTNER INSTITUTIONS</span></b>
            <p style="color:red;">We are currently in partnership with the institutions below:</p>
            

            <ul class="list-group">
            <li class="list-group-item"><b><strong>University of Buea</strong></b>
            <p>P.O. Box 63, Buea</p>
            <p>Fako Division, SWR, Cameroon.</p>
            </li>
            <li class="list-group-item"><p><b><strong>
            Ecole Superieure Sainte Felicite</strong></b></p>
            <p>Godomey-Houedonou</p>
            <p>Republic of Benin</p>
            </li>
            <li class="list-group-item"><p><b><strong>College of Health Tecnology</strong></b>
            </p>
            <p>Obafemi Awolowo University</p>
            <p>Ile Ife Moro North</p>
            <p>Osun State , Nigeria</p>
            </li>
           <li class="list-group-item"> <p><b><strong>JONGSAM House of Excellence Ltd </strong>
           </b></p>
           <p>21 Bale Street, Itemope</p>
           <p>Ikorodu LAgos State, Nigeria</p>
           </li>
           

            </ul>
    </div>
    
    <div style="background-color:white;border-radius:5%; float:right; position:relative; padding: 0px 0px 0px 10px;margin:0px 0px 0px 270px; margin:0px 0px 0px 40px;" id="3">
<!--
    <h2 class="featurette-heading">
    <span style="margin:0px 0px 0px 510px;font-size:xx-large;"><b><i>Mail the CEO</i></b></span></h2>
--> 
    <p style="margin:0px 0px 0px 90px;"><b>Send a Mail To  The CEO</b></p>
<br/>
      <form method="POST" class="form-horizontal" role="form" action="{{url('/mail')}}">
          {!!csrf_field()!!}

          <div class="form-group">
              <label class="col-md-4 control-label">Name</label>
              <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{old('name')}}">
                  
              </div>
          </div>

          <div class="form-group">
              <label class="col-md-4 control-label">Email Address:</label>
              <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                  
              </div>
          </div>
          
          <div class="form-group">
              <label class="col-md-4 control-label">Message:</label>
              <div class="col-md-6">
              <textarea rows="5" cols="20" wrap="physical" class="form-control" name="comments">
                  Enter Message Text
              </textarea>
                  
              </div>
          </div>

        <div class="form-group">
      <div class="col-md-8 col-md-offset-2">
      <button type="submit" class="btn btn-success btn-lg btn-block">
      <i class="fa fa-btn fa-mail-reply-all"></i>  Submit Message
      </button>
      </div>
    </div>

      </form>
    </div>
    
</div>
@endsection
